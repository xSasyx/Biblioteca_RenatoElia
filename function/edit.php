<?php
session_start();
if ((session_status() != PHP_SESSION_NONE) and $_SESSION['admin'] === 1) {

    include("conessione.php");

    $id = (int)$_GET['idbook'];
    $sql = ("SELECT * FROM books WHERE idbook = $id");             // Uso questa queri così da poter aggevolare l'utente sulla modifica
    $result = $con->query($sql);
    $riga = $result->fetch_assoc();

    if ($result = $con->error) die("Errore di lettura del database.");

    $titolo = $riga['title'];
    $autore = $riga['author'];
    $isbn = $riga['isbn'];
    $data = $riga['date'];                                 // Prendo tutti i dati dalla riga stampata per poi passarli nei vari input
    $edizione = $riga['edition'];
    $genere = $riga['gnre'];
    $publisher = $riga['publishinghouse'];
    $codice = $riga['internal'];
    $descrizione = $riga['description'];
} else {
    header("Location:/public_html/index.php");
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/public_html/css/StyleHome.css">
    <link rel="stylesheet" type="text/css" href="/public_html/css/styleAddb.css">
    <link rel="shortcut icon" type="image" href="/css/bookicon.png">

    <title>Edit Books</title>
</head>
<body>
<?php include("menuadmin.html");?>
    <div class="fake-body">
        <div class="abook-container">
            <div class="abook-title">
            Modify book
            </div>
            <form method="post" action="update.php">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details"> Title </span>
                        <input type="text" placeholder="Type the title" required name="title" value="<?= $titolo ?>">
                        <!-- Value, appunto, farà vedere i vari capi che erano già presenti nel databese nell'input-->
                    </div>

                    <div class="input-box">
                        <span class="details"> Author </span>
                        <input type="text" placeholder="Type the author" required name="author" value="<?= $autore ?>">
                    </div>

                    <div class="input-box">
                        <span class="details"> ISBN </span>
                        <input type="text" placeholder="Type ISBN" required name="isbn" value="<?= $isbn ?>">
                    </div>

                    <div class="input-box">
                        <span class="details"> Publishing Date </span>
                        <input type="date" required name="date" value="<?= $data ?>">
                    </div>

                    <div class="input-box">
                        <span class="details"> Edition </span>
                        <input type="text" placeholder="Type the edition" required name="edition" value="<?= $edizione ?>">
                    </div>

                    <div class="input-box">
                        <span class="details"> Genre </span>
                        <input type="text" placeholder="Type the genre" required name="genre" value="<?= $genere ?>">
                    </div>

                    <div class="input-box">
                        <span class="details"> Publisher </span>
                        <input type="text" placeholder="Type the publisher" required name="publisher" value="<?= $publisher ?>">
                    </div>

                    <div class="input-box">
                        <span class="details"> Internal Code </span>
                        <input type="text" placeholder="Type the internal code" required name="internalcode" value="<?= $codice ?>">
                    </div>

                    <div class="description-details">
                        <span class="description-title"> Description </span>
                        <textarea name="description" value="<?= $descrizione ?>"> </textarea>
                    </div>

                </div>

                <input type="hidden" name="id" value="<?= $id ?>">
                <!-- Hidden è un campo nascosto non visibile dall'utente, serve per potersi passare l'id del libro-->

                <div class="abook-button">
                    <input type="submit" value="Modify Book">
                </div>
            </form>
        </div>
    </div>
</body>
</html>