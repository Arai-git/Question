<?php

  echo '1月の支出';
  echo '<br>';
  $DB_USERNAME = 'php';
  $DB_PASSWORD = 'user1';
  $pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $DB_USERNAME, $DB_PASSWORD);
  $sql = ("SELECT * FROM spendings");
  $stmt = $pdo->prepare($sql);
  $stmt->execute();

  $results = $stmt->fetchAll();
  foreach ($results as $result) {
    
    $day = explode("-", $result['accrual_date']);
    $month = $day[1];

    if ($month == '01') {
      echo $result['name'] . ":" . $result['amount'];
      echo '<br>';
    }
  }
  

  echo '<br>';
  echo '2月の支出';
  echo '<br>';
  $DB_USERNAME = 'php';
  $DB_PASSWORD = 'user1';
  $pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $DB_USERNAME, $DB_PASSWORD);
  $sql = ("SELECT * FROM spendings");
  $stmt = $pdo->prepare($sql);
  $stmt->execute();

  $results = $stmt->fetchAll();
  foreach ($results as $result) {
    
    $day = explode("-", $result['accrual_date']);
    $month = $day[1];

    if ($month == '02') {
      echo $result['name'] . ":" . $result['amount'];
      echo '<br>';
    }
  }
  

  echo '<br>';
  echo '3月の支出';
  echo '<br>';
  $DB_USERNAME = 'php';
  $DB_PASSWORD = 'user1';
  $pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $DB_USERNAME, $DB_PASSWORD);
  $sql = ("SELECT * FROM spendings");
  $stmt = $pdo->prepare($sql);
  $stmt->execute();

  $results = $stmt->fetchAll();
  foreach ($results as $result) {
    
    $day = explode("-", $result['accrual_date']);
    $month = $day[1];

    if ($month == '03') {
      echo $result['name'] . ":" . $result['amount'];
      echo '<br>';
    }
  } 


  echo '<br>';
  echo '日付順にsortして支出を一覧表示';
  echo '<br>';
  $DB_USERNAME = 'php';
  $DB_PASSWORD = 'user1';
  $pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $DB_USERNAME, $DB_PASSWORD);
  $sql = ("SELECT * FROM spendings ORDER BY accrual_date");
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $results = $stmt->fetchAll();

  foreach ($results as $result) {
    echo $result['name'] . ':' . $result['amount'];
    echo '<br>';
  }


  echo '<br>';
  echo '支出の高い順';
  echo '<br>';
  $DB_USERNAME = 'php';
  $DB_PASSWORD = 'user1';
  $pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $DB_USERNAME, $DB_PASSWORD);
  $sql = ("SELECT amount FROM spendings ORDER BY amount DESC");
  $stmt = $pdo->prepare($sql);
  $stmt->execute();

  $results = $stmt->fetchAll();
  foreach ($results as $result) {
    echo $result['amount'];
    echo '<br>';
  }


  echo '<br>';
  echo '支出の低い順';
  echo '<br>';
  $DB_USERNAME = 'php';
  $DB_PASSWORD = 'user1';
  $pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $DB_USERNAME, $DB_PASSWORD);
  $sql = ("SELECT amount FROM spendings ORDER BY amount");
  $stmt = $pdo->prepare($sql);
  $stmt->execute();

  $results = $stmt->fetchAll();
  foreach ($results as $result) {
    echo $result['amount'];
    echo '<br>';
  }