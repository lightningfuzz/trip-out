<?php

class RegisteredUser {

    private $userName;
    private $password;
    private $regTime; //registration time
    private $lastLoginTime;
    private $email;
    private $numReviews; //number of reviews posted by the user

    public function getUserID() {
        return $this->userID;
    }

    public function getUserName() {
        return $this->userName;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getRegTime() {
        return $this->regTime;
    }

    public function getLastLoginTime() {
        return $this->lastLoginTime;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getNumReviews() {
        return $this->numReviews;
    }

    public function setUserID($userID) {
        $this->userID = $userID;
    }

    public function setUserName($userName) {
        $this->userName = $userName;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setRegTime($regTime) {
        $this->regTime = $regTime;
    }

    public function setLastLoginTime($lastLoginTime) {
        $this->lastLoginTime = $lastLoginTime;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setNumReviews($numReviews) {
        $this->numReviews = $numReviews;
    }

}

?>
