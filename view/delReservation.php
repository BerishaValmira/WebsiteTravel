<?php
    $hotelId=$_GET['id'];
    $userId=$_GET['userId'];
    include_once '../repository/userRepository.php';
    $userRepo=new UserRepository();
    $userRepo->delRez($userId,$hotelId);
    header("location:Bookings.php");
?>