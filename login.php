<?php

session_start();
include ('conn.php');

class User {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function login($username, $password) {
        $error = array();
        if(empty($username)) {
            array_push($error, "Username is required");
        }
        if(empty($password)) {
            array_push($error, "Password is required");
        }
        if(count($error) == 0) {
            $password = mysqli_real_escape_string($this->conn, $password);
            $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($this->conn, $query);
            if(mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_array($result);
                $_SESSION['username'] = $row['username'];
                $_SESSION['role'] = $row['role'];
                if($_SESSION['role'] == 'm') {
                    $_SESSION['success'] = "Success you are Login as member";
                    header("location: homepagem.php");
                    exit();
                }
                if($_SESSION['role'] == 'a') {
                    $_SESSION['success'] = "Success you are Login as admin";
                    header("location: homepagea.php");
                    exit();
                }
            } else {
                array_push($error, "Invalid username or password.");
            }
        }
        return $error;
    }

    public function register($username, $password, $email) {
        $error = array();
        if(empty($username)) {
            array_push($error, "Username is required");
        }
        if(empty($password)) {
            array_push($error, "Password is required");
        }
        if(empty($email)) {
            array_push($error, "Email is required");
        }
        if(count($error) == 0) {
            $password = mysqli_real_escape_string($this->conn, $password);
            $email = mysqli_real_escape_string($this->conn, $email);
            $query = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
            mysqli_query($this->conn, $query);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header("location: homepagem.php");
            exit();
        }
        return $error;
    }
}

$user = new User($conn);

if(isset($_POST['Login'])) {
    $error = $user->login($_POST['username'], $_POST['password']);
} elseif(isset($_POST['Register'])) {
    $error = $user->register($_POST['username'], $_POST['password'], $_POST['email']);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<style>
		body {
			background-image: url(https://i.imgur.com/ktGPomw.png);
			background-repeat: no-repeat;
			background-size: cover;
			font-family: sans-serif;
		}
		h1 {
			color: #f39c12;
			text-align: center;
			font-size: 36px;
			margin-top: 50px;
		}
		form {
			margin: 0 auto;
			max-width: 600px;
			padding: 40px;
			background: transparent;
			border-radius: 15px;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
			font-size: 24px;
		}
		label {
			display: block;
			margin-bottom: 10px;
			color: #f39c12;
			font-weight: bold;
		}
		input[type="text"],
		input[type="password"],
		input[type="email"] {
			width: 97%;
			padding: 10px;
			margin-bottom: 30px;
			border: none;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			font-size: 24px;
		}
		input[type="submit"] {
			background-color: #f39c12;
			color: #fff;
			padding: 20px 40px;
			border: none;
			border-radius: 10px;
			cursor: pointer;
			font-size: 28px;
			transition: background-color 0.3s ease;
		}
		input[type="submit"]:hover {
			background-color: #e67e22;
		}
		.error {
			color: red;
			margin-bottom: 20px;
			font-size: 20px;
		}

		.message-container {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100%;
		}

		.success, .error {
			padding: 10px;
			border-radius: 5px;
			font-size: 18px;
			color: #fff;
		}

		.success {
			background-color: #4CAF50;
		}

		.error {
			background-color: #f44336;
		}


	</style>
</head>
<body>
	<h1>Login</h1>
	<form method="post" action="login.php">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" required>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required>
		<input type="submit" name="Login">
		<?php if (!empty($error)): ?>
		<div class="error"><?php echo $error[0]; ?></div>
		<?php endif; ?>
	</form>

	<h1>Register</h1>
	<form method="post" action="register.php">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" required>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>
		<input type="submit" name="Register">
	</form>

</body>
</html>

