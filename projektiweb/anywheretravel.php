


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<title></title>


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



  <div class="img"></div>
   <div class="center">
    <div class="title">Eksploroni botën dhe bëhuni</div>
    <div class="sub_title">udhërrëfyesi juaj i udhëtimit</div>
    <div class="btns">
      <!-- <button>Learn more</button> -->  <Form action="aboutus.php">
        <a href="http://ProjektiWebb/projektiweb/aboutus.php">
          <button  class="button" > Learn more </button>
        </a>
      </Form> 
      
    </div>
  </div>


  <!-- per slider -->

  <div class="slider">
    <div class="slide" id="slide1">
        <img src="photos//11.jpg" alt="">
    </div>
    <div class="slide hide" id="slide2">
        <img src="photos//12.jpg" alt="">
    </div>
    <div class="slide hide" id="slide3">
        <img src="Photos/5.jpg" alt="">
    </div>
    <div class="slide hide" id="slide4">
        <img src="Photos/6.jpg" alt="">
    </div>
</div>

<div class="buttons">

    <label id="btn1"></label>
    <label id="btn2"></label>
    <label id="btn3"></label>
    <label id="btn4"></label>

</div>




<!-- per skript te sliders -->

<script>
  var btn1 = document.getElementById("btn1");
  var btn2 = document.getElementById("btn2");
  var btn3 = document.getElementById("btn3");
  var btn4 = document.getElementById("btn4");

  var slide1 = document.getElementById("slide1");
  var slide2 = document.getElementById("slide2");
  var slide3 = document.getElementById("slide3");
  var slide4 = document.getElementById("slide4");

  btn1.addEventListener("click", ()=>{
      slide1.classList.remove("hide");
      slide2.classList.add("hide");
      slide3.classList.add("hide");
      slide4.classList.add("hide");
      i=1;

  })
  btn2.addEventListener("click", ()=>{
      slide1.classList.add("hide");
      slide2.classList.remove("hide");
      slide3.classList.add("hide");
      slide4.classList.add("hide");
      i=2;

  })
  btn3.addEventListener("click", ()=>{
      slide1.classList.add("hide");
      slide2.classList.add("hide");
      slide3.classList.remove("hide");
      slide4.classList.add("hide");
      i=3;

  })
  btn4.addEventListener("click", ()=>{
      slide1.classList.add("hide");
      slide2.classList.add("hide");
      slide3.classList.add("hide");
      slide4.classList.remove("hide");
      i=4

  })

  var i=1;
  setInterval(()=>{
      if(i==1){
      slide1.classList.remove("hide");
      slide2.classList.add("hide");
      slide3.classList.add("hide");
      slide4.classList.add("hide");
      }
      if(i==2){
          slide1.classList.add("hide");
      slide2.classList.remove("hide");
      slide3.classList.add("hide");
      slide4.classList.add("hide");
      }
      if(i==3){
          slide1.classList.add("hide");
      slide2.classList.add("hide");
      slide3.classList.remove("hide");
      slide4.classList.add("hide");
      }
      if(i==4){
      slide1.classList.add("hide");
      slide2.classList.add("hide");
      slide3.classList.add("hide");
      slide4.classList.remove("hide");
      i=0;
      }

      i++;
  },2000)
</script>
</body>
</html>

