<?php

    $userResult = ($mysqli->query("SELECT * FROM users WHERE id = {$_POST['id']}"))->fetch_assoc();
    $userResult['balance'] = ($mysqli->query("SELECT SUM(amount) as _value FROM invoices WHERE user_id = {$_POST['id']}"))->fetch_assoc()['_value'];


    echo json_encode(array('user' => $userResult));
?>