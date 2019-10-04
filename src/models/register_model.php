<?php

class Register_Model extends Model
{
    function __construct(){
        parent:: __construct();
    
    }
    function addUser(){
        $check = $this->db->prepare('SELECT email FROM users WHERE email = "'.$_POST['email'].'"');
        $check->execute();
        $count = $check->rowCount();
        if($count == 0){
            $sth = $this->db->prepare('INSERT INTO `users`( `first_name`, `last_name`, `email`, `phone`, `password`, `address`, `access`, `status`) VALUES (:first_name,:last_name,:email,:phone,:password,:address,:access,:status)');
            $sth->execute(array(
                ':first_name'=>$_POST['first_name'],
                ':last_name'=>$_POST['last_name'],
                ':email'=>$_POST['email'],
                ':phone'=>$_POST['phone'],
                ':password'=>$_POST['password'],
                ':address'=>$_POST['address'],
                ':access'=>0,
                ':status'=>'active',                
            ));
        };
       
        echo "Email already exist, please Sign In into your acccount or use another email";
        exit;
    }
}



?>