<?php 
    $format = "INSERT INTO invoices (user_id, amount, idate) VALUES ('%d', '%s', NOW())";
    $query = sprintf($format, encrypt_decrypt('decrypt', $_POST['token']), $_POST['amount']);
    if($mysqli->query($query)){
        echo json_encode(array('result' => TRUE));
    }else{
        echo json_encode(array('result' => FALSE));
    }
?>