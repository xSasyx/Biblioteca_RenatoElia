<?php

include("conessione.php");

$sql = "SELECT title, author, gnre FROM books";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  $bookstamp = "";
  while ($row = $result->fetch_assoc()) {
    $bookstamp .= "<tr><td><a method=get href=/public_html/gnre.php>" . $row["title"] . "</a></td><td>" . $row["author"] . "</td><td>" . $row["gnre"] . "</td></tr>";
  }
} else {
  echo ("0 result");
}

$con->close();
?>

<!DOCTYPE html>
<html>

<head>

  <title> Home_Site_Modulo </title>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="/public_html/css/StyleHome.css">
  <link rel="stylesheet" type="text/css" href="/public_html/css/styleAddb.css">
  <link rel="shortcut icon" type="image" href="/css/bookicon.png">

</head>

<body>

  <section id="banner">
  <?php include("menuuser.html");?>
    <div id="main">
      <table id="customers">
        <thead>
          <tr>
            <th>Title</th>
            <th>Autore</th>
            <th>Genere</th>
          </tr>
        </thead>
        <tbody>
          <?php echo $bookstamp; ?>
        </tbody>
      </table>
    </div>
  </section>


</body>

</html>