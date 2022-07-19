<?php 
include '../database/databaseConnectionKon.php';

class UserRepositoryKon{
    private $connection;

    function __construct(){
        $conn = new DBConnection;
        $this->connection = $conn->startConnection();
    }

    function insertUserr($userr){
        $conn = $this->connection;

        $id = $userr->getId();
        $name = $userr->getName();
        $email = $userr->getEmail();
        $comment = $userr->getComment();

        $sql = "INSERT INTO userr (IDKon,Name,Email,Comment) VALUES (?,?,?,?)";
        
        $statement = $conn->prepare($sql);
        $statement->execute([$id,$name,$email,$comment]);
        echo "<script> alert('User has been inserted successfuly!') </script>";
    }

    function getAllUserrs(){
        $conn = $this->connection;

        $sql = "SELECT * FROM userr";
        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getUserByUsernameAndPassword($username,$password){
      
    }

    function getUserrById($id){
      $conn = $this->connection;

      $sql = "SELECT * FROM userr WHERE IDKon='$id'";
      $statement=$conn->query($sql);
      $userr = $statement->fetch();

      return $userr;
    }


    function updateUserr($id,$name,$email,$comment){
        $conn = $this->connection;

        $sql = "UPDATE userr SET name=?,email=?,comment=? where IDKon=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$name,$email,$comment,$id]);
        echo "<script> alert('User has been updated successfuly!') </script>";
    }

    function deleteUserrById($id){
        $conn = $this->connection;

        $sql = "DELETE FROM userr WHERE IDKon=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        echo "<script> alert('User has been deleted successfuly!') </script>";
    }
}


?>   