<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "hotel_management";


function conn(){
        $conn = new mysqli("localhost", "root", "", "hotel_management");
        return $conn;
    }
session_start();

//$user_id = $_POST['user_id'];
$room_id = $_POST['room_id'];
//$room_type = $_POST['room_type'];
$customer_name = $_POST['customer_name'];
$tel = $_POST['tel'];
$day_for_rent = $_POST['day_for_rent'];
//$role = $_POST['role'];
//$RanPass = rand(100000,999999);
$conn = conn();
$sql = "UPDATE rooms SET customer_name = $customer_name, tel = $tel, day_for_rent = $day_for_rent WHERE room_id = $room_id";
$result = $conn->query($sql);
//echo "userid = $user_id";
//echo '<br/>';
//echo "password = $RanPass";
?>
<!DOCTYPE html>
                  <html>
                  <head>
                  	<title></title>
                  </head>
                  <body>
                  <br>
                  <button type="button" class="btn btn-light" onclick="window.location.href='Manage_Room1.php';">Back</button>
                  </body>
                  </html>
