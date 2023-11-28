<?php
function pdo_connect()
{
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = '2019101597_Kuis2';
    $DATABASE_PORT = '3368'; // saya menggunakan custom port. ubah ini menjadi 3306 untuk menggunakan default port
    $dsn = 'mysql:dbname=' . $DATABASE_NAME . ';port=' . $DATABASE_PORT . ';host=' . $DATABASE_HOST;
    $user = $DATABASE_USER;
    $password = $DATABASE_PASS;
    try {
        return new PDO($dsn, $user, $password);
    } catch (PDOEXCEPTION $exception) {
        die('Failed to connect to database!');
    }
}
?>