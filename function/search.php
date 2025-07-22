<html>
<head>
    <title>Ricerca</title>
    <link rel="stylesheet" type="text/css" href="/public_html/css/search.css">
    <link rel="stylesheet" type="text/css" href="/public_html/css/StyleHome.css">
    <link rel="shortcut icon" type="image" href="/css/bookicon.png">
</head>
<body>

<?php include("menuadmin.html");?>

    <form style="text-align: center;" method="post">
    <label>Cerca per poter eliminare/modificare un libro</label> <br>
    <input type="text" name="titolo">
    <input type="submit" value="search" name="search">
    </form>   
    
</body>
</html>


<?php
session_start();
if ((session_status() != PHP_SESSION_NONE) and $_SESSION['admin'] === 1) {

    // Getting submitted user data from database
    include("conessione.php");

    $table = "";

    if (isset($_POST["search"])) {
        $t = $_POST["titolo"];
        $sql = "SELECT * FROM books WHERE title LIKE '%$t%'";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            $bookstamp = "";
            $table = "<tr> <th>Title </th> <th> Autore</th> <th>Genere</th> <th>ISBN</th> <th>Data di Pubblicazione</th> <th>Internalcode</th> <th>Edition</th> <th>Status</th>  </tr>";
            $s = true;
            while ($row = $result->fetch_assoc()) {
                $id = $row['idbook'];
                $bookstamp .= "<tr><td>" . $row["title"] . "</td><td>" . $row["author"] . "</td><td>" . $row["gnre"] . "</td><td>" .$row["isbn"] . "</td><td>" . $row["publishinghouse"] .  "</td><td>" .$row["internal"] . "</td><td>" .$row["edition"] . "</td><td>" .$row["status"] . "</td><td>" . "<a href='edit.php?idbook=$id'> MODIFICA </a><td><a href='delete.php?idbook=$id'> ELIMINA </a></td></tr>";
                //in questa stampa dei vari campi, ho stampado anche MODIFICA è ELIMINA, dove tutti e due i campi porteranno alla propria pagina portandosi con sè l'id
            }
        } else {
            $bookstamp = "0 RESULT";
        }
?>
    
        
    
        <table class="center">
            <thead>
                <?php echo $table ?>
            </thead>
            <tbody>
                <?php echo $bookstamp; ?>
            </tbody>
        </table>
        
<?php
    }
} else {
    header("Location:/public_html/index.php");
}
?>