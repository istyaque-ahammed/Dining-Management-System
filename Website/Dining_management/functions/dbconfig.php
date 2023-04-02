<?php

define('DB_SERVER', '127.0.0.1:4306');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'dining_management_system');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($link === false) {
     die("ERROR: Could not connect. " . mysqli_connect_error());
}
