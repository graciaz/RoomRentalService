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
    <title>คำนวณค่าบริการห้องพัก</title>
</head>
<body>
    <div class="col-sm"><br><br><br><br>
        <div class="card" style="width: 50%;">
          <div class="card-body">
              <center><h2><span class="badge badge-secondary">คำนวณค่าบริการห้องพัก</span></h2></center>
              <form method="POST" action="Fee_Room2.php">
                <div class="form-group">
                    Room No.<br>
                    <input class="form-control" type="text" name="room_id">
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

</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>