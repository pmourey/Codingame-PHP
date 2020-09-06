<?php /* PHP 7 code below*/?>
<?php

function binarySearch(int $value, array $array, int $start, int $end){
    if($end<$start) return;
    sort($array);
    $middle = floor(($end + $start)/2);
    if($array[$middle]==$value) return true;
    elseif ($array[$middle] > $value) return binarySearch($value, $array, $start, $middle-1);
    else return binarySearch($value, $array, $middle+1, $end);
}

function exists(array $ints, $k) {
    return binarysearch($k, $ints, 0, sizeof($ints)-1);
}

$ints = array(-9, 14, 37, 102, 10000000);
echo exists($ints, -9) . "\n";  // 1
echo exists($ints, 14) . "\n";  // 1
echo exists($ints, 37) . "\n";  // 1
echo exists($ints, 102) . "\n"; // 1
echo exists($ints, 10000000);   // 0
?>

<?php /* PHP 7 code below​​​​​​‌​​​‌‌​‌‌‌‌​​‌​‌‌‌‌​​‌​​​ */?>
<?php

function is_twin($a, $b) {
    $var1 = str_split($a); sort($var1);
    $var2 = str_split($b); sort($var2);
    //print_r($var1);
    //print_r($var2);
    if ($var1 == $var2) return true;
}

?>

<?php
/**
 * @return integer the sum of integers whose index is between n1 and n2
 */
function calc($array, $n1, $n2) {
    $res = 0;
    for ($i=$n1;$i<=$n2;$i++)
        $res += $array[$i];
    return $res;
}
?>
