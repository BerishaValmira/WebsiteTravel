<?php

include_once '../repository/userRepositoryKon.php';
$id = $_GET['id'];
$userRepositoryKon = new UserRepositoryKon();

$userRepositoryKon->deleteUserrById($id);

header("location:dashboardKon.php");
?>