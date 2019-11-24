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
//$role = $_POST['role'];
//$RanPass = rand(100000,999999);
$conn = conn();
$sql = "INSERT INTO rooms (room_id) VALUES ('$room_id')";
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
                  <button type="button" class="btn btn-light" onclick="window.location.href='Add_Room.php';">Back</button>
                  </body>
                  </html>
