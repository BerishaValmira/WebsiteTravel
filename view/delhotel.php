<?php

include_once '../repository/hotelRepository.php';
$id = $_GET['ID'];
$hotelRepository = new hotelRepository();

$hotelRepository->deleteHotelById($id);

header("location:hotDashboard.php");
?>