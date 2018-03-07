<?php
session_start();
$host = "localhost";
$user = "alba0008";
$pass = "samsung";
$db_name = "alba0008";
try
{
    $DB_con = new PDO("mysql:host={$host};dbname={$db_name}",$user,$pass);
    $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo $e->getMessage();
}