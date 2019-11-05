<?php 
    $format = "INSERT INTO invoices (user_id, amount, idate) VALUES ('%d', '%s', NOW())";
    $query = sprintf($format, $_GET['user_id'], $_GET['amount'], $_GET['password']);
    echo $query;
?>