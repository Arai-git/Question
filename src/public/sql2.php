<?php

try{
  $DB_USERNAME = 'php';
  $DB_PASSWORD = 'user1';
  $pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $DB_USERNAME, $DB_PASSWORD);
  $sql = ("SELECT SUM(amount) FROM incomes");
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
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
  $sql = ("SELECT SUM(amount) FROM spendings");
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  } catch (PDOException $e) {
    echo 'Error:'.$e->getMessage();
  }
  $all = $stmt->fetchAll();
  echo '<pre>';
  var_dump($all);
  echo '<pre>';