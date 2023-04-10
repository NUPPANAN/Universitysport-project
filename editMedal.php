<?php
include "admin.php";
$id = $_GET['id'];
if (isset($_POST['submit'])) {
    $ColorGroup = $_POST["ColorGroup"];
    $Gold = $_POST["Gold"];
    $Silver = $_POST["Silver"];
    $Bronze = $_POST["Bronze"];
    $Total = $_POST["Total"];

    $sql = "UPDATE `tablemedal` SET `ColorGroup`='$ColorGroup',`Gold`='$Gold',`Silver`='$Silver',`Bronze`='$Bronze',`Total`='$Total' WHERE id=$id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: medaladmin.php?msg=Update Medal have save!");
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
            <h2>Edit Medal</h2>
        </div>
        <?php
        $sql = "SELECT * FROM `tablemedal` WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>
        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="form-group mb-3">
                    <label class="form-label">Color Group: </label>
                    <input type="radio" class="form-check-input" name="ColorGroup" id="แดง" value="แดง" <?php echo ($row['ColorGroup']=='แดง')?"checked":"" ?>>
                    <label for="แดง" class="form-input-label">แดง</label>
                    <input type="radio" class="form-check-input" name="ColorGroup" id="ฟ้า" value="ฟ้า" <?php echo ($row['ColorGroup']=='ฟ่้า')?"checked":"" ?>>
                    <label for="ฟ้า" class="form-input-label">ฟ้า</label>
                    <input type="radio" class="form-check-input" name="ColorGroup" id="เหลือง" value="เหลือง" <?php echo ($row['ColorGroup']=='เหลือง')?"checked":"" ?>>
                    <label for="เหลือง" class="form-input-label">เหลือง</label>
                    <input type="radio" class="form-check-input" name="ColorGroup" id="ม่วง" value="ม่วง" <?php echo ($row['ColorGroup']=='ม่วง')?"checked":"" ?>>
                    <label for="ม่วง" class="form-input-label">ม่วง</label>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Gold:</label>
                        <input type="text" class="form-control" name="Gold" value="<?php echo $row['Gold'] ?>">
                    </div>
                    <div class="col">
                        <label class="form-label">Silver:</label>
                        <input type="text" class="form-control" name="Silver" value="<?php echo $row['Silver'] ?>">
                    </div>
                    <div class="col">
                        <label class="form-label">Bronze:</label>
                        <input type="text" class="form-control" name="Bronze" value="<?php echo $row['Bronze'] ?>">
                    </div>
                    <div class="col">
                        <label class="form-label">Total:</label>
                        <input type="text" class="form-control" name="Total" value="<?php echo $row['Total'] ?>">
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-success" name="submit">Update</button>
                    <a href="medaladmin.php" class="btn btn-danger">Cancel</a>
                </div>

        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
    </header>
</body>

</html>