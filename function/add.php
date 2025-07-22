<?php
session_start(); //consente l'accesso alle variabili super_globali di sessione settate

if ($_SERVER["REQUEST_METHOD"] == "POST" and (session_status() != PHP_SESSION_NONE) and $_SESSION['admin'] === 1) {

    include("conessione.php");

    $t = $_POST['title'];
    $a = $_POST['author'];
    $g = $_POST['genre'];
    $p = $_POST['publisher'];
    $d = $_POST['description'];
    $i = $_POST['isbn'];
    $da = $_POST['date'];
    $in = $_POST['internalcode'];
    $e = $_POST['edition'];
    $stmt = $con->prepare("INSERT INTO books(title, author, gnre, publishinghouse, isbn, date, internal, edition,description) VALUES (?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param('sssssssss', $t, $a, $g, $p, $i, $da, $in, $e, $d);
    $stmt->execute();
    if ($stmt->affected_rows > 0) {
        echo ("Book successfully added!");
    } else {
        echo ("Invalid fields! For example the internal code already exists...");
    }
    header("refresh:3; url= /public_html/addbook.php");
} else
    header("Location:/public_html/index.php");
