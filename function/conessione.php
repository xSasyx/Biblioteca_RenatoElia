<?php 
   $dbHost     = "localhost";
   $dbUsername = "root";
   $dbPassword = "";
   $dbName     = "library";

   // Getting submitted user data from database
   $con = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
   if ($con->connect_error) die("Connessione fallita: " . $con->connect_error);
?>