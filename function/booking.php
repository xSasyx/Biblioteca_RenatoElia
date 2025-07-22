<?php
session_start();
if ((session_status() != PHP_SESSION_NONE) and $_SESSION['admin'] === 0) {

    // Getting submitted user data from database
    include("conessione.php");
    $em =$_SESSION['user_id'];
    $q = "SELECT nbooks FROM users where email = '$em'";
    $result1 = $con->query($q);
    $row = $result1->fetch_assoc();
    $nbooks = $row["nbooks"];
    if($nbooks<2){

    $t = $_GET['title'];
    $author = $_GET['author'];
    $sql = "SELECT * FROM books WHERE title = '$t' and author = '$author' and status='available' LIMIT 1";
    $result = $con->query($sql);
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        $id = $row['idbook'];
        $sql = "UPDATE books set status='booking' WHERE idbook='$id'";
        $result = $con->query($sql);
        if ( $result){
            include("email/email.php");
            
            $email=$_SESSION['user_id'];
            echo("Successfully Booking!");
            $sql2 = "UPDATE users SET nbooks=nbooks+1 where email='$email' ";
            $result2 = $con->query($sql2);
            $sql="INSERT INTO `booking`(`id_book`, `email`)  VALUES ('$id','$email')";
            $result = $con->query($sql);
            header("refresh:2; url=/public_html/gnre.php");
            }
    }else{
        echo("0 result");
    }
}else{
    echo("Hai già raggiunto il limite di libri (2) prenotabili/presi!");
    header("refresh:2; Location:/public_html/index.php");
}
    

}else {
    header("Location:/public_html/index.php");
}
?>

