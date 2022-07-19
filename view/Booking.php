<?php
session_start();
//include_once '../controller/LoginController.php';
if(!isset($_SESSION['email'])){
    header("location:../projektiweb/kycu.php");
}else{
  include '../models/user.php';
  include_once '../repository/userRepository.php';
  //include_once '../controller/LoginController.php';
  $userRepository=new UserRepository();
  $user=$userRepository->getuserbyemail($_SESSION['email']);
    $userid=$_SESSION['User_ID'];
    $hotelId=$_GET['id'];
    
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
<style type="text/css">
a{
  text-decoration:none;
}
  
body {
  width: 800px;
  margin: 0 auto;
  padding: 50px;
  background-color:pink;
}

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
  background: orange;
  border: none;
  color: white;
  font-size: 1.25em;
  font-family: 'Nanum Gothic';
  border-radius: 4px;
  cursor: pointer;
  text-decoration:none;
 
}

button:hover {
  border: 2px solid black;
}
  
</style>

</head>
<body>





<form  method="post">
  
  
  <hr>
  <div class="elem-group inlined">
    <label for="adult">Number of People</label>
    <input type="number" id="adult" name="total_adults" placeholder="2" min="1" required>
  </div>
  <div class="elem-group inlined">
  <label for="phone">Your Phone</label>
    <input type="tel" id="phone" name="visitor_phone" placeholder="498-348-3872" pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required>
  </div>
  <div class="elem-group inlined">
    <label for="checkin-date">Check-in Date</label>
    <input type="date" id="checkin-date" name="checkin" required>
  </div>
  <div class="elem-group inlined">
    <label for="checkout-date">Durability</label>
    <input type="number" id="checkout-date" name="checkout" required>
  </div>
  <div class="elem-group">
    <label for="room-selection">Select Room Preference</label>
    <select id="room-selection" name="room_preference" required>
        <option value="">Choose a Room from the List</option>
        <option value="connecting">Connecting</option>
        <option value="adjoining">Adjoining</option>
        <option value="adjacent">Adjacent</option>
    </select>
  </div>
  <hr>
  <div class="elem-group">
    <label for="message">Anything Else?</label>
    <textarea id="message" name="visitor_message" placeholder="Tell us anything else that might be important." required></textarea>
  </div>
  <button type="submit" name="submit">Book The Rooms</button>


  <button  name=""><a href="Bookings.php">Cancel</a></button>
</form>

</body>
</html>
<?php

//session_start();


//session code

  
  if(isset($_POST['submit'])){
    
    
    //$userRepository=new UserRepository();
    $phone=$_POST['visitor_phone'];
    $numpeople=$_POST['total_adults'];
    $checkin=$_POST['checkin'];
    $durability=$_POST['checkout'];
    $roompref=$_POST['room_preference'];
    $anythingelse=$_POST['visitor_message'];
    $userRepository->makeRez($hotelId,$userid,$phone,$numpeople,$checkin,$durability,$roompref,$anythingelse);
    header("location:Bookings.php");
  }




}

?>
