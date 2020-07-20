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
        if(!empty($_SESSION['id'])){
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
        if($user = $this->user->checkLogin($_POST['email'], $_POST['password'])){
            
            $_SESSION['name'] = $user['name'];
            $_SESSION['id'] = $user['id'];

            redirectTo('/home');
        } else {
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
        if(!empty($_SESSION['id'])){
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
        if(empty($_SESSION['id'])){
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
    public function logout()
    {   
    	session_destroy();
        redirectTo('/');
    }
}
