<?php
    require_once realpath(__DIR__ . "/vendor/autoload.php");
    use Dotenv\Dotenv;
    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $username = $_ENV['username'];
    $password = $_ENV['password'];
    $database = $_ENV['database'];
    $server = $_ENV['server'];
    
    $koneksi = mysqli_connect($server,$username,$password,$database);
?>