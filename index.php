<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


ini_set('display_errors',1);
error_reporting(E_ALL);

session_start();

require_once('Auth.php');
include('form.phtml');


if(Auth::isAuth()){
    echo '<h1>Hello, '.Auth::getLogin()." </h1>";
}

if(isset($_POST['submit'])){
    Auth::authorize($_POST['login'],$_POST['password']);
    
}

if(isset($_POST['logout'])){
    Auth::logout();
}



