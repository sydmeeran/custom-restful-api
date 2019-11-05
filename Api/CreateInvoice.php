<?php 
    $format = "INSERT INTO invoices (user_id, amount, idate) VALUES ('%d', '%s', NOW())";
    $query = sprintf($format, $_GET['user_id'], $_GET['amount'], $_GET['password']);
    if($mysqli->query($query)){
        echo json_encode(array('result' => TRUE));
    }else{
        echo json_encode(array('result' => FALSE));
    }
?>