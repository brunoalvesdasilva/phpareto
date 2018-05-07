<?PHP
require './src/index.php';

/** Composer **/
$upper = function($string) {
	return strtoupper($string);
};

$exclamation = function($speak) {
	return "{$speak}!!!";
};

$md5 = function($string) {
	return md5($string);
};

$composer = composer($upper, $md5, $exclamation);

echo $composer("Hello"); // eb61eead90e3b899c6bcbe27ac581660!!!

/** Curry **/
$sum = function($num1, $num2) { return $num1+$num2; };

echo curry($sum, 2, 2); // 4
echo curry($sum, 2)(2); // 4
echo curry($sum)(2)(2); // 4


/** Memoize **/
$contagem = 0;
$mult = function($x1, $x2) {
	global $contagem;
	$contagem++;
	return $x1*$x2;
};

$calc = memoize($mult);
echo "$contagem\n"; // 0
echo $calc(10, 10); // $contagem=1 & $calc = 100
echo $calc(10, 10); // $contagem=1 & $calc = 100
echo $calc(10, 10); // $contagem=1 & $calc = 100
echo "$contagem\n"; // 1

/** Pipe **/
$inc = function($x) { return ++$x; };
$dec = function($x) { return --$x; };

$pipe = pipe($inc, $inc, $inc, $inc, $dec);
echo $pipe(0); // 3