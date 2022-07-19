<?php
session_start();
if(!isset($_SESSION['email'])){
    header("location:kycu.php");
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
     body{
      background-color:grey;
     }
      h1{
        text-align:center;
        border-style: dotted;
       color:white;
     
        font-family: 'Nanum Gothic';
        border-radius: 4px;
      }
        ul.nav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;

}


li {
  float: right;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
  background-color:white;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}
        /* the booking part */
        div.elem-group {
        margin: 20px 0;
        }

        div.elem-group.inlined {
        width: 49%;
        display: inline-block;
        float: left;
        margin-left: 1%;
        }

        label {
        display: block;
        font-family: 'Nanum Gothic';
        padding-bottom: 10px;
        font-size: 1.25em;
        }

        input, select, textarea {
        border-radius: 2px;
        border: 2px solid #777;
        box-sizing: border-box;
        font-size: 1.25em;
        font-family: 'Nanum Gothic';
        width: 100%;
        padding: 10px;
        }

        div.elem-group.inlined input {
        width: 95%;
        display: inline-block;
        }

        textarea {
        height: 250px;
        }

        hr {
        border: 1px dotted #ccc;
        }

        button {
        height: 50px;
        padding: 10px;
        /* margin: 500px 500px; */
        background: orange;
        border: none;
        color: white;
        font-size: 1.25em;
        font-family: 'Nanum Gothic';
        border-radius: 4px;
        cursor: pointer;
        }

        button:hover {
        border: 2px solid black;
        }
        /* the booking part */
        a{
          text-decoration:none;
        }
    </style>
</head>
<body>
<div>
      <ul class="nav">
        <li style="float:left"><a  href="../projektiweb/anywheretravel.php">Anywhere Travel</a></li>
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
    
    <?php
    include_once '../models/user.php';
    include_once '../repository/userRepository.php';
     
        $userRepository=new userRepository();
        $userId=$_SESSION['User_ID'];
        $hotels=$userRepository-> getNotRezHotels($userId);
       
        ?>
        <div class="row" >
          <h1>Lista e hoteleve qe mund ti rezervosh</h1>
        <?php
        foreach($hotels as $hotel){
            
        ?>
        
             <div class="column">
        <div class="card">
          <img src=<?='../projektiweb/'.$hotel['HotImage']?> alt="<?=$hotel['HotName']?>" style="width:100%">
          <div class="container">
          <h2><?=$hotel['HotName']?></h2>
          <p class="title"><?=$hotel['HotLocation']?></p>
          <p>Some text that describes me lorem ipsum ipsum lorem.</p>
          <p><?=$hotel['HotCapacity']?></p>
          <Form action="Booking.php">
              <?php
              $userId=$_SESSION['User_ID'];
              $email=$_SESSION['email'];
              echo
              "
              <button  class='button' >
                <a href='Booking.php?id=$hotel[HotID]' >Book this!</a>
              </button>
              ";
            ?>
            </Form> 
      </div>
      </div>
      </div>
      
      <?php
      }
        
        ?>
        </div>
        <div class="row" >
          <h1>Lista e hoteleve te rezervuara</h1>
        <?php
        
        
          $nothotels=$userRepository->getRezHotels($userId);
          foreach($nothotels as $hotel){
            
            ?>
            
              <div class="column">
              <div class="card">
              <img src=<?='../projektiweb/'.$hotel['HotImage']?> alt="<?=$hotel['HotName']?>" style="width:100%">
              <div class="container">
              <h2><?=$hotel['HotName']?></h2>
              <p class="title"><?=$hotel['HotLocation']?></p>
              <p>Some text that describes me lorem ipsum ipsum lorem.</p>
              <p><?=$hotel['HotCapacity']?></p>
              
                  <?php
                  $userID=$_SESSION['User_ID'];
                  echo
                  "
                <button  class='button' >
                <a href='delReservation.php?id=$hotel[HotID]&&userId=$userID'>Remove!</a>
              </button>
                ";
              
            
            ?>
          
         
      </div>
      </div>
      </div>
          
        <?php
            
        }

      
    ?>
    </div>
    
</body>
</html>
<?php
}

?>

