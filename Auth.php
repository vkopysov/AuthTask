<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class  Auth{
    const LOGIN = 'admin';
    const PASSWORD = 'admin';


    public static function isAuth() {
        if(isset($_SESSION['user'])){
            return true;
        }
        return false;
    }
    
      public static function getLogin() {
        if(isset($_SESSION['user'])){
            return $_SESSION['user'];
        }
        return false;
    }
    
    public static function authorize($userName, $password){
        if(self::LOGIN == $userName && self::PASSWORD==$password){
             $_SESSION['user'] = $userName;
             header("Location: {$_SERVER['HTTP_REFERER']} ");
        }
        else{
            echo "Пользователь не существует или неправильный пароль";
        }
    }  
    
    public static function logout(){
        if(isset($_SESSION['user'])){
            
           unset($_SESSION['user']);
           header("Location: {$_SERVER['HTTP_REFERER']} ");
        }
        
    }
}