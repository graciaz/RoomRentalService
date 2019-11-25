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
    <title>จัดการห้องพัก(รายเดือน)</title>
</head>
<body>
    <div class="col-sm"><br><br><br><br>
        <div class="card" style="width: 50%;">
          <div class="card-body">
              <center><h2><span class="badge badge-secondary">กรอกข้อมูลผู้เช่าห้อง(รายเดือน)</span></h2></center>
              <form>
                <div class="form-group">
                    ชื่อผู้เช่า<br>
                    <input class="form-control" type="text" name="emp_name">
                </div><div class="form-group">
                    เบอร์โทรติดต่อ<br>
                    <input class="form-control" type="text" name="phone">
                </div>

                <center>
                    <button type="button" class="btn btn-dark">Submit</button>
                    <a role="button" class="btn btn-light" href="index.html">Back</a>
                </center>

            </form> 
        </div>
    </div>

    <br><br><br><br>

    <div class="col-sm">
    <div class="card" style="width: 30%;">
  <div class="card-body">
      <center><h2><span class="badge badge-secondary">เลือกวันที่หมดสัญญาเช่า</span></h2></center>
      <br><br>
      
   <form method="POST" action="db.php"> <!--DB Connect-->

<center>
            <div class="form-group">
                    Month :
                    <select name="month" value="month">
                      <option value="1">Jan</option>}
                      <option value="2">Feb</option>
                      <option value="3">Mar</option>
                      <option value="4">Apr</option>
                      <option value="5">May</option>
                      <option value="6">Jun</option>
                      <option value="7">Jul</option>
                      <option value="8">Aug</option>
                      <option value="9">Sep</option>
                      <option value="10">Oct</option>
                      <option value="11">Nov</option>
                      <option value="12">Dec</option>
                    </select>
                    Year :
                    <select name="year" value="year">
                      <option value="2019">2019</option>}
                      <option value="2020">2020</option>
                      <option value="2021">2021</option>
                      <option value="2022">2022</option>
                      <option value="2023">2023</option>
                      <option value="2024">2024</option>
                    </select>
                </div>


   </center>
       <br><br>

       <center> <button type="button" class="btn btn-dark">Submit</button></center>



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