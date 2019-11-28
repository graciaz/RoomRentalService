<?php
$servername = "localhost";
$username = "root";
$password = "root";
function conn(){
        $conn = new mysqli("localhost", "root","", "hotel_management");
        return $conn;
    }
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>จัดการห้องพัก</title>
</head>
<body class="bg">
    <div class="col-sm"><br><br><br><br>
        <div class="card" style="width: 50%;">
          <div class="card-body">
              <center><h2><span class="badge badge-secondary">จัดการห้องพัก</span></h2></center>
              <form method="POST" action="management.php">
                <div class="form-group">
                    Room No.<br>
                    <input class="form-control" type="text" name="room_id" required>
                </div>

                <div class="form-group">
            ชื่อผู้เช่า<br>
            <input class="form-control" type="text" name="customer_name" required>
          </div><div class="form-group">
            เบอร์โทรติดต่อ<br>
            <input class="form-control" type="text" name="tel" required>
          </div>
<br><br>
          <center><h2><span class="badge badge-secondary">เลือกจำนวนวันที่เข้าพัก</span></h2></center>
          <br>

            <center>
              <div class="form-group">
                เข้าพักจำนวน : 
                <select name="day_for_rent">
                  <option value="1">1</option>}
                  <option value="2">2</option>
                  <option value="3">6</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>
                วัน<br><br>
              </div>

                <center>
                    <button type="submit" class="btn btn-dark">Submit</button>
                    <a role="button" class="btn btn-light" href="index.html">Back</a>
                </center>
            </form> 
        </div>
    </div>
</body>

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

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>