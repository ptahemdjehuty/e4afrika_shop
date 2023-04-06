<?php

/**
 * THIS FILE HELPS US TO DISPACTH THE ROUTES AND CALL THE SUITABLE CONTROLLER
 **/
$cleanRoute = explode('?', $_SERVER['REQUEST_URI']);

$route = $cleanRoute[0]; // Get the request URI

if ($route === '/') {
       require_once 'app/core/views/home.php';
}
else if ($route === '/register'){
    require_once 'app/core/views/register.php';
}

else if ($route === '/login') {
    require_once 'app/core/views/login.php';
}

else {
    echo '404 vous etes perdue ;(';
}

// author : @ptahemdjehuty
