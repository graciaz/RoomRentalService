<?php
$servername = "localhost";
$username = "root";
$password = "root";
function conn(){
        $conn = new mysqli("localhost", "root","", "hotel_management");
        return $conn;
    }

//$room_id = $_POST['room_id'];
$answer = $_POST['exampleRadios'];
if ($answer == 'option1' && $_SERVER['REQUEST_METHOD'] === 'POST'){
  header("Location: manageRoomDaily.html");
  die();
}
else{
  echo "SE";
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
    <title>เพิ่มห้องพัก</title>
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

    </style>

</head>
<body>
<br><br><br><br><br><br>
<div class="col-sm">
    <div class="card" style="width: 30%;">
  <div class="card-body">
      <center><h2><span class="badge badge-secondary">เพิ่มห้องพัก</span></h2></center>
    <form method="POST", action="addRoom.php">
  <div class="form-group">
    <label for="exampleFormControlInput1">เลขห้องพัก</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Room No." name="room_id">
  </div><br>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
    <h4>รายวัน</h4>
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    <h4>รายเดือน</h4>
  </label>
</div>

       <center> <button type="submit" class="btn btn-dark">Submit</button>
       <a class="btn btn-dark" href="index.html" role="button">Back</a></center>
       


</form>
    </div>

  </div>
    </div>


</body>
</html>