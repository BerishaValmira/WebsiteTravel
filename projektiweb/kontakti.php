
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Na Kontaktoni</title>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');


		body {
  font-family: 'Poppins',sans-serif;
  margin: 0;
}
body { background:rgb(30,30,40); }
form { max-width:450px; margin:50px auto; }
body {
  font-family: 'Poppins',sans-serif;
  margin: 0;

}

ul.nav {
  list-style-type: none;
  margin: 0;
  padding:0px  18px 0px 0px   ;
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

.feedback-input {
  color:white;
  font-family: Helvetica, Arial, sans-serif;
  font-weight:500;
  font-size: 18px;
  border-radius: 5px;
  line-height: 22px;
  background-color: transparent;
  border:2px solid white;
  transition: all 0.3s;
  padding: 13px;
  margin-bottom: 15px;
  width:100%;
  box-sizing: border-box;
  outline:0;
}

.feedback-input:focus { border:2px solid #CC4949; }

/* textarea {
  height: 150px;
  line-height: 150%;
  resize:vertical;
} */

[type="submit"] {
  font-family: 'Montserrat', Arial, Helvetica, sans-serif;
  width: 100%;
  background:white;
  border-radius:5px;
  border:0;
  cursor:pointer;
  color:black;
  font-size:24px;
  padding-top:10px;
  padding-bottom:10px;
  transition: all 0.3s;
  margin-top:-4px;
  font-weight:700;
}

[type="submit"]:hover { background:#CC4949; }
 
 h1{
 	color:white;
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


<br>
<h1 align="center">Na kontaktoni!</h1>

<form  method="POST"  onsubmit="return validate();" action="<?php echo $_SERVER['PHP_SELF']?>">      
  <input type="text" class="feedback-input" name="name" id="name" placeholder="Emri" />   
  <input type="text" class="feedback-input"  name="email" id="email" placeholder="Email" />
   <input type="text" name="comment" class="feedback-input"  id="comment" placeholder="Comment">
  <input type="submit" value="SUBMIT" name="registerButon" />
</form>
<?php   include_once '../controller/registerControllerKon.php'?>
<!-- jS validimi-->
<script>
function validate()
{
        
         if(document.getElementById('name').value == '')
         {      
        alert("Please Provide Name!");
               document.getElementById('name').focus();
        return false;       
        }
        else if(document.getElementById('email').value == '')
         {      
        alert("Please Provide Email!");
               document.getElementById('email').focus();
        return false;       
        }
        else if(document.getElementById('comment').value == '') 
         {      
        alert("Please Provide Comments!");
              document.getElementById('comment').focus();
        return false;       
        }
         else
           return true;
}
    </script>




</body>
</html>
