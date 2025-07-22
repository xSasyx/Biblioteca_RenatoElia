<?php
   session_start();
   if ((session_status() != PHP_SESSION_NONE) and $_SESSION['admin']===1) {       
    include("conessione.php");
    $id = (int)$_GET['idbook'];

    $stmt = $con->prepare("Delete from books where idbook = ?");
    $stmt->bind_param('s', $id);    
    $stmt->execute();
    if ( $stmt->affected_rows > 0 ){
		echo("Book successfully deleted!");
    header("refresh:2; url=/public_html/function/search.php");

	}
	else{
		echo("Invalid fields! For example the internal code inexistent...");
    header("refresh:2; url=/public_html/function/search.php");
	}

}else{
  header("Location:/public_html/index.php");
}
?>