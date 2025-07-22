<?php
// define variables and set to empty values
$emailErr = $pwdErr = "";
$email = $pwd = "";
$err = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["email"])) {
		$emailErr = "Email required";
		$err = true;
	} else {
		$email = test_input($_POST["email"]);
		// check if e-mail address is well-formed
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = "Invalid email";
			$err = true;
		}
	}


	if (empty($_POST["pass"])) {
		$pwdErr = "Password required";
		$err = true;
	} else {
		$pwd = test_input($_POST["pass"]);
		// check if pwd contains the required characters
		if (!preg_match("/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/i", $pwd)) {
			$pwdErr = "Invalid password";
			$err = true;
		}
	}

	if ($err === false) {
		session_start();
		include("function/conessione.php");

		$stmt = $con->prepare("SELECT * FROM users WHERE email = ?");
		$stmt->bind_param('s', $_POST['email']);
		$stmt->execute();
		$result = $stmt->get_result();
		$user = $result->fetch_object();

		// Verify user password and set $_SESSION
		//if ( password_verify( $_POST['password'], $user->pwd ) ) {
		if ($_POST['pass'] === $user->pass) {
			$_SESSION['user_id'] = $user->email;
			if ($user->admin == 1) {
				header("Location: indexadmin.php");
				$_SESSION['admin'] = 1;
			} else {
				header("Location: indexuser.php");
				$_SESSION['admin'] = 0;
			}
		} else {
			$emailErr = "Invalid email";
			$pwdErr = "Invalid password";
			$err = true;
		}
	}
}

function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="shortcut icon" type="image" href="css/bookicon.png">
	<title>Login</title>
</head>
<body>


	<div class="bg"></div>
	<div class="center">
		<h1>Login</h1>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			<div class="textarea">
				<input type="text" name="email" required>
				<span></span>
				<label>Email</label>
				<span><?php if ($emailErr === "Invalid email") {
							echo "<label style='color:red; position:absolute; top:60px; left:180px; font-size:20px; '>" . $emailErr . "</label>";
						} else {
							echo "";
						} ?></span>
			</div>
			<div class="textarea">
				<input type="password" name="pass" required>
				<span></span>
				<label>Password</label>
				<span><?php if ($pwdErr === "Password required" || $pwdErr === "Invalid password") {
							echo "<label style='color:red; position:absolute; top:60px; left:150px; '>" . $pwdErr . "</label>";
						} else {
							echo "";
						} ?></span>
			</div>
			<div class="password">Forgot Password?</div>
			<input type="submit" value="Login">
			<div class="signup">
				Do not have an account? <a href="signup.php">Sign up</a>
			</div>
		</form>
	</div>
</body>
</html>