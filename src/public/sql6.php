<?php
//収入
echo '前月の収入との差分を一覧表示してください。';
echo '<br>';
$db_username = 'php';
$db_password = 'user1';
$pdo = new pdo("mysql:host=mysql; dbname=tq_quest; charset=utf8", $db_username, $db_password);
$sql = ("select * from incomes");
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchall();

foreach ($results as $result) {

  $date = explode("-", $result['accrual_date']);
  $month = $date[1];

  if (isMonthJanu($month)) {
    $incomes[0] += $result['amount'];
  }
  if (isMonthFeb($month)) {
    $incomes[1] += $result['amount'];
  }
  if (isMonthMar($month)) {
    $incomes[2] += $result['amount'];
  }
  if (isMonthArp($month)) {
    $incomes[3] += $result['amount'];
  }
  if (isMonthMay($month)) {
    $incomes[4] += $result['amount'];
  }
  if (isMonthJune($month)) {
    $incomes[5] += $result['amount'];
  }
  if (isMonthJuly($month)) {
    $incomes[6] += $result['amount'];
  }
  if (isMonthAug($month)) {
    $incomes[7] += $result['amount'];
  }
  if (isMonthSep($month)) {
    $incomes[8] += $result['amount'];
  }
  if (isMonthOct($month)) {
    $incomes[9] += $result['amount'];
  }
  if (isMonthNov($month)) {
    $incomes[10] += $result['amount'];
  }
  if (isMonthDec($month)) {
    $incomes[11] += $result['amount'];
  }
}

$total = 0;
for ($i = 0; $i < 11; $i++) {
  $totalIncomes = abs($incomes[$i] - $incomes[$i + 1]);
  echo ($i + 1) . '月と' . ($i + 2) . '月の差分:' . ' ' . $totalIncomes . "円";
  echo '<br>';
}
echo '<br>';

//支出
echo '前月の支出との差分を一覧表示してください。';
echo '<br>';
$db_username = 'php';
$db_password = 'user1';
$pdo = new pdo("mysql:host=mysql; dbname=tq_quest; charset=utf8", $db_username, $db_password);
$sql = ("select * from spendings");
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchall();

foreach ($results as $result) {

  $date = explode("-", $result['accrual_date']);
  $month = $date[1];

  if (isMonthJanu($month)) {
    $spendings[0] += $result['amount'];
  }
  if (isMonthFeb($month)) {
    $spendings[1] += $result['amount'];
  }
  if (isMonthMar($month)) {
    $spendings[2] += $result['amount'];
  }
  if (isMonthArp($month)) {
    $spendings[3] += $result['amount'];
  }
  if (isMonthMay($month)) {
    $spendings[4] += $result['amount'];
  }
  if (isMonthJune($month)) {
    $spendings[5] += $result['amount'];
  }
  if (isMonthJuly($month)) {
    $spendings[6] += $result['amount'];
  }
  if (isMonthAug($month)) {
    $spendings[7] += $result['amount'];
  }
  if (isMonthSep($month)) {
    $spendings[8] += $result['amount'];
  }
  if (isMonthOct($month)) {
    $spendings[9] += $result['amount'];
  }
  if (isMonthNov($month)) {
    $spendings[10] += $result['amount'];
  }
  if (isMonthDec($month)) {
    $spendings[11] += $result['amount'];
  }
}

$total = 0;
for ($i = 0; $i < 11; $i++) {
  $totalSpendings = abs($spendings[$i] - $spendings[$i + 1]);
  echo ($i + 1) . '月と' . ($i + 2) . '月の差分:' . ' ' . $totalSpendings . "円";
  echo '<br>';
}

function isMonthJanu($month)
{
  if ($month == '01') return $month;
}
function isMonthFeb($month)
{
  if ($month == '02') return $month;
}
function isMonthMar($month)
{
  if ($month == '03') return $month;
}
function isMonthArp($month)
{
  if ($month == '04') return $month;
}
function isMonthMay($month)
{
  if ($month == '05') return $month;
}
function isMonthJune($month)
{
  if ($month == '06') return $month;
}
function isMonthJuly($month)
{
  if ($month == '07') return $month;
}
function isMonthAug($month)
{
  if ($month == '08') return $month;
}
function isMonthSep($month)
{
  if ($month == '09') return $month;
}
function isMonthOct($month)
{
  if ($month == '10') return $month;
}
function isMonthNov($month)
{
  if ($month == '11') return $month;
}
function isMonthDec($month)
{
  if ($month == '12') return $month;
}
