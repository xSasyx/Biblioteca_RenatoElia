<?php
session_start();
if ((session_status() != PHP_SESSION_NONE) and $_SESSION['admin'] === 1) {

    include("conessione.php");
    $id = (int)$_GET['idbook'];
    $sql4 = "SELECT email from withdrawn where id_book = '$id'";
        $result4 = $con->query($sql4);
        $row = $result4->fetch_assoc();
        $email = $row['email'];

    
    $sql5 = "UPDATE books SET status='available' WHERE idbook='$id'";
    $result5 = $con->query($sql5);
    
    $sql = "UPDATE users SET nbooks=nbooks-1 where email='$email' ";
    $result = $con->query($sql);

    if ( $result){
        

        $sql2 = "DELETE from booking where id_book = '$id'";
        $result2 = $con->query($sql2);
        if ( $result2){
        echo("Successfully withdraw!");
        $sql3 = "INSERT INTO `withdrawn`(`id_book`, `email`) VALUES ('$id','$email')";
        $result3 = $con->query($sql3);
        header("refresh:2; url=/public_html/function/searchbooking.php");

        }else{
            echo("Invalid fields!");
            header("refresh:2; url=/public_html/function/searchbooking.php");
        }
    }
    else{
        echo("Invalid fields!");
        header("refresh:2; url=/public_html/function/searchbooking.php");
    }
    

} else {
    header("Location:/public_html/index.php");
}

?>

