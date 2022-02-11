<?php
//支出

$db_username = 'php';
$db_password = 'user1';
$pdo = new pdo("mysql:host=mysql; dbname=tq_quest; charset=utf8", $db_username, $db_password);
$sql = ("select * from categories");
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchall();

foreach ($results as $result) {

  if ($result['name'] == '通信料') {
    $idComunicationCosts = 3;
  }
  if ($result['name'] == '水道光熱費') {
    $idUtilityBill = 2;
  }
  if ($result['name'] == '住宅費') {
    $idHousingCosts = 1;
  }
  if ($result['name'] == '交際費') {
    $idEntertainmentExpenses = 4;
  }
}



echo '「通信料」カテゴリーの支出を一覧表示してみてください。';
echo '<br>';
$db_username = 'php';
$db_password = 'user1';
$pdo = new pdo("mysql:host=mysql; dbname=tq_quest; charset=utf8", $db_username, $db_password);
$sql = ("select * from spendings");
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchall();

foreach ($results as $result) {

  if ($result['category_id'] == $idComunicationCosts) {
    echo $result['accrual_date'] . 'に支払った' . $result['name'] . '料金:' . $result['amount'];
    echo '<br>';
  }
}
echo '<br>';
echo '<br>';



echo '「水道光熱費」カテゴリーの支出を一覧表示してみてください。';
echo '<br>';
$db_username = 'php';
$db_password = 'user1';
$pdo = new pdo("mysql:host=mysql; dbname=tq_quest; charset=utf8", $db_username, $db_password);
$sql = ("select * from spendings");
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchall();

foreach ($results as $result) {

  if ($result['category_id'] == $idUtilityBill) {
    echo $result['accrual_date'] . 'に支払った' . $result['name'] . '料金:' . $result['amount'];
    echo '<br>';
  }
}
echo '<br>';
echo '<br>';



echo '「住宅費」カテゴリーの支出を一覧表示してみてください。';
echo '<br>';
$db_username = 'php';
$db_password = 'user1';
$pdo = new pdo("mysql:host=mysql; dbname=tq_quest; charset=utf8", $db_username, $db_password);
$sql = ("select * from spendings");
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchall();

foreach ($results as $result) {

  if ($result['category_id'] == $idHousingCosts) {
    echo $result['accrual_date'] . 'に支払った' . $result['name'] . '料金:' . $result['amount'];
    echo '<br>';
  }
}
echo '<br>';
echo '<br>';



echo '「交際費」カテゴリーの支出を一覧表示してみてください。';
echo '<br>';
$db_username = 'php';
$db_password = 'user1';
$pdo = new pdo("mysql:host=mysql; dbname=tq_quest; charset=utf8", $db_username, $db_password);
$sql = ("select * from spendings");
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchall();

foreach ($results as $result) {

  if ($result['category_id'] == $idEntertainmentExpenses) {
    echo $result['accrual_date'] . 'に支払った' . $result['name'] . '料金:' . $result['amount'];
    echo '<br>';
  }
}
