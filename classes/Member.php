<?php
/**
 * Member class to store non-premium user data.
 *
 * @author FA
 */
class Member
{
    private $_fName;
    private $_lName;
    private $_age;
    private $_gender;
    private $_phone;
    private $_email;
    private $_state;
    private $_seeking;
    private $_bio;

    /**
     * Member constructor.
     * @param $_fName
     * @param $_lName
     * @param $_age
     * @param $_gender
     * @param $_phone
     */
    public function __construct($_fName = "", $_lName = "", $_age = "", $_gender ="", $_phone = "")
    {
        $this->_fName = $_fName;
        $this->_lName = $_lName;
        $this->_age = $_age;
        $this->_gender = $_gender;
        $this->_phone = $_phone;

    }

    public function getFName()
    {
        return $this->_fName;
    }

    public function setFName($fName): void
    {
        $this->_fName = $fName;
    }

    public function getLName()
    {
        return $this->_lName;
    }

    public function setLName($lName): void
    {
        $this->_lName = $lName;
    }

    public function getAge()
    {
        return $this->_age;
    }

    public function setAge($age): void
    {
        $this->_age = $age;
    }

    public function getGender()
    {
        return $this->_gender;
    }

    public function setGender($gender): void
    {
        $this->_gender = $gender;
    }

    public function getPhone()
    {
        return $this->_phone;
    }

    public function setPhone($phone): void
    {
        $this->_phone = $phone;
    }

    public function getEmail()
    {
        return $this->_email;
    }

    public function setEmail($email): void
    {
        $this->_email = $email;
    }

    public function getState()
    {
        return $this->_state;
    }

    public function setState($state): void
    {
        $this->_state = $state;
    }

    public function getSeeking()
    {
        return $this->_seeking;
    }

   public function setSeeking($seeking): void
    {
        $this->_seeking = $seeking;
    }
    public function getBio()
    {
        return $this->_bio;
    }
    public function setBio($bio): void
    {
        $this->_bio = $bio;
    }
    public function isMember(): bool
    {
        return $this->_member;
    }
}