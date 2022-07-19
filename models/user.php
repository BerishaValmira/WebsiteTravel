<?php 

class User{
    private $id;
    private $name;
    private $email;
    private $password;
    private $admin;
    

    function __construct($id,$name,$email,$password,$admin){
         $this->id=$id;
         $this->name=$name;
         $this->email=$email;
         $this->password=$password;
         $this->admin=$admin;
      
    }


    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function getEmail(){
        return $this->email;
    }
    function getPassword(){
        return $this->password;
    }
    function getAdmin(){
        return $this->admin;
    }
   
}


?>