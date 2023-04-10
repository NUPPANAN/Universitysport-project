<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="homepage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <header>
        <div class="wrapper">
            <div class="logo">
                <img src="https://i.postimg.cc/YCQVVfBZ/kku.png" alt="">
            </div>
            <ul class="nav-area">
                <li><a href="homepagem.php">Home</a></li>
                <li><a href="medalmember.php">Medal</a></li>
                <li><a href="memberlistm.php">Member List</a></li>
                <li><a href="login.php">Logout</a></li>
            </ul>
        </div>
        <div class="headline">
            <h2>Result</h2>
        </div>
        <div class="table">
            <table class="table text-center" id="myTable">
                <thead>
                    <tr>
                        <th style='color: white'>ID</th>
                        <th style='color: white'>Time</th>
                        <th style='color: white'>Date</th>
                        <th style='color: white'>Sport</th>
                        <th style='color: white'>Place</th>
                        <th style='color: white'>GroupA</th>
                        <th style='color: white'>GroupB</th>
                        <th style='color: white'>Score</th>
                        <th style='color: white'>Result</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    include "admin.php";

                    $sql = "SELECT * FROM `result`";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td style='color: white'>
                                <?php echo $row["id"] ?>
                            </td>
                            <td style='color: white'>
                                <?php echo $row["Time"] ?>
                            </td>
                            <td style='color: white'>
                                <?php echo $row["Date"] ?>
                            </td>
                            <td style='color: white'>
                                <?php echo $row["Sport"] ?>
                            </td>
                            <td style='color: white'>
                                <?php echo $row["Place"] ?>
                            </td>
                            <td style='color: white'>
                                <?php echo $row["GroupA"] ?>
                            </td>
                            <td style='color: white'>
                                <?php echo $row["GroupB"] ?>
                            </td>
                            <td style='color: white'>
                                <?php echo $row["Score"] ?>
                            </td>
                            <td style='color: white'>
                                <?php echo $row["Result"] ?>
                            </td>
                        </tr>
                        <?php
                    }

                    $conn->close();

                    ?>
                </tbody>
            </table>
        </div>
    </header>
</body>

</html>