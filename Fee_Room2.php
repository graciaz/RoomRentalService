<?php
$servername = "localhost";
$username = "root";
$password = "root";
function conn(){
    $conn = new mysqli("localhost", "root","", "hotel_management");
    return $conn;
}

$room_id = $_POST['room_id'];
$elec_unit = $_POST['elec_unit'];
$water_unit = $_POST['water_unit'];
$conn = conn();
$sql = "SELECT * FROM rooms WHERE room_id = $room_id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>คำนวณค่าบริการห้องพัก</title>
</head>
<body class="bg">
    <div class="col-sm"><br><br><br><br>
        <div class="card" style="width: 80%;">
          <div class="card-body">
              <center><h2><span class="badge badge-secondary">คำนวณค่าบริการห้องพัก <br>ห้องพักหมายเลข <?=$row['room_id']?></span></h2></center>
              <br><br>
              <form method="POST" action="#">
                <div class="col-sm">
                    <div class="card"><div class="card-body"><br><br><h2>ชื่อผู้เช่า : <?=$row['customer_name']?><br>
                    เบอร์โทรติดต่อ : <?=$row['tel']?></h2><br><br></div></div>
                    </div><br>

                    <h2>จำนวนวันที่เข้าพัก : <?=$row['day_for_rent']?> วัน (<?=$row['day_for_rent']*300?> บาท)</h2>
                    <h4>ไฟฟ้า : <?=$elec_unit?> หน่วย (<?=$elec_unit*7?> บาท)</h4>
                    <h4>น้ำประปา : <?=$water_unit?> หน่วย (<?=$water_unit*20?> บาท)</h4>
<br><br><h1>รวมค่าบริการ <?=($row['day_for_rent']*300)+
                            ($elec_unit*7)+
                            ($water_unit*20)?> บาท</h1><br>
                    <button type="button" class="btn btn-dark">พิมพ์ใบเสร็จ</button>
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