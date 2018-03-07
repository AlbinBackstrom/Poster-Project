<?php
if(!isset($_SESSION))
{
    session_start();
}
function connect_db()
{
    $host = "localhost";
    $user = "alba0008";
    $pass = "samsung";
    $db_name = "alba0008";
    try {
        $DB_con = new PDO("mysql:host=$host;dbname=$db_name", $user, $pass);

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $DB_con;
}