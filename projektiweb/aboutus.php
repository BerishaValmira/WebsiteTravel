


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>About Us</title>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');


		body {
  font-family: 'Poppins',sans-serif;
  margin: 0;
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

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>

	</style>
</head>
<body>


<ul class="nav">
        <li style="float:left"><a  href="../projektiweb/anywheretravel.php">Anywhere Travel</a></li>
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

<div class="about-section">
  <h1>Rreth nesh</h1>
  <p>AnywhereTravel është agjencia më e madhe e udhëtimeve në pronësi të pavarur me seli në Prishtinë dhe renditet vazhdimisht në mesin e 50 më të mëdhenjve në Kosovë.
Që nga viti 2010, jemi të përkushtuar për t'u sjellë udhëtarëve më të mirën në aranzhimet e udhëtimit me vlerë dhe cilësi. Ne jemi të apasionuar pas udhëtimeve dhe për t’u ofruar udhëtarëve shërbime për të lehtësuar udhëtimin e tyre të biznesit, nevojave dhe ndarjes së mrekullive të botës në anën e udhëtimit të lirë.</p>
  
</div>

<h2 style="text-align:center">Ekipi ynë</h2>
<div class="row">
  
  <?php
    include_once '../repository/staffRepository.php';
    $staffRepository  = new staffRepository();
    $stafs = $staffRepository->getAllStaff();
    foreach($stafs as $staff){
  ?> 
       <div class="column">
        <div class="card">
        <img src=<?='"'.$staff['Picture'].'"'?> alt="<?=$staff['Name']?>" style="width:100%">
          <div class="container">
          <h2><?=$staff['Name'] ?></h2>
          <p class="title"><?=$staff['Job_Title']?></p>
          <p>Some text that describes me lorem ipsum ipsum lorem.</p>
          <p><?=$staff['Email']?></p>
          <Form action="kontakti.php">
          <a href="http:/ProjektiWebb/projektiweb/kontakti.php">
          <button  class="button" > Contact</button>
        </a>
        </Form> 
      </div>
      </div>
      </div>
       <?php
    }
    ?>
    
  
</div


</body>
</html>
