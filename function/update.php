<?php
session_start();
if ((session_status() != PHP_SESSION_NONE) and $_SESSION['admin']===1) {  
       echo "";
    
include("conessione.php");

$id = $_POST['id'];
$titolo = $_POST['title'];
$autore = $_POST['author'];
$isbn = $_POST['isbn'];
$data = $_POST['date'];
$edizione = $_POST['edition'];
$genere = $_POST['genre'];
$publisher = $_POST['publisher'];
$codice = $_POST['internalcode'];
$descrizione = $_POST['description'];

$sql=("UPDATE books SET title='$titolo', author='$autore', isbn='$isbn', date='$data', edition='$edizione', gnre='$genere', publishinghouse='$publisher', internal='$codice',
description='$descrizione' WHERE idbook=$id LIMIT 1 ");
$result = $con->query($sql);

if ( $result){
    echo("Successfully update!");
    header("refresh:2; url=/public_html/function/search.php");
}
else{
    echo("Invalid fields! For example the internal code inexistent...");
    header("refresh:2; url=/public_html/function/search.php");
}


}else{
    header("Location:/public_html/index.php");
 }
