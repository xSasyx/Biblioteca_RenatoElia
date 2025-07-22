<?php
$e = $p = $n = $s = $d = "";
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
        if (!preg_match("/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{4,10}$/i", $pwd)) {
            $pwdErr = "Invalid password";
            $err = true;
        } else {
            if (test_input($_POST['pass']) <> test_input($_POST['rpass'])) {
                $pwdErr = "Password does not match";
                $err = true;
            }
        }
    }

    if ($err === false) {
        session_start();
        $dbHost     = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName     = "library";

        // Getting submitted user data from database
        $con = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        if ($con->connect_error) {
            die("Connessione fallita: " . $con->connect_error);
        }
        $stmt = $con->prepare("INSERT INTO users(email, pass, name, surname, birthdate) VALUES (?,?,?,?,?)");
        $stmt->bind_param('sssss', $e, $p, $n, $s, $d);
        $e = $_POST['email'];
        $p = $_POST['pass'];
        $n = $_POST['name'];
        $s = $_POST['surname'];
        $d = $_POST['datan'];

        $stmt2 = $con->prepare("SELECT * FROM users WHERE email = ?");
        $stmt2->bind_param('s', $e);
        $stmt2->execute();
        $result = $stmt2->get_result();
        $user = $result->fetch_object();

        $found = false;
        if ($stmt2 == true) {
            if ($stmt2->affected_rows > 0)
                $found = true;
            if ($found)
                echo ('User already registered.');
            else {
                $stmt->execute();
                echo ("<h1>Sign up successful!!</h1>");
            }
            header("refresh:3; url= /public_html/index.php");
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
    <link rel="stylesheet" type="text/css" href="css/signup.css">
    <link rel="shortcut icon" type="image" href="css/bookicon.png">
    <title>Signup</title>
</head>
<body>
    <div class="bg"></div>
    <div class="center">
        <h1>Sign up</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <div class="textarea">
                <input type="text" name="name" required>
                <span></span>
                <label>Name</label>
            </div>

            <div class="textarea">
                <input type="text" name="surname" required>
                <span></span>
                <label>Surname</label>
            </div>

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
                <span><?php if ($pwdErr === "Password required" || $pwdErr === "Invalid password" || $pwdErr === "Password does not match") {
                            echo "<label style='color:red; position:absolute; top:60px; left:150px; '>" . $pwdErr . "</label>";
                        } else {
                            echo "";
                        } ?></span>
            </div>

            <div class="textarea">
                <input type="password" name="rpass" required>
                <span></span>
                <label>Repeat Password</label>
                <span><?php if ($pwdErr === "Password required" || $pwdErr === "Invalid password" || $pwdErr === "Password does not match") {
                            echo "<label style='color:red; position:absolute; top:60px; left:150px; '>" . $pwdErr . "</label>";
                        } else {
                            echo "";
                        } ?></span>
            </div>

            <div class="textarea">

                <input type="date" name="datan" placeholder="Birthdate" required>
                <span></span>

            </div>
            <br>
            <input type="submit" value="Sign up">
            <div class="signup">
                Sign up <a href="index.php">Login</a>
            </div>
        </form>
    </div>
</body>
</html>