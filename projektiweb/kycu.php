
<?php

// session_start();

if(isset($_SESSION['email'])){
  header("location:anywheretravel.php");
}else{

?>

<!DOCTYPE html>
<html>
<head>
	<title>Join Us!</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');


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
  font-family: 'Poppins',sans-serif;

}
	

li {
  float: right;
  float: top;

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

.main{
  width: 350px;
  height: 500px;
  background: red;
  overflow: hidden;
  background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
  border-radius: 10px;
  box-shadow: 5px 20px 50px #000;
}
#chk{
  display: none;
}
.signup{
  position: relative;
  width:100%;
  height: 100%;
}
label{
  color: #fff;
  font-size: 2.3em;
  justify-content: center;
  display: flex;
  margin: 60px;
  font-weight: bold;
  cursor: pointer;
  transition: .5s ease-in-out;
}
input{
  width: 60%;
  height: 20px;
  background: #e0dede;
  justify-content: center;
  display: flex;
  margin: 20px auto;
  padding: 10px;
  border: none;
  outline: none;
  border-radius: 5px;
}
button{
  width: 60%;
  height: 40px;
  margin: 10px auto;
  justify-content: center;
  display: block;
  color: #fff;
  background: #573b8a;
  font-size: 1em;
  font-weight: bold;
  margin-top: 20px;
  outline: none;
  border: none;
  border-radius: 5px;
  transition: .2s ease-in;
  cursor: pointer;
}
button:hover{
  background: #6d44b8;
}
.login{
  height: 460px;
  background: #eee;
  border-radius: 60% / 10%;
  transform: translateY(-180px);
  transition: .8s ease-in-out;
}
.login label{
  color: #573b8a;
  transform: scale(.6);
}

#chk:checked ~ .login{
  transform: translateY(-500px);
}
#chk:checked ~ .login label{
  transform: scale(1);  
}
#chk:checked ~ .signup label{
  transform: scale(.6);
}
</style>
</head>
<body>

<div>
      <ul class="nav">
        <li style="float:left"><a  href="anywheretravel.php">Anywhere Travel</a></li>
        <!-- <li><a href="kycu.php">Kyçu</a></li> -->
        <?php 
        session_start();
        if(isset($_SESSION['email'])){
          echo"<li><a href='../controller/LogOut.php'>LogOut</a></li>
          <li><a href='../view/Bookings.php'>Reservations</a></li>
          ";
          
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
    </div>


<br>
<center>
<div class="main">    
    <input type="checkbox" id="chk" aria-hidden="true">
       
      <div class="signup">
        <form  method="POST">
          <label for="chk" aria-hidden="true">Sign up</label>
          <input type="text" name="name" placeholder="Name" id="register-emri" required="">
          <input type="text" name="email" placeholder="Email" id ="register-email" required="">
          <input type="password" name="password" placeholder="Password" id="register-password" required="">
          <button  type="submit " name="registerBtn" id="register">Sign up</button>
           <!-- <input type="submit" name= "registerBtn"> -->
        </form>
        <?php   include_once '../controller/registerController.php'?>
      </div>
        
      <?php include_once '../controller/LoginController.php'
          
          
        ?>
      <div class="login">
        <form  method="POST">
          <label for="chk" aria-hidden="true">Login</label>
          <input type="text" name="email" placeholder="Email" id="email" required="">
          <input type="password" name="password" placeholder="Password" id="password" required="">
          <button id="login" type="submit" name="LogInBtn">Login</button>
        </form>
        
          
      </div>

      
  


      <script>
        var loginButton = document.getElementById("login");
        var registerButton = document.getElementById("register");
        var emailRegex = /^[A-Za-z]+[._-]?\w*@[A-Za-z]+[-]?[A-Za-z]*\.[A-Za-z]{2,3}$/


        loginButton.addEventListener("click", (event) =>{
            var password = document.getElementById("password").value;
            var email=document.getElementById("email").value;
           

           
        
               if(!emailRegex.test(email)){
                // console.log((nameRegex.test(name))));
                // name.innerText="*name or email should be written corretly.";
                alert("Please Provide Email!");
                event.preventDefault();

            // }else{
            //     console.log((nameRegex.test(name)));
            //     name.innerText="";
            }
            
       
        })         



 registerButton.addEventListener("click", (event) =>{
            var password = document.getElementById("register-password").value;
            var email=document.getElementById("register-email").value;
            var name = document.getElementById("register-emri").value;
           
        
                if(!emailRegex.test(email)){
                // console.log((nameRegex.test(name))));
                // name.innerText="*name or email should be written corretly.";
                alert("Please Provide Email!");
                event.preventDefault();
         
            }else if(password.length<6){
                event.preventDefault();
                alert("Your password is not safe or is empty!");
            }else if(name.length <3){
              alert("Please Provide Name!");
                event.preventDefault();
            }
       
       
        })        

      </script>
     
</center>      
</body>

</html>
<?php
}
?>
      






