<?php 
    $format = "DELETE FROM invoices WHERE id = %d";
    $query = sprintf($format, $_GET['id']);

    if($mysqli->query($query)){
        echo json_encode(array('result' => TRUE));
    }else{
        echo json_encode(array('result' => FALSE));
    }
?>