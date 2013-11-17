<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of accountManager
 *
 * @author deon
 */
require_once("../DAOs/RegisteredUserDAO.php");
require_once("../Exceptions/UsernameException.php");


class AccountController {

    private $user; //contains the current user

    //private construct

    private function __construct() {
        
    }

    /**
     * logs in a user; updates the login time
     * @param $username the login username
     * @param $password the login password
     * @throws LoginException if username password pair not found
     * @return the RegisteredUser object if success
     */
    public static function login($username, $password) {

        //checks if the username and password pair exists
        if (($this->user = RegisteredUserDAO::getByUsernameAndPassword($username, $password) ) == null)
            throw new LoginException();

        //update the login time into the database
        $this->user->setLastLoginTime(date("F j, Y, g:i:s a"));
        return RegisteredUserDAO::update($this->user);
    }

    public static function logout() {
        $this->user = null;
    }

    /**
     * adds a new user to the database
     * @param $user the RegisteredUser object
     * @throws UsernameException if username exists
     * @return the RegisteredUser object if success
     */
    public static function register(RegisteredUser $user) {

        //checks if username already taken
        if ((RegisteredUserDAO::getByUsername($user->getUserName())) != null)
            throw new UsernameException();

        //save the registration time and create the user
        $user->setRegTime(date("F j, Y, g:i:s a"));
        return ($user = RegisteredUserDAO::create($user));
    }
    
    public static function isLogin() {
        if ($this->user)
            return true;
        else
            return false;
    }
    
    /**
     * checks if username is not used; username has to be unique
     * @param $username the new username
     * @return true if not taken; else false
     */
    public static function isUsernameValid($username) {

        if (RegisteredUserDAO::getByUsername($username))
            return false; //username taken
        else
            return true; //useranme is not used
    }
    
    /**
     * checks if password is valid; currently requires at least 4 characters
     * @param $password the new password
     * @return true if success; else false
     */
    public static function isPasswordValid($password) {

        if (strlen($password) < 4) //at least 4 characters for now
            return false;
        else
            return true;
    }
    
    public static function getLoggedinUser() {
        return $this->user;
    }
    
    public static function delete(RegisteredUser $user){
        
        return RegisteredUserDAO::delete($user->getUserID());
    }

}

?>
