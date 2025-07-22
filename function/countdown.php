<?php


include("conessione.php");


$sql="SELECT id , id_book, email FROM booking where DATEDIFF(Current_Time(), DataFin) > 0 ";
$result = $con->query($sql);



if ($result->num_rows > 0) {
$row= $result->fetch_assoc();
$id=$row['id'];
$id2=$row['id_book'];
$em=$row['email'];

$sql1="DELETE from booking where id=$id ";
$result2 = $con->query($sql1);
$t=1;   

include("email/email.php");

$t=0;   
$sql4 = "UPDATE users SET nbooks=nbooks-1 where email='$em' ";
$result4 = $con->query($sql4);
$sql2="UPDATE  books set status='available' WHERE idbook=$id2";
$result3 = $con->query($sql2);


}

?> 