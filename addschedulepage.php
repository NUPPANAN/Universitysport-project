<?php
include "admin.php";

if(isset($_POST['submit'])){
    $time = $_POST["time"];
    $date = $_POST["date"];
    $sport = $_POST["sport"];
    $place = $_POST["place"];
    $groupA = $_POST["groupA"];
    $groupB = $_POST["groupB"];

    $sql = "INSERT INTO `schedule1`(`id`, `time`, `date`, `sport`, `place`, `groupA`, `groupB`) VALUES (NULL,'$time','$date','$sport','$place','$groupA','$groupB')";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: schedulea.php?msg=New Schedule have save!");
    }
    else {
        echo "Failed" . mysqli_error($conn);
    }
   
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta cahrset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add-Schedule</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="homepage.css">
</head>

<body>
    <header>
        <div class="wrapper">
            <div class="logo">
                <img src="https://i.postimg.cc/YCQVVfBZ/kku.png" alt="">
            </div>
            <ul class="nav-area">
                <li><a href="homepagea.php">Home</a></li>
                <li><a href="medaladmin.php">Medal</a></li>
                <li><a href="resultadmin.php">Result</a></li>
                <li><a href="memberlista.php">Member List</a></li>
                <li><a href="adminpage.php">Admin</a></li>
                <li><a href="login.php">Logout</a></li>
            </ul>
        </div>
        <div class="headline">
            <h2>Add Scheledule</h2>
        </div>
        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Time:</label>
                        <input type="text" class="form-control" name="time" placeholder="10:00 AM">
                    </div>
                    <div class="col">
                        <label class="form-label">Date:</label>
                        <input type="text" class="form-control" name="date" placeholder="10 Arpil 2023">
                    </div>
                    <div class="col">
                        <label class="form-label">Sport:</label>
                        <input type="text" class="form-control" name="sport" placeholder="ฟุตบอล">
                    </div>
                </div>
                <div class="mb-3">

                    <label class="form-label">Place:</label>
                    <input type="text" class="form-control" name="place"
                        placeholder="สนามกีฬา 50 ปี มหาวิทยาลัยขอนแก่น">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">GroupA:</label>
                    <input type="radio" class="form-check-input" name="groupA" id="แดง" value="แดง">
                    <label for="แดง" class="form-input-label">แดง</label>
                    <input type="radio" class="form-check-input" name="groupA" id="ฟ้า" value="ฟ้า">
                    <label for="ฟ้า" class="form-input-label">ฟ้า</label>
                    <input type="radio" class="form-check-input" name="groupA" id="เหลือง" value="เหลือง">
                    <label for="เหลือง" class="form-input-label">เหลือง</label>
                    <input type="radio" class="form-check-input" name="groupA" id="ม่วง" value="ม่วง">
                    <label for="ม่วง" class="form-input-label">ม่วง</label>
                </div>
            
                <div class="form-group mb-3">
                    <label class="form-label">GroupB:</label>
                    <input type="radio" class="form-check-input" name="groupB" id="แดง" value="แดง">
                    <label for="แดง" class="form-input-label">แดง</label>
                    <input type="radio" class="form-check-input" name="groupB" id="ฟ้า" value="ฟ้า">
                    <label for="ฟ้า" class="form-input-label">ฟ้า</label>
                    <input type="radio" class="form-check-input" name="groupB" id="เหลือง" value="เหลือง">
                    <label for="เหลือง" class="form-input-label">เหลือง</label>
                    <input type="radio" class="form-check-input" name="groupB" id="ม่วง" value="ม่วง">
                    <label for="ม่วง" class="form-input-label">ม่วง</label>
                </div>
                <div>
                    <button type="submit" class="btn btn-success" name="submit">Save</button>
                    <a href="schedulea.php" class="btn btn-danger">Cancel</a>
                </div>

        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
    </header>
</body>

</html>