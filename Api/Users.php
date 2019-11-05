<?php
    //$mysqli = new mysqli('localhost', '', '', '') or die($mysqli->error);
    $query = $mysqli->query('SELECT * FROM users');

    $rows = array();
    while($row=mysqli_fetch_assoc($result)){ $rows[] = $row; }
    print json_encode($rows);
?>