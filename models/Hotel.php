<?php
class hotel{
    private $id;
    private $name;
    private $location;
    private $image;
    private $capacity;
    
    

    function __construct($id,$name,$location,$image,$capacity){
         $this->id=$id;
         $this->name=$name;
         $this->location=$location;
         $this->image=$image;
         $this->capacity=$capacity;
        
         
      
    }


    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function getLocation(){
        return $this->location;
    }
    function getImage(){
        return $this->image;
    }
    function getCapacity(){
        return $this->capacity;
    }
    
   
}


?>