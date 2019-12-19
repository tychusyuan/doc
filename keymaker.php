<?php
$sh = "0";
$sl = "1";
$strbase = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$arr = str_split($strbase);
function toBase($num, $b=62) {
  $base = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $r = $num  % $b ;
  $res = $base[$r];
  $q = floor($num/$b);
  while ($q) {
    $r = $q % $b;
    $q =floor($q/$b);
    $res = $base[$r].$res;
  }
  return $res;
}

function to10( $num, $b=62) {
  $base = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $limit = strlen($num);
  $res=strpos($base,$num[0]);
  for($i=1;$i<$limit;$i++) {
    $res = $b * $res + strpos($base,$num[$i]);
  }
  return $res;
}

$intdate = intval(date("YmdHis").$sh);
$nanotime = system('date +%s%N');
$intnanotime = intval($sl.str_pad($nanotime%1000000000,9,"0",STR_PAD_LEFT));
$result_key = toBase($intdate);
$result_key = $result_key.toBase($intnanotime);
$result_key = $result_key."_";
for($i=0 ; $i<17 ; $i++) {
  $idx=mt_rand(0,61);
  $result_key = $result_key.$arr[$idx];
}
echo "<p>".strlen($result_key)."<p/>";
echo "<p>".$result_key."<p/>";

$result_key = toBase($intdate);
$result_key = $result_key.toBase($intnanotime);
$result_key = $result_key."_";
for($i=0 ; $i<5 ; $i++) {
  $idx=mt_rand(0,61);
  $result_key = $result_key.$arr[$idx];
}
echo "<p>".strlen($result_key)."<p/>";
echo "<p>".$result_key."<p/>";

$result_key = toBase($intdate);
$result_key = $result_key."_";
$result_key = $result_key.toBase($intnanotime);
$idx=mt_rand(0,61);
$result_key = $result_key.$arr[$idx];
echo "<p>".strlen($result_key)."<p/>";
echo "<p>".$result_key."<p/>";
