<?php 

class Userr{
    private $id;
    private $name;
    private $email;
    private $comment;

    function __construct($id,$name,$email,$comment){
         $this->id=$id;
         $this->name=$name;
         $this->email=$email;
         $this->comment=$comment;
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
    function getComment(){
        return $this->comment;
    }
}
// per tabelen e krijuar per kontakti

?>