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
  <link rel="stylesheet" href="homepage.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
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
        <li><a href="homepagea.php">Home</a></li>
        <li><a href="resultadmin.php">Result</a></li>
        <li><a href="memberlista.php">Member List</a></li>
        <li><a href="login.php">Logout</a></li>
      </ul>
    </div>
    <div class="headline">
      <h2>Medal</h2>
    </div>
    <div class="table">
      <?php
      if (isset($_GET['msg'])) {
        $msg = $_GET['msg'];
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                ' . $msg . '
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
      }
      ?>
      <table class="table text-center" id="myTable">
        <thead>
          <tr>
            <th style='color: white'>ID</th>
            <th style='color: white'>Color</th>
            <th style='color: white'>Gold</th>
            <th style='color: white'>Silver</th>
            <th style='color: white'>Bronze</th>
            <th style='color: white'>Total</th>
            <th style='color:white'>Action</th>
          </tr>
        </thead>
        <tbody>

          <?php
          include "admin.php";

          $sql = "SELECT * FROM `tablemedal`";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
              <td style='color: white'>
                <?php echo $row["id"] ?>
              </td>
              <td style='color: white'>
                <?php echo $row["ColorGroup"] ?>
              </td>
              <td style='color: white'>
                <?php echo $row["Gold"] ?>
              </td>
              <td style='color: white'>
                <?php echo $row["Silver"] ?>
              </td>
              <td style='color: white'>
                <?php echo $row["Bronze"] ?>
              </td>
              <td style='color: white'>
                <?php echo $row["Total"] ?>
              </td>
              <td style='color:white'>
                <a href="editMedal.php?id=<?php echo $row['id'] ?>" class="link-dark"><i
                    class="fa-solid fa-pen-to-square fs-5 me-3" style="color: #ffffff;"></i></a>
                <a href="deleteMedal.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-trash"
                    style="color: #ffffff;"></i></a>
              </td>
            </tr>
            <?php
          }

          $conn->close();

          ?>
        </tbody>
      </table>
    </div>
    <script>
      let table = new DataTable('#myTable');
    </script>
    <div class="container">
      <a href="addMedalpage.php" class="btn btn-dark">Add New</a>
    </div>
    <script src="https://kit.fontawesome.com/6f99782de4.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"></script>
</body>

</html>