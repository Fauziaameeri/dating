<?php
/**
 * @author Fauzia
 * 05/19/2022
 * Dating/model/validation-layer.php
 */

    function validfName($fName)
    {
      return  strlen(trim($fName)) >= 2;

    }
    function validlName($lName)
    {
        return  strlen(trim($lName)) >= 2;
    }

    function validAge($age): bool
    {
        return $age >= 18 && $age <= 118;
    }
    function validPhone($number)
    {
       return preg_match('/^[0-9]{10}+$/', $number);;
    }

    function validEmail($email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
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
