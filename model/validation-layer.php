<?php
/**
 * @author Fauzia
 * 05/19/2022
 * Dating/model/validation-layer.php
 */
class Validate
{

    /** valid fName() returns true if first name contains only alphabetic characters
     * @param $fName
     * @return bool
     */
    function validfName($fName)
    {
        return ctype_alpha($fName) && isset($fName);
    }

    /** valid lName() returns true if last name contains only alphabetic characters
     * @param $lName
     * @return bool
     */
    function validlName($lName)
    {
        return ctype_alpha($lName) && isset($lName);
    }

    /** validAge() returns true if age is greater than 18, and less than 100
     * @param $age
     * @return bool
     */
    function validAge($age): bool
    {
        return $age > 18 && $age < 100;
    }

    /** validPhone() returns true if phone number is 10 or 11 digits long
     * @param $number
     * @return bool
     */
    function validPhone($number): bool
    {
        if ($number >= 1000000000 && $number <= 99999999999) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $email
     * @return bool
     */
    function validEmail($email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    /** validOutdoor() returns true if all the selected outdoor-activities are
     * in the list
     * @param $outdoorActivities
     * @return bool
     */
    function validOutdoor($outdoorActivities): bool
    {
        global $dataLayer;

        $validOutdoor = $dataLayer->getOutdoor();

        foreach ($outdoorActivities as $activity) {
            if (!in_array($activity, $validOutdoor)) {
                return false;
            }
        }
        return true;
    }

    /** validOutdoor() returns true if all the selected indoor-activities are
     * in the list
     * @param $indoorActivities
     * @return bool
     */
    function validIndoor($indoorActivities): bool
    {
        global $dataLayer;

        $validIndoor = $dataLayer->getIndoor();

        foreach ($indoorActivities as $activity) {
            if (!in_array($activity, $validIndoor)) {
                return false;
            }
        }
        return true;
    }
}