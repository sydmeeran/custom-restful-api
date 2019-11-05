<?php

// connect to DB and get request from CLIENT
$request = $_SERVER['REQUEST_URI'];
require_once('db.php'); 

//function for encypting and decypting token
/***
 * USAGE:
 *  $plan_txt = "neki fam";
 *  $encrypted_txt = encrypt_decrypt('encrypt', $plain_txt);
 *  $decrypted_txt = encrypt_decrypt('decrypt', $encrypted_txt);
 * 
***/
function encrypt_decrypt($action, $string) {
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $secret_key = 'This is my secret key';
    $secret_iv = 'This is my secret iv';
    $key = hash('sha256', $secret_key);

    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    if ( $action == 'encrypt' ) {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    } else if( $action == 'decrypt' ) {
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }
    return $output;
}

// preberi vse uporabnike
if (strpos($request, '/users') !== false )
    require __DIR__ . '/Api/Users.php';

// registracija uporabnika
else if (strpos($request, '/create_user') !== false )
    require __DIR__ . '/Api/CreateUser.php';

// preberi podatke uporabnika
else if (strpos($request, '/get_user') !== false )
    require __DIR__ . '/Api/GetUser.php';

// prijava uporabnika
else if (strpos($request, '/login_user') !== false )
    require __DIR__ . '/Api/Login.php';

// preberi vse račune
else if (strpos($request, '/invoices') !== false )
    require __DIR__ . '/Api/Invoices.php';

// ustvari račun
else if (strpos($request, '/create_invoice') !== false )
    require __DIR__ . '/Api/CreateInvoice.php';

// izbriši račun
else if (strpos($request, '/delete_invoice') !== false )
    require __DIR__ . '/Api/DeleteInvoice.php';


?>