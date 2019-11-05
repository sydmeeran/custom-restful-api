<?php

$request = $_SERVER['REQUEST_URI'];


// preberi vse uporabnike
if (strpos($request, '/users') !== false )
    require __DIR__ . '/Api/Users.php';

// registracija uporabnika
else if (strpos($request, '/create_user') !== false )
    require __DIR__ . '/Api/CreateUser.php';

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