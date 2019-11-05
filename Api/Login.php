<?php
    //$mysqli = new mysqli('localhost', '', '', '') or die($mysqli->error);
    $format = "SELECT * FROM users WHERE email = '%s' AND password = '%s'";
    $query = sprintf($format, $_GET['email'], $_GET['password']);
    echo $query;
?>