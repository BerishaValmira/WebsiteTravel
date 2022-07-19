<?php
session_start();
if(!isset($_SESSION['email'])){
    header("location:kycu.php");
}else{
    if($_SESSION['admin']!=1){
        header("location:anywheretravel.php");
    }else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
	<link rel="stylesheet" href="../projektiweb/style.css">
	<style>

.button1{
            color: grey;
            border: none;
            font-size: 16px;
            /* padding:10% 30%; */
            background-color: #e6a6cc;
        }
        a{
            text-decoration: none;
        }
        body{
            color:black;
            background-color: #333;
        }
        .table1{
            width:100%;
            padding:2px;
            border-color:white;
            background-color:grey;
            text-align:center;
        }
        
        
    </style>

</head>
<body >
<div>
      <ul class="nav">
        <li style="float:left"><a  href="anywheretravel.php">Anywhere Travel</a></li>
        <!-- <li><a href="kycu.php">Kyçu</a></li> -->
        <?php 
        
        if(isset($_SESSION['email'])){
          echo"<li><a href='../controller/LogOut.php'>LogOut</a></li>";
          echo"<li><a href='../view/Bookings.php'>Reservations</a></li>";
        }else{
          echo"
          <li><a href='kycu.php'>kycu</a></li>";
        }
        ?> 
        <li><a href="../projektiweb/kontakti.php">Kontakti</a></li>
        <li><a href="../projektiweb/galeria.php">Galeria</a></li>
        <!-- <li><a href="booking.php">Bileta Online</a></li> -->
        <li><a href="../projektiweb/aboutus.php">Rreth nesh</a></li>
        <li><a href="../projektiweb/anywheretravel.php">Kryefaqja</a></li>
          
        <?php

			if(isset($_SESSION['email'])){
        if($_SESSION['admin']==1){
				echo"<li><a href='../view/dashboard.php'>dashboard</a></li>";
                echo"<li><a href='../view/StaffDash.php'>Staff Management</a></li>";
                echo"<li><a href='../view/hotDashboard.php'>Hotels</a></li>";}
            
			}else{
			
			}

			?>
    
      </ul>
    </div>
    <table border="2" class="table1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>admin</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        include_once '../repository/userRepository.php';
        $userRepository  = new UserRepository();
        $users = $userRepository->getAllUsers();
        foreach($users as $user){
           echo 
           "
           <tr>
               <td>$user[Id]</td>
               <td>$user[Name]</td>
               <td>$user[Email]</td>
               <td>$user[Password]</td>
               <td>$user[admin]</td>
              



               <td><div style='width: 100%; height: 100%;'>
               <button  class='button1' style='width: 100%; height: 100%;'>
               <a href='edit.php?id=$user[Id]'>Edit</a>
             </button>
               </div>
               </td>
               <td>
               <div style='width: 100%; height: 100%;'>
               <button  class='button1' style='width: 100%; height: 100%;'>
               <a href='delete.php?id=$user[Id]'>Delete</a>
             </button>

           </tr>
           ";
        }
        
        
        ?>
    </table>
</body>
</html>
<?php
    }
}
?>