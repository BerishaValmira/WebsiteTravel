

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>About Us</title>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');


  
* {
  box-sizing: border-box;
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

body {
  margin: 0;
  /* font-family: Arial; */
  font-family: 'Poppins',sans-serif;
}

.header {
  text-align: center;
  padding: 32px;
}

.row {
  display: -ms-flexbox; 
  display: flex;
  -ms-flex-wrap: wrap; 
  flex-wrap: wrap;
  padding: 0 4px;
}


.column {
  -ms-flex: 25%; 
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
}


@media screen and (max-width: 800px) {
  .column
   {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}

@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
}


</style>
</head>
<body>

<ul class="nav">
        <li style="float:left"><a  href="anywheretravel.php">Anywhere Travel</a></li>
        <!-- <li><a href="kycu.php">Kyçu</a></li> -->
        <?php 
         session_start();
        if(isset($_SESSION['email'])){
          echo"<li><a href='../controller/LogOut.php'>LogOut</a></li>";
          echo"<li><a href='../view/Bookings.php'>Reservations</a></li>";
        }else{
          echo"
          <li><a href='kycu.php'>kycu</a></li>";
        }
        ?> 
        <li><a href="kontakti.php">Kontakti</a></li>
        <li><a href="galeria.php">Galeria</a></li>
        <!-- <li><a href="booking.php">Bileta Online</a></li> -->
        <li><a href="aboutus.php">Rreth nesh</a></li>
        <li><a href="anywheretravel.php">Kryefaqja</a></li>
          
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

<div class="header">
  

<!-- Photo Grid -->
<div class="row"> 
  <div class="column">
    <img src="photos//1.jpg" style="width:100%">
    <img src="photos//2.jpg" style="width:100%">
    <img src="photos//3.jpg" style="width:100%">

    
    
    <img src="photos//7.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="photos//8.jpg" style="width:100%">
    <img src="photos//9.jpg" style="width:100%">
    <img src="photos//10.jpg" style="width:100%">

       

  </div>  
  <div class="column">
    <img src="photos//12.jpg" style="width:100%">
   <img src="photos//5.jpg" style="width:100%">
    <img src="photos//6.jpg" style="width:100%">

  </div>
  <div class="column">
    <img src="photos//13.jpg" style="width:100%">
    <img src="photos//7.jpg" style="width:100%">
     <img src="photos//4.jpg" style="width:100%">



  </div>
</div>

</body>
</html>

