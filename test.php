<html>
    <head>
        <title>Exemple</title>
    </head>
    <body>
        <?php
          echo "C'est un script PHP!\n";
        ?>
    </body>
</html>

<p>Ceci sera ignoré par PHP et affiché au navigateur.</p>
<?php echo "Alors que ceci sera analysé par PHP.\n"; ?>
<p>Ceci sera aussi ignoré par PHP et affiché au navigateur.</p>

<?php
$a_bool = true;   // un booléen
$a_str  = "foo";  // une chaîne de caractères
$a_str2 = 'foo';  // une chaîne de caractères
$an_int = 12;     // un entier
$tab = array(1,2,3);
echo gettype($a_bool) ."\n"; // affiche :  boolean
echo gettype($a_str) ."\n";  // affiche :  string
echo gettype($an_int) ."\n";  // affiche :  integer
echo gettype($tab) ."\n";  // affiche :  array

var_dump($an_int);
var_dump($a_str2);
var_dump($tab);

echo "\n";
echo "-------------\n";
echo "\n";

?>

<?php
$a = 1234; // un nombre décimal
$a = -123; // un nombre négatif
$a = 0123; // un nombre octal (équivalent à 83 en décimal)
#$a = 0x1A; // un nombre héxadecimal (équivalent à 26 en décimal)
#$a = 0b11111111; // un nombre binaire (équivalent à 255 en decimal)

echo gettype($a) ."\n";  // affiche :  array
var_dump($a);
echo $a;

echo "\n";
echo "-------------\n";
echo "\n";


$a = 1.234;
$b = 1.2e3;
$c = 7E-10;
var_dump($a);
var_dump($b);
var_dump($c);
/* echo gettype($a) ."\n";  // affiche :  double
echo gettype($b) ."\n";  // affiche :  double
echo gettype($c) ."\n";  // affiche :  double */
echo $a;
echo $b;
echo $c;

echo "\n";
echo "-------------\n";
echo "\n";

$a = 7;
$b = 2;

var_dump(-$a);
var_dump($a + $b);
var_dump($a - $b);
var_dump($a * $b);
var_dump($a / $b);
var_dump($a % $b);
var_dump($a ** $b);
var_dump(intdiv($a, $b));

echo "\n";
echo "-------------\n";
echo "\n";

?>

<?php
$a = "Hello World";

echo 'J\'affiche : $a';
echo "\n";

echo "J'affiche : $a\n";


//Heredoc
echo <<<SYMBOL
J'affiche $a
	Et sur plusieurs lignes simplement avec indentation.

SYMBOL;

//Nowdoc
echo <<<'truc'
J'affiche $a
Et sur plusieurs lignes simplement avec indentation.
truc;
?>

<?php
//Avec un index numérique
$table = array(1,2,3,4); //Affiche tout le tableau grâce au var_dump
var_dump($table);
print_r($table);

$table2 = [1,2,3,4,5]; //Affiche tout le tableau grâce au var_dump
var_dump($table2);


// Avec des clés associatives
$array = array(
    "foo" => "bar",
    "bar" => "foo",
);
var_dump($array['foo']); //Affiche l'entrée associée à la clé 'foo'
print_r($array['foo']); //Affiche l'entrée associée à la clé 'foo'

// depuis PHP 5.4
$tableau = [
    "foo" => "bar",
    "bar" => "foo",
];
var_dump($tableau['bar']); //Affiche l'entrée associée à la clé 'bar'
$fifi = "prout";

echo $fiFi;

$a = 'bonjour';
$$a = 'monde';
echo "$a ${$a}\n";

define("FOo","Hello");
echo FOo . "World\n";

?>

<?php
$a=true;
$b=false;

var_dump($a && $b);
var_dump($a and $b);
var_dump($a or $b);
var_dump($a || $b);
var_dump($a xor $a);

//Les réponses des deux lignes ci-après sont différentes à cause de la priorité des opérateurs.
var_dump($a || $b and $b);
var_dump($a || $b && $b);
?>


