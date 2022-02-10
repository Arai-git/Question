<?php

//7月の収入の合計
$db_username = 'php';
$db_password = 'user1';
$pdo = new pdo("mysql:host=mysql; dbname=tq_quest; charset=utf8", $db_username, $db_password);
$sql = ("select * from spendings");
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchall();

$totalspendings = 0;
$onethousand = 1000;
foreach ($results as $result) {

  $date = explode("-", $result['accrual_date']);
  $month = $date[1];
  $day = $date[2];

  if ($month == '07') {
    $totalspendings += $result['amount'];
    if (strpos($day, '2') !== false) $totalspendings = $totalspendings - $onethousand;
  }
}
echo '7月の収入の合計:' . ' ' . $totalspendings;
echo '<br>';





//8月の収入の合計
$db_username = 'php';
$db_password = 'user1';
$pdo = new pdo("mysql:host=mysql; dbname=tq_quest; charset=utf8", $db_username, $db_password);
$sql = ("select * from spendings");
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchall();

$totalspendings = 0;
$fivehundred = 500;
foreach ($results as $result) {

  $date = explode("-", $result['accrual_date']);
  $month = $date[1];
  $day = $date[2];
  $digit = str_split($day);
  $onedigit = $digit[1];

  if ($month == '08') {
    $totalspendings += $result['amount'];
    if (strpos($onedigit, '0') !== false) $totalspendings = $totalspendings - $fivehundred;
  }
}
echo '8月の収入の合計:' . ' ' . $totalspendings;
echo '<br>';





//9月の収入の合計
$db_username = 'php';
$db_password = 'user1';
$pdo = new pdo("mysql:host=mysql; dbname=tq_quest; charset=utf8", $db_username, $db_password);
$sql = ("select * from spendings");
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchall();

$totalspendings = 0;
$twothousand = 2000;
foreach ($results as $result) {

  $date = explode("-", $result['accrual_date']);
  $month = $date[1];
  $day = $date[2];

  if ($month == '09') {
    $totalspendings += $result['amount'];
    if (strpos($day, '1') !== false) $totalspendings = $totalspendings - $twothousand;
  }
}
echo '9月の収入の合計:' . ' ' . $totalspendings;
echo '<br>';
echo '<br>';





echo '月順にsortして月ごとの支出の合計を一覧表示。ただし、支出日に3が含まれているときだけ1500円引いてください。';
echo '<br>';
$db_username = 'php';
$db_password = 'user1';
$pdo = new pdo("mysql:host=mysql; dbname=tq_quest; charset=utf8", $db_username, $db_password);
$sql = ("select * from spendings");
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchall();

$spendings = [];
$onethousandfivehundred = 1500;
foreach ($results as $result) {

  $date = explode("-", $result['accrual_date']);
  $month = $date[1];
  $day = $date[2];

  if (isMonthJanu($month)) {
    $spendings[0] += $result['amount'];
    if (isDayThree($day)) $spendings[0] = $spendings[0] - $onethousandfivehundred;
  }
  if (isMonthFeb($month)) {
    $spendings[1] += $result['amount'];
    if (isDayThree($day)) $spendings[1] = $spendings[1] - $onethousandfivehundred;
  }
  if (isMonthMar($month)) {
    $spendings[2] += $result['amount'];
    if (isDayThree($day)) $spendings[2] = $spendings[2] - $onethousandfivehundred;
  }
  if (isMonthArp($month)) {
    $spendings[3] += $result['amount'];
    if (isDayThree($day)) $spendings[3] = $spendings[3] - $onethousandfivehundred;
  }
  if (isMonthMay($month)) {
    $spendings[4] += $result['amount'];
    if (isDayThree($day)) $spendings[4] = $spendings[4] - $onethousandfivehundred;
  }
  if (isMonthJune($month)) {
    $spendings[5] += $result['amount'];
    if (isDayThree($day)) $spendings[5] = $spendings[5] - $onethousandfivehundred;
  }
  if (isMonthJuly($month)) {
    $spendings[6] += $result['amount'];
    if (isDayThree($day)) $spendings[6] = $spendings[6] - $onethousandfivehundred;
  }
  if (isMonthAug($month)) {
    $spendings[7] += $result['amount'];
    if (isDayThree($day)) $spendings[7] = $spendings[7] - $onethousandfivehundred;
  }
  if (isMonthSep($month)) {
    $spendings[8] += $result['amount'];
    if (isDayThree($day)) $spendings[8] = $spendings[8] - $onethousandfivehundred;
  }
  if (isMonthOct($month)) {
    $spendings[9] += $result['amount'];
    if (isDayThree($day)) $spendings[9] = $spendings[9] - $onethousandfivehundred;
  }
  if (isMonthNov($month)) {
    $spendings[10] += $result['amount'];
    if (isDayThree($day)) $spendings[10] = $spendings[10] - $onethousandfivehundred;
  }
  if (isMonthDec($month)) {
    $spendings[11] += $result['amount'];
    if (isDayThree($day)) $spendings[11] = $spendings[11] - $onethousandfivehundred;
  }
}

for ($i = 0; $i < 12; $i++) {
  echo ($i + 1) . '月の支出の合計' . $spendings[$i];
  echo '<br>';
}
echo '<br>';





echo '支出の高い順にsortして月ごとの支出の合計を一覧表示。ただし、支出日に5が含まれているときだけ100円引いてください。';
echo '<br>';
$db_username = 'php';
$db_password = 'user1';
$pdo = new pdo("mysql:host=mysql; dbname=tq_quest; charset=utf8", $db_username, $db_password);
$sql = ("select * from spendings");
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchall();


