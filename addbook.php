<?php
session_start();

if ((session_status() != PHP_SESSION_NONE) and $_SESSION['admin'] === 1) {
  echo "";
} else {
  header("Location:/public_html/index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> Add </title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styleAddb.css">
  <link rel="shortcut icon" type="image" href="css/bookicon.png">
</head>
<body>

<?php include("function/menuadmin.html");?>
    <div class="fake-body">

        <div class="abook-container">
            <div class="abook-title">
                Add book
            </div>
            <form method="post" action="function/add.php">
                <div class="user-details">

                    <div class="input-box">
                        <span class="details"> Title </span>
                        <input type="text" placeholder="Type the title" required name="title">
                    </div>

                    <div class="input-box">
                        <span class="details"> Author </span>
                        <input type="text" placeholder="Type the author" required name="author">
                    </div>

                    <div class="input-box">
                        <span class="details"> ISBN </span>
                        <input type="text" placeholder="Type ISBN" required name="isbn">
                    </div>

                    <div class="input-box">
                        <span class="details"> Publishing Date </span>
                        <input type="date" required name="date">
                    </div>

                    <div class="input-box">
                        <span class="details"> Edition </span>
                        <input type="text" placeholder="Type the edition" required name="edition">
                    </div>

                    <div class="input-box">
                        <span class="details"> Genre </span>
                        <select name="genre">
                            <option value="Romance">Romance</option>
                            <option value="Fantascienza">Fantascienza</option>
                            <option value="Historical Novel">Historical Novel</option>
                            <option value="Fantasy">Fantasy</option>
                            <option value="Scienza">Scienza</option>
                            <option value="Thriller">Thriller</option>
                            <option value="Young Adult">Young Adult</option>
                            <option value="New adult">New adult</option>
                            <option value="Horror">Horror</option>
                            <option value="Giallo">Giallo</option>
                            <option value="Umoristico">Umoristico</option>
                            <option value="Avventura e Azione">Avventura e Azione</option>
                            <option value="Romanzo di formazione">Romanzo di formazione</option>
                            <option value="Biografia e autobiografia">Biografia e autobiografia</option>
                            <option value="Distopia">Distopia</option>
                            <option value="Fumetti/Manga">Fumetti/Manga</option>
                        </select>
                        <!-- <input type="text" placeholder="Type the genre" required name="genre"> -->
                    </div>

                    <div class="input-box">
                        <span class="details"> Publisher </span>
                        <input type="text" placeholder="Type the publisher" required name="publisher">
                    </div>

                    <div class="input-box">
                        <span class="details"> Internal Code </span>
                        <input type="text" placeholder="Type the internal code" required name="internalcode">
                    </div>

                    <div class="description-details">
                        <span class="description-title"> Description </span>
                        <textarea name="description" placeholder="Remember, be nice!"> </textarea>
                    </div>

                </div>

                <div class="abook-button">
                    <input type="submit" value="Add book">
                </div>

            </form>

        </div>
    </div>
</body>

</html>