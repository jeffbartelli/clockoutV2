<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "clockout";
    // $hostname = "localhost";
    // $username = "u116386184_root";
    // $password = "q4NMaYp:~";
    // $dbname = "u116386184_citizen_budget";
    define("NONCE_SALT", "WaCH3hb6DEMSm7juGFP4UM7AUaDUHFEJ7GMmvHHI");

    # making the connection to mysql
    $dbc = new PDO("mysql:host=$hostname;dbname=$dbname;charset=utf8mb4", $username, $password, [
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_EMULATE_PREPARES => false
    ]);
?>