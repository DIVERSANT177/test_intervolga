<?php

namespace App\Controllers;

use App\Models\UserChange;

class SiteController extends Controller {

    public function index(){
        include_once $this->template . 'header.php';
        include $this->template . 'index.php';
    }

    public function login(){
        include_once $this->template . 'header.php';
        include $this->template . 'admin/login.php';
    }

    public function registration(){
        include_once $this->template . 'header.php';
        include $this->template . 'admin/registration.php';
    }

//    public function logout(){
//        include $this->template . 'admin/logout.php';
//    }

    public function personalAccount(){
        if($_SESSION['user'] == '')
            return;
        include_once $this->template . 'header.php';
        include $this->template . 'admin/personalAccount.php';
    }

    public function createNews(){
        if($_SESSION['user'] == '')
            return;
        include_once $this->template . 'header.php';
        include $this->template . 'admin/createNews.php';
    }

    public function changeData(){
        if($_SESSION['user'] == '')
            return;
        $user = new UserChange();
        $user = $user->where('id', $_SESSION['user']);
        include_once $this->template . 'header.php';
        include $this->template . 'admin/changeData.php';
    }

}