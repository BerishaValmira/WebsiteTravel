<?php 

class Staff{
    private $id;
    private $name;
    private $surname;
    private $jobTitle;
    private $email;
    private $picture;
    // private $admin;
    

    function __construct($id,$name,$surname,$jobTitle,$email,$picture){
         $this->id=$id;
         $this->name=$name;
         $this->surname=$surname;
         $this->jobTitle=$jobTitle;
         $this->email=$email;
         $this->picture=$picture;
         
      
    }


    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function getSurname(){
        return $this->surname;
    }
    function getJobTitle(){
        return $this->jobTitle;
    }
    function getEmail(){
        return $this->email;
    }
    function getPicture(){
        return $this->picture;
    }
   
   
}


?>