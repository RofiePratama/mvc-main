<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '123');
define('DB_NAME', 'mvcapp');
define('BASE_URL', 'http://localhost/mvc-main/');

function getDBConnection() {
    return new PDO("mysql:host=localhost;port=3307;dbname=" . 'mvcapp', 'root', '123');
}