$spendings = [];
$onehundred = 100;
foreach ($results as $result) {

  $date = explode("-", $result['accrual_date']);
  $month = $date[1];
  $day = $date[2];

  if (isMonthJanu($month)) {
    $spendings[0] += $result['amount'];
    if (isDayFive($day)) $spendings[0] = $spendings[0] - $onehundred;
  }
  if (isMonthFeb($month)) {
    $spendings[1] += $result['amount'];
    if (isDayFive($day)) $spendings[1] = $spendings[1] - $onehundred;
  }
  if (isMonthMar($month)) {
    $spendings[2] += $result['amount'];
    if (isDayFive($day)) $spendings[2] = $spendings[2] - $onehundred;
  }
  if (isMonthArp($month)) {
    $spendings[3] += $result['amount'];
    if (isDayFive($day)) $spendings[3] = $spendings[3] - $onehundred;
  }
  if (isMonthMay($month)) {
    $spendings[4] += $result['amount'];
    if (isDayFive($day)) $spendings[4] = $spendings[4] - $onehundred;
  }
  if (isMonthJune($month)) {
    $spendings[5] += $result['amount'];
    if (isDayFive($day)) $spendings[5] = $spendings[5] - $onehundred;
  }
  if (isMonthJuly($month)) {
    $spendings[6] += $result['amount'];
    if (isDayFive($day)) $spendings[6] = $spendings[6] - $onehundred;
  }
  if (isMonthAug($month)) {
    $spendings[7] += $result['amount'];
    if (isDayFive($day)) $spendings[7] = $spendings[7] - $onehundred;
  }
  if (isMonthSep($month)) {
    $spendings[8] += $result['amount'];
    if (isDayFive($day)) $spendings[8] = $spendings[8] - $onehundred;
  }
  if (isMonthOct($month)) {
    $spendings[9] += $result['amount'];
    if (isDayFive($day)) $spendings[9] = $spendings[9] - $onehundred;
  }
  if (isMonthNov($month)) {
    $spendings[10] += $result['amount'];
    if (isDayFive($day)) $spendings[10] = $spendings[10] - $onehundred;
  }
  if (isMonthDec($month)) {
    $spendings[11] += $result['amount'];
    if (isDayFive($day)) $spendings[11] = $spendings[11] - $onehundred;
  }
}

for ($i = 0; $i < 12; $i++) {
  arsort($spendings);
  $monthSpendings = array_keys($spendings);
}
rsort($spendings);
for ($i = 0; $i < 12; $i++) {
  echo ($monthSpendings[$i] + 1) . '月の支出の合計' . $spendings[$i];
  echo '<br>';
}
echo '<br>';







echo '支出の低い順にsortして月ごとの支出の合計を一覧表示。ただし、支出日に4が含まれているときだけ3000円引いてください。';
echo '<br>';
$db_username = 'php';
$db_password = 'user1';
$pdo = new pdo("mysql:host=mysql; dbname=tq_quest; charset=utf8", $db_username, $db_password);
$sql = ("select * from spendings");
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchall();

$spendings = [];
$threethousandreach = 3000;
foreach ($results as $result) {

  $date = explode("-", $result['accrual_date']);
  $month = $date[1];
  $day = $date[2];

  if (isMonthJanu($month)) {
    $spendings[0] += $result['amount'];
    if (isDayFour($day)) $spendings[0] = $spendings[0] - $threethousand;
  }
  if (isMonthFeb($month)) {
    $spendings[1] += $result['amount'];
    if (isDayFour($day)) $spendings[1] = $spendings[1] - $threethousand;
  }
  if (isMonthMar($month)) {
    $spendings[2] += $result['amount'];
    if (isDayFour($day)) $spendings[2] = $spendings[2] - $threethousand;
  }
  if (isMonthArp($month)) {
    $spendings[3] += $result['amount'];
    if (isDayFour($day)) $spendings[3] = $spendings[3] - $threethousand;
  }
  if (isMonthMay($month)) {
    $spendings[4] += $result['amount'];
    if (isDayFour($day)) $spendings[4] = $spendings[4] - $threethousand;
  }
  if (isMonthJune($month)) {
    $spendings[5] += $result['amount'];
    if (isDayFour($day)) $spendings[5] = $spendings[5] - $threethousand;
  }
  if (isMonthJuly($month)) {
    $spendings[6] += $result['amount'];
    if (isDayFour($day)) $spendings[6] = $spendings[6] - $threethousand;
  }
  if (isMonthAug($month)) {
    $spendings[7] += $result['amount'];
    if (isDayFour($day)) $spendings[7] = $spendings[7] - $threethousand;
  }
  if (isMonthSep($month)) {
    $spendings[8] += $result['amount'];
    if (isDayFour($day)) $spendings[8] = $spendings[8] - $threethousand;
  }
  if (isMonthOct($month)) {
    $spendings[9] += $result['amount'];
    if (isDayFour($day)) $spendings[9] = $spendings[9] - $threethousand;
  }
  if (isMonthNov($month)) {
    $spendings[10] += $result['amount'];
    if (isDayFour($day)) $spendings[10] = $spendings[10] - $threethousand;
  }
  if (isMonthDec($month)) {
    $spendings[11] += $result['amount'];
    if (isDayFour($day)) $spendings[11] = $spendings[11] - $threethousand;
  }
}

for ($i = 0; $i < 12; $i++) {
  asort($spendings);
  $monthSpendings = array_keys($spendings);
}
sort($spendings);
for ($i = 0; $i < 12; $i++) {
  echo ($monthSpendings[$i] + 1) . '月の支出の合計' . $spendings[$i];
  echo '<br>';
}





function isDayThree($day)
{
  if (strpos($day, '3') !== false) return true;
}

function isDayFive($day)
{
  if (strpos($day, '5') !== false) return true;
}

function isDayFour($day)
{
  if (strpos($day, '4') !== false) return true;
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
