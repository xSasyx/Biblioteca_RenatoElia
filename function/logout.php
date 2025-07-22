<?php
// Always start this first
session_start();
session_destroy();

header("refresh:1; url=/public_html/index.php");
?>