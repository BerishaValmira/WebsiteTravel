<?php
include_once '../models/user.php';
include_once '../repository/userRepository.php';


if(isset($_POST['LogInBtn'])){
    if(empty($_POST['email'])||empty($_POST['password'])){
        echo "Please fill all fields";
    }else{
        
        $email=$_POST['email'];
        $password=$_POST['password'];

        $userRepository=new userRepository();

        $users=$userRepository->getAllUsers();
        
        //go to login
        foreach($users as $user){
           
            if($email == $user['Email'] && $password == $user['Password']){
                // session code
                //$_SESSION['User_ID']=$user['id'];
                session_start();
                $_SESSION['User_ID']=$user['Id'];
                
                $_SESSION['email']=$email;
                $_SESSION['password']=$password;
                
                $_SESSION['admin']=$user['admin'];
                // session code
                header("location:../projektiweb/anywheretravel.php");
                exit();
            }
            
        }
    }
}

?>