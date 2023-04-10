<?php
include "admin.php";
$id = $_GET['id'];
if (isset($_POST['submit'])) {
    $Time = $_POST["Time"];
    $Date = $_POST["Date"];
    $Sport = $_POST["Sport"];
    $Place = $_POST["Place"];
    $GroupA = $_POST["GroupA"];
    $GroupB = $_POST["GroupB"];
    $Score = $_POST["Score"];
    $Result = $_POST["Result"];

    $sql = "UPDATE `result` SET `Time`='$Time',`Date`='$Date',`Sport`='$Sport',`Place`='$Place',`GroupA`='$GroupA',`GroupB`='$GroupB',`Score`='$Score',`Result`='$Result' WHERE id=$id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: resultadmin.php?msg=Update Result have save!");
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
    <title>Add Medal</title>
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
            <h2>Edit Result</h2>
        </div>
        <?php
        $sql = "SELECT * FROM `result` WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        
        ?>
        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">

                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Time:</label>
                        <input type="text" class="form-control" name="Time" value="<?php echo $row['Time'] ?>">
                    </div>
                    <div class="col">
                        <label class="form-label">Date:</label>
                        <input type="text" class="form-control" name="Date" value="<?php echo $row['Date'] ?>">
                    </div>
                    <div class="col">
                        <label class="form-label">Sport:</label>
                        <input type="text" class="form-control" name="Sport" value="<?php echo $row['Sport'] ?>">
                    </div>
                </div>
                <div class="mb-3">

                    <label class="form-label">Place:</label>
                    <input type="text" class="form-control" name="Place"
                    value="<?php echo $row['Place'] ?>">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Group A: </label>
                    <input type="radio" class="form-check-input" name="GroupA" id="แดง" value="แดง" <?php echo ($row['GroupA']=='แดง')?"checked":"" ?>>
                    <label for="แดง" class="form-input-label">แดง</label>
                    <input type="radio" class="form-check-input" name="GroupA" id="ฟ้า" value="ฟ้า" <?php echo ($row['GroupA']=='ฟ้า')?"checked":"" ?>>
                    <label for="ฟ้า" class="form-input-label">ฟ้า</label>
                    <input type="radio" class="form-check-input" name="GroupA" id="เหลือง" value="เหลือง" <?php echo ($row['GroupA']=='เหลือง')?"checked":"" ?>>
                    <label for="เหลือง" class="form-input-label">เหลือง</label>
                    <input type="radio" class="form-check-input" name="GroupA" id="ม่วง" value="ม่วง" <?php echo ($row['GroupA']=='ม่วง')?"checked":"" ?>>
                    <label for="ม่วง" class="form-input-label">ม่วง</label>
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Group B: </label>
                    <input type="radio" class="form-check-input" name="GroupB" id="แดง" value="แดง" <?php echo ($row['GroupB']=='แดง')?"checked":"" ?>>
                    <label for="แดง" class="form-input-label">แดง</label>
                    <input type="radio" class="form-check-input" name="GroupB" id="ฟ้า" value="ฟ้า" <?php echo ($row['GroupB']=='ฟ้า')?"checked":"" ?>>
                    <label for="ฟ้า" class="form-input-label">ฟ้า</label>
                    <input type="radio" class="form-check-input" name="GroupB" id="เหลือง" value="เหลือง" <?php echo ($row['GroupB']=='เหลือง')?"checked":"" ?>>
                    <label for="เหลือง" class="form-input-label">เหลือง</label>
                    <input type="radio" class="form-check-input" name="GroupB" id="ม่วง" value="ม่วง" <?php echo ($row['GroupB']=='ม่วง')?"checked":"" ?>>
                    <label for="ม่วง" class="form-input-label">ม่วง</label>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Score:</label>
                        <input type="text" class="form-control" name="Score" value="<?php echo $row['Score'] ?>">
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Result: </label>
                    <input type="radio" class="form-check-input" name="Result" id="แดง" value="แดง" <?php echo ($row['Result']=='แดง')?"checked":"" ?>>
                    <label for="แดง" class="form-input-label">แดง</label>
                    <input type="radio" class="form-check-input" name="Result" id="ฟ้า" value="ฟ้า" <?php echo ($row['Result']=='ฟ้า')?"checked":"" ?>>
                    <label for="ฟ้า" class="form-input-label">ฟ้า</label>
                    <input type="radio" class="form-check-input" name="Result" id="เหลือง" value="เหลือง"<?php echo ($row['Result']=='เหลือง')?"checked":"" ?>>
                    <label for="เหลือง" class="form-input-label">เหลือง</label>
                    <input type="radio" class="form-check-input" name="Result" id="ม่วง" value="ม่วง" <?php echo ($row['Result']=='ม่วง')?"checked":"" ?>>
                    <label for="ม่วง" class="form-input-label">ม่วง</label>
                </div>
                <div>
                    <button type="submit" class="btn btn-success" name="submit">Update</button>
                    <a href="resultadmin.php" class="btn btn-danger">Cancel</a>
                </div>

        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
    </header>
</body>

</html>