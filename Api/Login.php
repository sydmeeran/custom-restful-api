<?php

    $result_message = "";
    //$mysqli = new mysqli('localhost', '', '', '') or die($mysqli->error);
    $format = "SELECT * FROM users WHERE email = '%s'";
    $query = sprintf($format, $_GET['email']);
    $result = $mysqli->query($query) or trigger_error("ERROR:". mysqli_error($mysqli), E_USER_ERROR);
    if($result->num_rows == 0){
        echo json_encode(array('result' => FALSE, 'msg' => 'User does not exist!'));
    }
    else{
        $user = $result->fetch_assoc();
        if(password_verify($_GET['password'], $user['password'])){
            echo json_encode(array('result' => FALSE, 'id' => $user['id']));
        }
        else{
            echo json_encode(array('result' => FALSE, 'msg' => 'Incorrect passsword!'));
        }
    }
?>