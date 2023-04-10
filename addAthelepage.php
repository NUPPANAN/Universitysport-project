<?php
include "admin.php";

if (isset($_POST['submit'])) {
    $Title = $_POST["Title"];
    $Name = $_POST["Name"];
    $Lastname = $_POST["Lastname"];
    $Department = $_POST["Department"];
    $Color = $_POST["Color"];
    $Sport = $_POST["Sport"];
    $Time = $_POST["Time"];
    $Date = $_POST["Date"];
    $Place = $_POST["Place"];

    $sql = "INSERT INTO `athlete`(`id`, `Title`, `Name`, `Lastname`, `Department`, `Color`, `Sport`, `Time`, `Date`, `Place`) 
    VALUES (NULL,'$Title','$Name','$Lastname','$Department','$Color','$Sport','$Time','$Date','$Place')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: athletea.php?msg=New Athele have save!");
    } else {
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
                <li><a href="login.php">Logout</a></li>
            </ul>
        </div>
        <div class="headline">
            <h2>Add Athele</h2>
        </div>
        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Ttile:</label>
                        <input type="text" class="form-control" name="Title" placeholder="นาย">
                    </div>
                    <div class="col">
                        <label class="form-label">Name:</label>
                        <input type="text" class="form-control" name="Name" placeholder="นพนันท์">
                    </div>
                    <div class="col">
                        <label class="form-label">Lastname:</label>
                        <input type="text" class="form-control" name="Lastname" placeholder="ถวิลถึง">
                    </div>
                </div>
                <div class="mb-3">

                    <label class="form-label">Department:</label>
                    <input type="text" class="form-control" name="Department" placeholder="สาขาวิชาวิศวกรรมโยธา">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Color:</label>
                    <input type="radio" class="form-check-input" name="Color" id="แดง" value="แดง">
                    <label for="แดง" class="form-input-label">แดง</label>
                    <input type="radio" class="form-check-input" name="Color" id="ฟ้า" value="ฟ้า">
                    <label for="ฟ้า" class="form-input-label">ฟ้า</label>
                    <input type="radio" class="form-check-input" name="Color" id="เหลือง" value="เหลือง">
                    <label for="เหลือง" class="form-input-label">เหลือง</label>
                    <input type="radio" class="form-check-input" name="Color" id="ม่วง" value="ม่วง">
                    <label for="ม่วง" class="form-input-label">ม่วง</label>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Sport:</label>
                        <input type="text" class="form-control" name="Sport" placeholder="ฟุตบอล">
                    </div>
                    <div class="col">
                        <label class="form-label">Time:</label>
                        <input type="text" class="form-control" name="Time" placeholder="10:00 AM">
                    </div>
                    <div class="col">
                        <label class="form-label">Date:</label>
                        <input type="text" class="form-control" name="Date" placeholder="10 April 2023">
                    </div>
                </div>
                <div class="mb-3">

                    <label class="form-label">Place:</label>
                    <input type="text" class="form-control" name="Place"
                        placeholder="สนามกีฬา 50 ปี มหาวิทยาลัยขอนแก่น">
                </div>
                <div>
                    <button type="submit" class="btn btn-success" name="submit">Save</button>
                    <a href="athletea.php" class="btn btn-danger">Cancel</a>
                </div>

        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
    </header>
</body>

</html>