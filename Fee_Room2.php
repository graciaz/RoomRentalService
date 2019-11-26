<?php
$servername = "localhost";
$username = "root";
$password = "root";
function conn(){
    $conn = new mysqli("localhost", "root","", "hotel_management");
    return $conn;
}

$room_id = $_POST['room_id'];
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
<body>
    <div class="col-sm"><br><br><br><br>
        <div class="card" style="width: 50%;">
          <div class="card-body">
              <center><h2><span class="badge badge-secondary">คำนวณค่าบริการห้องพัก <br>ห้องพักหมายเลข <?=$row['room_id']?></span></h2></center>
              <br><br>
              <form method="POST" action="e_1.php">
                <h3>ชื่อผู้เช่า : <?=$row['customer_name']?><br>
                    เบอร์โทรติดต่อ : <?=$row['tel']?></h3>
                    <h2>จำนวนวันที่เข้าพัก : <?=$row['day_for_rent']?> วัน </h2>
                    <br>
                    <h3>บริการเพิ่มเติม</h3>

                    <div class="form-group">
    <label for="exampleFormControlInput1">จำนวนไฟฟ้าที่ใช้ (หน่วยละ 7 บาท)</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="หน่วย" name="elec_unit">
        <label for="exampleFormControlInput1">จำนวนน้ำประปาที่ใช้ (หน่วยละ 20 บาท)</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="หน่วย" name="water_unit">
  </div>

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

</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>