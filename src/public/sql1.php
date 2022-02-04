<?php

try{
  $DB_USERNAME = 'php';
  $DB_PASSWORD = 'user1';
  $pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $DB_USERNAME, $DB_PASSWORD);
  $sql = ("SELECT * FROM incomes");
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  // $incomes = $pdo->query("SELECT * FROM incomes;");
  // echo $incomes;
} catch (PDOException $e) {
  echo 'Error:'.$e->getMessage();
}
$all = $stmt->fetchAll();
echo '<pre>';
var_dump($all);
echo '<pre>';

try{
  $DB_USERNAME = 'php';
  $DB_PASSWORD = 'user1';
  $pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $DB_USERNAME, $DB_PASSWORD);
  $sql = ("SELECT * FROM spendings");
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  // $incomes = $pdo->query("SELECT * FROM incomes;");
  // echo $incomes;
} catch (PDOException $e) {
  echo 'Error:'.$e->getMessage();
}
$all = $stmt->fetchAll();
echo '<pre>';
var_dump($all);
echo '<pre>';

try{
  $DB_USERNAME = 'php';
  $DB_PASSWORD = 'user1';
  $pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $DB_USERNAME, $DB_PASSWORD);
  $sql = ("SELECT * FROM categories");
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  // $incomes = $pdo->query("SELECT * FROM incomes;");
  // echo $incomes;
} catch (PDOException $e) {
  echo 'Error:'.$e->getMessage();
}
$all = $stmt->fetchAll();
echo '<pre>';
var_dump($all);
echo '<pre>';