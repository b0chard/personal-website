<?php
  require_once __DIR__ . '/../vendor/autoload.php';

  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
  $dotenv->load();

  $host = $_ENV['DB_HOST'];
  $dbname = $_ENV['DB_NAME'];
  $dbusername = $_ENV['DB_USERNAME'];
  $dbpassword = $_ENV['DB_PASSWORD'];

  try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch(PDOException $e){
    die("connection failed: {$e->getMessage()}");
  }