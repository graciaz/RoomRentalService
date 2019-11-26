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
$sql = "DELETE FROM rooms WHERE room_id = ($room_id)";
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
  <br><center>
    <div class="card" style="width: 30%;">
      <div class="card-body">
        <div class="col-sm">
          <center><br>
            <h2>อัพเดทข้อมูลสำเร็จ !</h2><br>
            <button type="button" class="btn btn-dark" onclick="window.location.href='index.html';">Back</button>
          </center>
        </div>
      </div>
    </div>
  </center>
</body>
</html>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>