<?php 
include '../database/databaseConnection.php';

class staffRepository{
    private $connection;

    function __construct(){
        $conn = new DBConnection;
        $this->connection = $conn->startConnection();
    }

    function insertStaff($staff){
        $conn = $this->connection;

        $id = $staff->getId();
        $name = $staff->getName();
        $surname = $staff->getSurname();
        $jobTitle = $staff->getJobTitle();
        $email = $staff->getEmail();
        $picture = $staff->getPicture();
        
       

        $sql = "INSERT INTO staff VALUES (?,?,?,?,?,?)";
        
        $statement = $conn->prepare($sql);
        $statement->execute([$id,$name,$surname,$jobTitle,$email,$picture]);
        echo "<script> alert('Staff Member has been inserted successfuly!') </script>";
    }

    function getAllStaff(){
        $conn = $this->connection;

        $sql = "SELECT * FROM staff";
        $statement = $conn->query($sql);
        $staffs = $statement->fetchAll();

        return $staffs;
    }

    //function getUserByUsernameAndPassword($username,$password){
      
    

    function getStaffById($id){
      $conn = $this->connection;

      $sql = "SELECT * FROM staff WHERE StafID='$id'";
      $statement=$conn->query($sql);
      $staff = $statement->fetch();

      return $staff;
    }


    function updateStaff($stafid,$name,$surname,$jobTitle,$email,$picture){
        $conn = $this->connection;

        $sql = "UPDATE staff SET name=?,surname=?,job_title=?,email=?,picture=? where StafID=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$name,$surname,$jobTitle,$email,$picture,$stafid]);
        echo "<script> alert('Staff Member has been updated successfuly!') </script>";
    }

    function deleteStaffById($id){
        $conn = $this->connection;

        $sql = "DELETE FROM staff WHERE StafId=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        echo "<script> alert('Staff Member has been deleted successfuly!') </script>";
    }
}


?>