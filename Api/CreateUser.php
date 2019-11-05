<?php 
    $format = "INSERT INTO users (name, email, password) VALUES ('%s', '%s', '%s')";
    $query = sprintf($format, $_GET['name'], $_GET['email'], $_GET['password']);
    echo $query;
?>