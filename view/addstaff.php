<?php
include_once '../repository/staffRepository.php';
include_once '../models/staff.php';

//$userId=$_GET['ID'];

$staffRepository=new staffRepository();

//$Course=$UserRepository->getUserByID($userId);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style type="text/css">
        body{
            background-color:grey;
        }
        
   .form-style-6{
	max-width: 600px;
	margin: 10px auto;
	padding: 16px;
	background: #F7F7F7;
}
.form-style-6 h1{
	background: #43D1AF;
	padding: 20px 0;
	font-size: 160%;
	font-weight: 300;
	text-align: center;
	color: #fff;
	margin: -16px -16px 16px -16px;
}


.form-style-6 input[type="text"],
.form-style-6 input[type="number"],
.form-style-6 input[type="url"],
.form-style-6 select 
{
	-webkit-transition: all 0.30s ease-in-out;
	-moz-transition: all 0.30s ease-in-out;
	-ms-transition: all 0.30s ease-in-out;
	-o-transition: all 0.30s ease-in-out;
	outline: none;
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	width: 100%;
	background: #fff;
	margin-bottom: 4%;
	border: 1px solid #ccc;
    border-color: grey;
	padding: 3%;
	color: #555;
	font: 95% Arial, Helvetica, sans-serif;
}
.form-style-6 input[type="text"]:focus,
.form-style-6 input[type="number"]:focus,
.form-style-6 input[type="url"]:focus,

{
	box-shadow: 0 0 5px #43D1AF;
	padding: 3%;
	border: 1px solid #43D1AF;
}
.form-style-6 input[type="submit"],
.form-style-6 input[type="button"]{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	width: 100%;
	padding: 3%;
	background: #43D1AF;
	border-bottom: 2px solid #30C29E;
	border-top-style: none;
	border-right-style: none;
	border-left-style: none;	
	color: #fff;
}
.form-style-6 input[type="submit"]:hover,
.form-style-6 input[type="button"]:hover{
	background: #2EBC99;
}


    </style>
    </head>
<body>
<div class="form-style-6">
<form action="" method="POST">
 <h1>Add a Staff</h1>
    <input type="text" name="StafID" value="" placeholder="StafID"><br><br>
    <input type="text" name="Name" value="" placeholder="Name"><br><br>
    <input type="text" name="Surname" value="" placeholder="Surname"><br><br>
    <input type="text" name="job_Title" value="" placeholder="job_Title"><br><br>
    <input type="text" name="Email" value="" placeholder="Email"><br><br>
    <input type="text" name="Picture" value="" placeholder="Picture"><br><br>

    <input type="submit" name="save" value="save"><br><br>

    <a href="StaffDash.php"><input type="button" class="button" value="cancel"></a>
</form>
</div>
</body>
</html>

<?php

if(isset($_POST['save'])){
    $id=$_POST['StafID'];
    $name=$_POST['Name'];
    $surname=$_POST['Surname'];
    $job=$_POST['job_Title'];
    $email=$_POST['Email'];
    $image=$_POST['Picture'];
    $staff=new staff($id,$name,$surname,$job,$email,$image);
    $staffRepository->insertStaff($staff);
    header("location:staffDash.php");
}

?>