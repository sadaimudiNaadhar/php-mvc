<?php

namespace App\Controllers;

use App\Models\User;
use Main\View;
use Main\Controller as Base;

class Home extends Base
{

    public function __construct()
    {
        $this->user = new User();
    }

    /**
     * Show the index page
     *
     * @return void
     */
    public function index()
    {
        if($this->activeSession()){
            redirectTo('/home');
        } else {
            View::render('login.php');
        }
    }

    /**
     * Login check
     *
     * @return void
     */
    public function login()
    {   
        (!($this->validateInput()) || !($this->validateEmail()))? redirectTo('/') : null;

        if($user = $this->user->checkLogin($_POST['email'], $_POST['password'])){
            $this->setUserSession($user['name']);
        } else {
            
            setError("Incorrect Credentials. Login Failed!");
            redirectTo('/');
        }
    }


    /**
     * Show the index page
     *
     * @return void
     */
    public function registerView()
    {   
        if($this->activeSession()){
            redirectTo('/home');
        } else {
            View::render('register.php');
        }
    }

    /**
     * Show the index page
     *
     * @return void
     */
    public function home()
    {
        if(! $this->activeSession()){
            redirectTo('/');
        } else {
            View::render('home.php');
        }
    }

    /**
     * Show the index page
     *
     * @return void
     */
    public function registerUser()
    {   
        (!($this->validateInput()) || !($this->validateEmail()))? redirectTo('/register') : null;

        if($this->user->registerUser($_POST['email'], $_POST['password'],  $_POST['name'])) {
            $this->setUserSession($_POST['name']);
        } else {
            setError("User registration failed!");
            redirectTo('/register');
        }
    }

    /**
     * Show the index page
     *
     * @return void
     */
    public function logout()
    {   
    	session_destroy();
        redirectTo('/');
    }

    /**
     * Validate Email
     *
     * @return void
     */
    private function validateEmail()
    {   
        if (! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            setError("Please enter a vaid Email!");
            return false;
        }

        return true;
    }
}
