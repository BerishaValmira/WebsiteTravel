<?php 
include '../database/databaseConnection.php';

class UserRepository{
    private $connection;

    function __construct(){
        $conn = new DBConnection;
        $this->connection = $conn->startConnection();
    }

    function insertUser($user){
        $conn = $this->connection;

        $id = $user->getId();
        $name = $user->getName();
        $email = $user->getEmail();
        $password = $user->getPassword();
        $admin= $user->getAdmin();
       

        $sql = "INSERT INTO user (id,name,email,password,admin) VALUES (?,?,?,?,?)";
        
        $statement = $conn->prepare($sql);
        $statement->execute([$id,$name,$email,$password,$admin]);
        echo "<script> alert('User has been inserted successfuly!') </script>";
    }

    function getAllUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM user";
        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getUserByUsernameAndPassword($username,$password){
      
    }

    function getUserById($id){
      $conn = $this->connection;

      $sql = "SELECT * FROM user WHERE id='$id'";
      $statement=$conn->query($sql);
      $user = $statement->fetch();

      return $user;
    }


    function updateUser($id,$name,$email,$password,$admin){
        $conn = $this->connection;

        $sql = "UPDATE user SET name=?,email=?,password=?,admin=? where id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$name,$email,$password,$admin,$id]);
        echo "<script> alert('User has been updated successfuly!') </script>";
    }

    function deleteUserById($id){
        $conn = $this->connection;

        $sql = "DELETE FROM user WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        echo "<script> alert('User has been deleted successfuly!') </script>";
    }

    function makeRez($hotelId,$userId,$phone,$numpeople,$checkin,$durability,$roompreference,$anythingelse){
        $conn = $this->connection;
        
        $sql = "INSERT INTO userhotel (hotid,userid,phonenumber,numpeople,checkin,durability,roompref,anythingelse) VALUES (?,?,?,?,?,?,?,?)";
        
        $statement = $conn->prepare($sql);
        $statement->execute([$hotelId,$userId,$phone,$numpeople,$checkin,$durability,$roompreference,$anythingelse]);
        echo "<script> alert('User has been inserted successfuly!') </script>";
    }

    function delRez($userId,$hotelId){
        $conn=$this->connection;

        $sql=" DELETE FROM userhotel WHERE HotID=? AND UserID=?";
        $statement=$conn->prepare($sql);
        $statement->execute([$hotelId,$userId]);
        echo "<script>alert('CourseUser has been inserted succesfully!')</script>";
    }

    function getRezHotels($userId){
        $conn=$this->connection;
        

        $sql= "SELECT * FROM hotels c inner join
               userhotel uc ON
               c.HotID=uc.HotID
               where uc.UserID='$userId' ";

        $statement= $conn->query($sql);
        $hotels = $statement->fetchAll();
        return $hotels;
    }

    function getNotRezHotels($userId){
        $conn=$this->connection;
        

        $sql= "SELECT * FROM hotels 
               where HotID not  in(
                   Select HotID from userhotel where UserID='$userId'
               )";
        

        $statement= $conn->query($sql);
        $hotels = $statement->fetchAll();
        return $hotels;
    }
    function getuserbyemail($email){
        $conn = $this->connection;

      $sql = "SELECT * FROM user WHERE email='$email'";
      $statement=$conn->query($sql);
      $user = $statement->fetch();

      return $user;
    }
}


?>