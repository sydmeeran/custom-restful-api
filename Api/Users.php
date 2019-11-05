<?php
    $query = $mysqli->query('SELECT * FROM users');

    $rows = array();
    while($row=mysqli_fetch_assoc($query)){ $rows[] = $row; }
    print json_encode($rows);
?>