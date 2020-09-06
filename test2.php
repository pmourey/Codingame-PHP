<?php /* PHP 7 code below */?>
<?php
function findLargest(array $numbers) {
    return max($numbers);
}

echo findLargest(array(1, -28, 88, 200, 7));
echo("\n");
echo findLargest(array(-1, -28, -88, -200, -7));
echo("\n");
echo findLargest(array(1, -28, 88, 200, 7));

?>

<?php
function premiers_old($n) {
    $tab = array();
    for ($i=2; $i<$n; $i++)
        if ($n%$i == 0)
            array_push($tab, $i);
    return $tab;
}

foreach (premiers_old(14) as $prime)
    echo $prime . "\n";

?>

<?php

/**
* @returns bool True si le nombre est premier, False sinon
 *  https://openclassrooms.com/forum/sujet/nombre-premier-fonction
*/
function is_prime_old($n)
{
    if ($n % 2 == 0)
        return false; // Divisible par 2
    for ($i = 3; $i < $n / 2; $i += 2)
        if ($n % $i == 0)
            return false; // Divisible par $i
    return true;
}

function is_prime($p) {

    $r1 = $p%2;
    $r2 = $p%3;
    $r3 = $p%5;

    return ($p > 1) &&  (($r1 >= 1) && ($r2 >= 1) && ($r3 >= 1)) ||  in_array($p, [2,3,5]);
}

function premiers_old2($n) {
    $tab = array();
    for ($i=1; $i<$n; $i++)
        if (is_prime($i))
            array_push($tab, $i);
    return $tab;
}

// Test
echo is_prime(16)? "16 est un nombre premier" : "16 n'est pas un nombre premier\n";
echo is_prime(17)? "17 est un nombre premier" : "17 n'est pas un nombre premier\n";

print_r(premiers(100));

function premiers_new($n) {

    $r1 = $n%2;
    $r2 = $n%3;
    $r3 = $n%5;

    for ($i=1;$i<=$n;$i++)
        if ( ($p > 1) &&  (($r1 >= 1) && ($r2 >= 1) && ($r3 >= 1)) ||  in_array($p, [2,3,5]))
            array_push($tab, $i);
    return $tab;
}

function premiers($n)
{

    $arr = array(2);
    for ($i = 3; $i <= $n; $i = $i + 2) {
        $num = ceil(sqrt($i));
        $is_prime = true;
        for ($j = 3; $j <= $num; $j = $j + 2) {
            if ($i % $j == 0) {
                $is_prime = false;
                break;
            }
        }
        if ($is_prime) {
            $arr[] = $i;
        }
    }
    return $arr;
}

print_r(premiers(100));

