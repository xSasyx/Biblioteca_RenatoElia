<?php
session_start();

if ((session_status() != PHP_SESSION_NONE) and $_SESSION['admin'] === 0) {
  echo "";
} else {
  header("Location:/public_html/index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
  <title> Home </title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/StyleHome.css">
  <link rel="shortcut icon" type="image" href="css/bookicon.png">
</head>
<body>
<section id="banner">
  <?php include("function/menuuser.html");?>
    <div id="main">
      <div class="text-banner">
        <h1>Biblioteca</h1>
        <p> Tutti i libri li trovi qui! </p>
        <div class="more-banner">
          <a href="#"><span></span> Find Out</a>
          <a href="#"><span></span> Read More</a>
        </div>
      </div>
    </div>
  </section>
</body>
</html>