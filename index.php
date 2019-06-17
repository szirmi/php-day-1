<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title><?= "PHP Training" ?></title>
  <style>
    body, pre { font-family: "Comic Sans MS", cursive, sans-serif; }
  </style>
</head>
<body>

<?php

echo "Hola Jorge";
echo "<br>";

$a = 123;
$int = [123, -123, 0x1A, 0b10010, 0123];
$float = [123.3423, -0.2324, 2.344e-2, 3.433e10];
$string1 = 'apostrpohe string $a\n';
$string2 = "double\t \$ \\ quotes
string $a\n";
$string3 = <<<STR
line 1
line 2
line 3
$a
\n
STR;

$arr = array("apple", "banana");
$arr[] = "citrom";
array_push($arr, "datoya");
$arr['tiz'] = "plum";

$arr2 = array(
  "one" => "banana",
  2 => "apple",
  true => "citrom",
  "zwei" => "plum",
  1 => "xy",
  // "2D" => array(
  //   "one",
  //   "two",
  //   "three"
  // )
);

$arr3 = array("5", 10, 2, 1, "macska", "alma", "10", "1");

function f($p1, $p2 = "is") {
  global $arr3;

  function g() {
    global $arr3;
    return $arr3[0];
  }

  return "this $p2 a $p1 = " . g();
}

function g() {
  return "x";
}

// echo f('function', 'are');
# echo "komment";
/*
echo "multiline komment";
*/

$arrx = array(
  'func' => function() { return 'one'; }
);

$szia = 5;
$a = "g";
$b = $a();

class Foo {
  public $bar;
  private $bar2;
  protected $bar3;
  public static $stat = 5;
  function __construct() {
    echo "Constructed " . __CLASS__;
    $this->bar = 15;
  }
  public function getBar() {
    return $this->bar;
  }
  public static function getStats() {
    echo self::$stat;
  }
  public function getStaticStat() {
    echo self::$stat;
  }
  function __destruct() {
    echo "<br>destructed";
  }
}

class Inherited extends Foo {

}

/*
$foo = new Foo;
echo "<br>";
echo $foo->getBar();
echo "<br>";
Foo::getStats();
echo "<br>";
$foo->getStaticStat();
echo "<br>";

$inh = new Inherited;
echo "<br>";
echo $inh->getBar();
*/

class Increment {
  public $int = 1;
  public function inc() {
    ++$this->int;
  }
}

$a = new Increment;
$b = $a;

$a->inc();
$b->inc();

$c = &$a;

$a->inc();
$c->inc();

$b = "hello";
unset($c);
$c = "hola";

$x = 1;
$y = $x;
$z = &$x;

$y = 5;
$x = 15;

// var_dump($x, $y, $z);

function ref(&$a) {
  ++$a;
  echo $a;
}

// echo 5 + 5;
// echo 5 - 3;
// echo 6 * 2;
// echo 8 / 4;
// echo 9 % 2;

// $asi = 5;
// $asi += 5;
// $asi -= 2;
// $asi *= 4;
// $asi /= 2;
// $asi %= 3;

// if ($asi == "5") // equality
// if ($asi === 5) // identity
// if ($asi != "5")
// if ($asi <> "5")
// if ($asi !== "5")
// if ($asi < 5 && $asi <= 5)
// if ($asi > 5 && $asi >= 5)
// if (!false)
$asi = 1;

echo $asi;
echo "<br>";
echo $asi++;
echo "<br>";
echo $asi++;


switch($asi) {
  case 2:
    echo "two";
    break;
  case 3:
    echo "three";
    break;
  case 4:
    echo "four";
  default:
    echo "else";
}


for ($i = 1; $i < sizeof($arr); $i++) {
  echo $i . "<br>";
}

foreach($arr as $key => $value) {
  echo "array key[" . $key . "] = " . $value . "<br>";
}

$wi = 1;

while ($wi < 1) {
  $wi++;
}
echo $wi . "<br>";

do {
  $wi++;
}
while ($wi < 1);

echo $wi . "<br>";

echo $wi == 2 ? "two" : $wi == 3 ? "three" : "NOT";
echo $wi ?? "not";
echo "<br>";

function tern() {
  global $wi;
  return $wi === 2 ? "hi" : ":(";
}

echo tern();

echo "<br>";


include_once "include.php";
include_once "include.php";

echo "REACH INCLUDED";
echo $included;

?>

</body>
</html>