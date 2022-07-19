<?php 
include '../database/databaseConnection.php';

class hotelRepository{
    private $connection;

    function __construct(){
        $conn = new DBConnection;
        $this->connection = $conn->startConnection();
    }

    function insertHotel($hotel){
        $conn = $this->connection;

        $id = $hotel->getId();
        $name = $hotel->getName();
        $location = $hotel->getLocation();
        $image = $hotel->getImage();
        $capacity = $hotel->getCapacity();
        
        
       

        $sql = "INSERT INTO hotels VALUES (?,?,?,?,?)";
        
        $statement = $conn->prepare($sql);
        $statement->execute([$id,$name,$location,$image,$capacity]);
        echo "<script> alert('Hotel has been inserted successfuly!') </script>";
    }

    function getAllHotels(){
        $conn = $this->connection;

        $sql = "SELECT * FROM hotels";
        $statement = $conn->query($sql);
        $hotels = $statement->fetchAll();

        return $hotels;
    }

    //function getUserByUsernameAndPassword($username,$password){
      
    

    function getHotelById($id){
      $conn = $this->connection;

      $sql = "SELECT * FROM hotels WHERE HotId='$id'";
      $statement=$conn->query($sql);
      $hotel = $statement->fetch();

      return $hotel;
    }


    function updateHotel($id,$name,$location,$image,$capacity){
        $conn = $this->connection;

        $sql = "UPDATE hotels SET hotname=?,hotlocation=?,hotimage=?,hotcapacity=? where hotid=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$name,$location,$image,$capacity,$id]);
        echo "<script> alert('Hotel has been updated successfuly!') </script>";
    }

    function deleteHotelById($id){
        $conn = $this->connection;

        $sql = "DELETE FROM hotels WHERE hotid=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        echo "<script> alert('Hotel has been deleted successfuly!') </script>";
    }
}


?>