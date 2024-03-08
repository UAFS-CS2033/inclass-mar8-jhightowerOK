<?php

class Profile{
    private $profileID;
    private $firstName;
    private $lastName;
    private $username;
    private $passwd;

    
    public function setProfileID($profileID){
        $this->profileID = $profileID;
    }
    public function getProfileID(){
        return $this->profileID;
    }

    public function setFirstName($firstName){
        $this->firstName = $firstName;
    }
    public function getFirstName(){
        return $this->firstName;
    }


    public function setLastName($lastName){
        $this->lastName = $lastName;
    }
    public function getLastName(){
        return $this->lastName;
    }


    public function setUsername($username){
        $this->username = $username;
    }
    public function getUsername(){
        return $this->username;
    }


    public function setPasswd($passwd){
        $this->passwd = $passwd;
    }
    public function getPasswd(){
        return $this->passwd;
    }
  
}
?>
