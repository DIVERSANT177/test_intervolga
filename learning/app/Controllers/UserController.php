<?php

namespace App\Controllers;

use App\Models\UserChange;
use App\Models\UserLogin;
use App\Models\UserRegister;

class UserController extends Controller{
    function registration()
    {
        $user = new UserRegister();
        $user->setData($_POST);
        $user->registration();
    }

    function login()
    {
        $user = new UserLogin();
        $user->setData($_POST);
        $user->login();
    }

    function logout()
    {
        unset($_SESSION['user']);
        header('Location: /');
    }

    function changeData()
    {
        $user = new UserChange();
        $user->setData($_POST);
        $user->changeData();
    }
}