<?php 
    $format = "DELETE FROM invoices WHERE id = %d";
    $query = sprintf($format, $_GET['id']);
    echo $query;
?>