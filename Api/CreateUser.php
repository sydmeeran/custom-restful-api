<?php 
    $format = "INSERT INTO users (name, email, password) VALUES ('%s', '%s', '%s')";
    $query = sprintf($format, $_GET['name'], $_GET['email'], password_hash(trim($_POST['password']), PASSWORD_BCRYPT));
    if($mysqli->query($query)){
        echo json_encode(array('result' => TRUE));
    }else{
        echo json_encode(array('result' => FALSE));
    }
?>