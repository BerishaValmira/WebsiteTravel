<?php 
include_once '../repository/userRepository.php';
include_once '../models/user.php';

if(isset($_POST['registerBtn'])){
    if(empty($_POST['name'])  || empty($_POST['email']) || 
       empty($_POST['password'])){
        echo "Please fill all fields!";
    }else{
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $id = rand(100,999).$name;
        $admin=0;

        $user = new User($id,$name,$email,$password,0);
        $userRepository = new UserRepository();
        $userRepository->insertUser($user);
        header("location:../projektiweb/anywheretravel.php");
    }
}


?>