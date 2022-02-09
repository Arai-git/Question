<?php

  echo '4月の収入の合計:';
  $DB_USERNAME = 'php';
  $DB_PASSWORD = 'user1';
  $pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $DB_USERNAME, $DB_PASSWORD);
  $sql = ("SELECT * FROM incomes");
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $results = $stmt->fetchAll();

  $incomes = 0;
  foreach ($results as $result) {
    
    $day = explode("-", $result['accrual_date']);
    $month = $day[1];

    if ($month == '04') {
      $incomes += $result['amount'];
    }
  }
  echo $incomes;
  echo '<br>';


  echo '5月の収入の合計:';
  $DB_USERNAME = 'php';
  $DB_PASSWORD = 'user1';
  $pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $DB_USERNAME, $DB_PASSWORD);
  $sql = ("SELECT * FROM incomes");
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $results = $stmt->fetchAll();

  foreach ($results as $result) {
    
    $day = explode("-", $result['accrual_date']);
    $month = $day[1];

    if ($month == '05') {
      $incomes += $result['amount'];
    }
  }
  echo $incomes;
  echo '<br>';


  echo '6月の収入の合計:';
  $DB_USERNAME = 'php';
  $DB_PASSWORD = 'user1';
  $pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $DB_USERNAME, $DB_PASSWORD);
  $sql = ("SELECT * FROM incomes");
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $results = $stmt->fetchAll();

  foreach ($results as $result) {
    
    $day = explode("-", $result['accrual_date']);
    $month = $day[1];

    if ($month == '06') {
      $incomes += $result['amount'];
    }
  }
  echo $incomes;
  echo '<br>';


  echo '<br>';
  echo '月順にsortして月ごとの収入の合計を一覧表示';
  echo '<br>';
  $DB_USERNAME = 'php';
  $DB_PASSWORD = 'user1';
  $pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $DB_USERNAME, $DB_PASSWORD);
  $sql = ("SELECT * FROM incomes");
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $results = $stmt->fetchAll();

  foreach ($results as $result) {
    
    $day = explode("-", $result['accrual_date']);
    $month = $day[1];

    if ($month == '01') $januIncomes += $result['amount'];
    if ($month == '02') $febIncomes += $result['amount'];
    if ($month == '03') $marIncomes += $result['amount'];
    if ($month == '04') $arpIncomes += $result['amount'];
    if ($month == '05') $mayIncomes += $result['amount'];
    if ($month == '06') $juneIncomes += $result['amount'];
    if ($month == '07') $julyIncomes += $result['amount'];
    if ($month == '08') $augIncomes += $result['amount'];
    if ($month == '09') $sepIncomes += $result['amount'];
    if ($month == '10') $octIncomes += $result['amount'];
    if ($month == '11') $novIncomes += $result['amount'];
    if ($month == '12') $decIncomes += $result['amount'];
  }
  echo '1月:' . " " . $januIncomes;
  echo '<br>';
  echo '2月:' . " " . $febIncomes;
  echo '<br>';
  echo '3月:' . " " . $marIncomes;
  echo '<br>';
  echo '4月:' . " " . $arpIncomes;
  echo '<br>';
  echo '5月:' . " " . $mayIncomes;
  echo '<br>';
  echo '6月:' . " " . $juneIncomes;
  echo '<br>';
  echo '7月:' . " " . $julyIncomes;
  echo '<br>';
  echo '8月:' . " " . $augIncomes;
  echo '<br>';
  echo '9月:' . " " . $sepIncomes;
  echo '<br>';
  echo '10月:' . " " . $octIncomes;
  echo '<br>';
  echo '11月:' . " " . $novIncomes;
  echo '<br>';
  echo '12月:' . " " . $decIncomes;
  echo '<br>';