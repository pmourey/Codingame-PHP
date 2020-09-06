<?php
$a='42';
$b=42;
$c="Hello World!";
$d=array();
for ($i=0;$i<=5;$i++)
    $d[$i] = $i**2;

$d = array_map(function ($v) {return $v**2; }, range(0, 5));
?>

// exo 4

<?php
$naissance = "32/03/1979";
$arr = explode("/", $naissance);
$mois = $arr[0];
$jour = $arr[1];
$annee = $arr[2];

$res = checkdate ($mois, $jour, $annee);
echo ($res)? "date $naissance valid": "date $naissance invalid";

print_r($res);
?>

// Exo 5

<?php
$tableau = [1=>orange,2=>'fruit'];
//$res = ($tableau[$cle] != NULL) ? true: false;
$cle = 1;
$value = orang;
$res = array_key_exists($cle, $tableau);
$res2 = in_array($value, $tableau);
echo ($res)? "clef $cle exists": "clef $cle does not exist";
echo ($res2)? "value $value exists": "value $value does not exist";
?>
