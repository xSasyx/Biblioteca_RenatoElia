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
    <label>Cerca Prenotazione</label> <br>
    <input type="text" name="email">
    <input type="submit" value="search" name="search" >
    </form>   
    <br>  
     
</body>



</html>

    
<?php
session_start();
if ((session_status() != PHP_SESSION_NONE) and $_SESSION['admin'] === 1) {

    // Getting submitted user data from database
    include("conessione.php");

    $table = "";

    if (isset($_POST["search"])) {
         include("countdown.php");
        $email = $_POST["email"];
        $sql = "SELECT * FROM booking inner join books on booking.id_book=books.idbook WHERE email LIKE '%$email%'";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            $bookstamp = "";
            $table = "<tr> <th>Email </th> <th>Internal code</th> <th>Titolo</th> <th>Data Inizio</th> <th>Data Fine</th> </tr>";
            $s = true;
            while ($row = $result->fetch_assoc()) {
                $id = $row['idbook'];
                $bookstamp .= "<tr><td>" . $row["email"] . "</td><td>" . $row["internal"]  . "</td><td>".
                $row["title"] . "</td><td>" . $row["dataInz"] . "</td><td>" .$row["dataFin"] . "</td><td>" . 
                "<a href='withdraw.php?idbook=$id'> RITIRATO </a>" ;
                
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
