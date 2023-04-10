<?php
include "admin.php";
$id = $_GET['id'];
if(isset($_POST['submit'])){
    $time = $_POST["time"];
    $date = $_POST["date"];
    $sport = $_POST["sport"];
    $place = $_POST["place"];
    $groupA = $_POST["groupA"];
    $groupB = $_POST["groupB"];

    $sql = "UPDATE `schedule1` SET `time`='$time',`date`='$date',`sport`='$sport',`place`='$place',`groupA`='$groupA',`groupB`='$groupB' WHERE id=$id";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: schedulea.php?msg=Edit Schedule have update!");
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
    <title>Edit Schedule Information</title>
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
            <h2>Edit Schedule Information</h2>
        </div>
        <?php
        $sql = "SELECT * FROM `schedule1` WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        
        ?>
        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Time:</label>
                        <input type="text" class="form-control" name="time" value="<?php echo $row['time'] ?>">
                    </div>
                    <div class="col">
                        <label class="form-label">Date:</label>
                        <input type="text" class="form-control" name="date" value="<?php echo $row['date'] ?>">
                    </div>
                    <div class="col">
                        <label class="form-label">Sport:</label>
                        <input type="text" class="form-control" name="sport" value="<?php echo $row['sport'] ?>">
                    </div>
                </div>
                <div class="mb-3">

                    <label class="form-label">Place:</label>
                    <input type="text" class="form-control" name="place" value="<?php echo $row['place'] ?>">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">GroupA:</label>
                    <input type="radio" class="form-check-input" name="groupA" id="แดง" value="แดง" <?php echo ($row['groupA']=='แดง')?"checked":"" ?>>
                    <label for="แดง" class="form-input-label">แดง</label>
                    <input type="radio" class="form-check-input" name="groupA" id="ฟ้า" value="ฟ้า" <?php echo ($row['groupA']=='ฟ้า')?"checked":"" ?>>
                    <label for="ฟ้า" class="form-input-label">ฟ้า</label>
                    <input type="radio" class="form-check-input" name="groupA" id="เหลือง" value="เหลือง" <?php echo ($row['groupA']=='เหลือง')?"checked":"" ?>>
                    <label for="เหลือง" class="form-input-label">เหลือง</label>
                    <input type="radio" class="form-check-input" name="groupA" id="ม่วง" value="ม่วง" <?php echo ($row['groupA']=='ม่วง')?"checked":"" ?>>
                    <label for="ม่วง" class="form-input-label">ม่วง</label>
                </div>

                <div class="form-group mb-3">
                    <label class="form-label">GroupB:</label>
                    <input type="radio" class="form-check-input" name="groupB" id="แดง" value="แดง" <?php echo ($row['groupB']=='แดง')?"checked":"" ?>>
                    <label for="แดง" class="form-input-label">แดง</label>
                    <input type="radio" class="form-check-input" name="groupB" id="ฟ้า" value="ฟ้า" <?php echo ($row['groupB']=='ฟ้า')?"checked":"" ?>>
                    <label for="ฟ้า" class="form-input-label">ฟ้า</label>
                    <input type="radio" class="form-check-input" name="groupB" id="เหลือง" value="เหลือง" <?php echo ($row['groupB']=='เหลือง')?"checked":"" ?>>
                    <label for="เหลือง" class="form-input-label">เหลือง</label>
                    <input type="radio" class="form-check-input" name="groupB" id="ม่วง" value="ม่วง" <?php echo ($row['groupB']=='ม่วง')?"checked":"" ?>>
                    <label for="ม่วง" class="form-input-label">ม่วง</label>
                </div>
                <div>
                    <button type="submit" class="btn btn-success" name="submit">Update</button>
                    <a href="schedulea.php" class="btn btn-danger">Cancel</a>
                </div>

        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
    </header>
</body>

</html>