<?php

include_once '../repository/staffRepository.php';
$id = $_GET['ID'];
$staffRepository = new staffRepository();

$staffRepository->deleteStaffById($id);

header("location:StaffDash.php");
?>