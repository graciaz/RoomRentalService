<?php
$servername = "localhost";
$username = "root";
$password = "root";
function conn(){
        $conn = new mysqli("localhost", "root","", "hotel_management");
        return $conn;
    }
session_start();

//$user_id = $_POST['user_id'];
//$room_id = $_POST['room_id'];
//$role = $_POST['role'];
//$RanPass = rand(100000,999999);
//$conn = conn();
//$sql = "INSERT INTO rooms (room_id) VALUES ('$room_id')";
//$result = $conn->query($sql);
//echo "userid = $user_id";
//echo '<br/>';
//echo "password = $RanPass";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ลบห้องพัก</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>

        .card{
            margin-left: auto;
            margin-right: auto;
            border-radius: 10pt;
            overflow: auto;

            transform: scale(0.8);
            margin-top: -60px;

    }
        .card-body{
            position: relative;

        }
.bg {
  /* The image used */
  background-image: url("image/bg.jpg");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
    </style>

</head>
<body class="bg">
<br><br><br><br><br><br>
<div class="col-sm">
    <div class="card" style="width: 30%;">
  <div class="card-body">
      <center><h2><span class="badge badge-secondary">ลบห้องพัก</span></h2></center>
    <form method="POST", action="delroom.php">
  <div class="form-group">
    <label for="exampleFormControlInput1">เลขห้องพักที่ต้องการนำออกจากระบบ</label>
    <input class="form-control" id="exampleFormControlInput1" placeholder="Room No." name="room_id" required>
  </div>


       <center> <button type="submit" class="btn btn-dark">Submit</button>
       <a role="button" class="btn btn-light" href="index.html">Back</a></center>



</form>
    </div>

  </div>
    </div>


</body>
</html>