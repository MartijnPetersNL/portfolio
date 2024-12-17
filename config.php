<?php

ini_set('session.use_only_cookies',1); //against Session fixation 1 = true
ini_set('session.use_strict_mode',1); // only uses session id made by server

session_set_cookie_params([
    'lifetime' => 1800, //time in milliseconds
    'domain' => 'localhost'
    'path' => '/' // working in all sub directories
    'secure' => true, 
    'httponly' => true
]);
session_start();

session_regenerate_id(true); //generates stronger ID then session_start()
// below generates new ID periodicaly
if (!isset($_SESSION['last_regeneration'])) {
    session_regenerate_id(true);
    $_SESSION['last_regeneration'] = time();
} else {
    $interval = 60 * 30; //60 seconds X minutes
    if (time() - $_SESSION['last_regeneration'] >= $interval) {
        session_regenerate_id(true);
        $_SESSION['last_regeneration'] = time();
    }
}
