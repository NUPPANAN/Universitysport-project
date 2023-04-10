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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
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
                <li><a href="login.php">Logout</a></li>
            </ul>
        </div>
        <div class="headline">
            <h2>Member List</h2>
        </div>
        <div class="container">
            <?php
            if (isset($_GET['msg'])) {
                $msg = $_GET['msg'];
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                ' . $msg . '
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
            ?>
            <table id="Table" class="table table-striped">
                <thead>
                    <th style='color: white'>ID</th>
                    <th style='color: white'>Title</th>
                    <th style='color: white'>Name</th>
                    <th style='color: white'>Lastname</th>
                    <th style='color: white'>Department</th>
                    <th style='color: white'>Color</th>
                    <th style='color:white'>Action</th>
                </thead>
                <tbody>
                    <?php
                    include "admin.php";

                    $sql = "SELECT * FROM `memberlist`";
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
                            <td style='color:white'>
                                <a href="editMember.php?id=<?php echo $row['id'] ?>" class="link-dark"><i
                                        class="fa-solid fa-pen-to-square fs-5 me-3" style="color: #ffffff;"></i></a>
                                <a href="deleteMember.php?id=<?php echo $row['id'] ?>" class="link-dark"><i
                                        class="fa-solid fa-trash" style="color: #ffffff;"></i></a>
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
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script>
            let table = new DataTable('#Table');
        </script>
        <div class="container">
      <a href="addMember.php" class="btn btn-dark">Add New</a>
    </div>
        <script src="https://kit.fontawesome.com/6f99782de4.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
</body>

</html>