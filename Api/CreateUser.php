<?php 
    $format = "INSERT INTO users (fullname, gmail, password) VALUES ('%s', '%s', '%s')";
    $query = sprintf($format, $_POST['fullname'], $_POST['gmail'], password_hash(trim($_POST['password']), PASSWORD_BCRYPT));

    echo $query;
    if($mysqli->query($query)){
        echo json_encode(array('result' => TRUE));
    }else{
        echo json_encode(array('result' => FALSE));
    }
?>