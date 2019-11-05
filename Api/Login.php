<?php

    $result_message = "";
    $format = "SELECT * FROM users WHERE gmail = %s";
    $query = sprintf($format, $_POST['gmail']);
    $result = $mysqli->query($query);
    if($result->num_rows == 0){
        echo json_encode(array('result' => FALSE, 'msg' => 'User does not exist!'));
    }
    else{
        $user = $result->fetch_assoc();
        if(password_verify($_POST['password'], $user['password'])){
            echo json_encode(array('result' => TRUE, 'id' => encrypt_decrypt('encrypt', $user['id'])));
        }
        else{
            echo json_encode(array('result' => FALSE, 'msg' => 'Incorrect passsword!'));
        }
    }
?>