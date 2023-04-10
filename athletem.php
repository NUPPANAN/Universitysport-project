<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
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
                <li><a href="resultmember.php">Result</a></li>
                <li><a href="memberlistm.php">Member List</a></li>
                <li><a href="login.php">Logout</a></li>
            </ul>
        </div>
        <div class="headline"> 
            <h2>Athele</h2>
        </div>
        <div class="container">
        <table id="Table" class="table table-striped">
                <thead>
                    <th style='color: white'>ID</th>
                    <th style='color: white'>Title</th>
                    <th style='color: white'>Name</th>
                    <th style='color: white'>Lastname</th>
                    <th style='color: white'>Department</th>
                    <th style='color: white'>Color</th>
                    <th style='color: white'>Sport</th>
                    <th style='color: white'>Time</th>
                    <th style='color: white'>Date</th>
                    <th style='color: white'>Place</th>
                </thead>
                <tbody>
                    <?php
                    include "admin.php";

                    $sql = "SELECT * FROM `athlete`";
                    $result = mysqli_query($conn, $sql);


                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td style='color: white'>
                                <?php echo $row["id"] ?>
                            </td>
                            <td style='color: white'>
                                <?php echo $row["Title"] ?>
                            </td>
                            <td style='color: white'>
                                <?php echo $row["Name"] ?>
                            </td>
                            <td style='color: white'>
                                <?php echo $row["Lastname"] ?>
                            </td>
                            <td style='color: white'>
                                <?php echo $row["Department"] ?>
                            </td>
                            <td style='color: white'>
                                <?php echo $row["Color"] ?>
                            </td>
                            <td style='color: white'>
                                <?php echo $row["Sport"] ?>
                            </td>
                            <td style='color: white'>
                                <?php echo $row["Time"] ?>
                            </td>
                            <td style='color: white'>
                                <?php echo $row["Date"] ?>
                            </td>
                            <td style='color: white'>
                                <?php echo $row["Place"] ?>
                            </td>
                        </tr>
                        <?php
                    }

                    $conn->close();

                    ?>
                </tbody>
            </table>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" style='color: white'></script>
        <script>
            let table = new DataTable('#Table');
        </script>
</body>

</html>