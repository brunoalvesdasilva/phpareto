<?PHP
require './src/index.php';

/** Composer **/
$upper = function($string) {
	return strtoupper($string);
};

$exclamair = function($speak) {
	return "{$speak}!!!";
};

$md5 = function($string) {
	return md5($string);
};

$composer = composer($upper, $md5, $exclamair);

echo $composer("Hello"); // eb61eead90e3b899c6bcbe27ac581660!!!

/** Curry **/
$sum = function($num1, $num2) { return $num1+$num2; };

echo curry($sum, 2, 2); // 4
echo curry($sum, 2)(2); // 4
echo curry($sum)(2)(2); // 4