<?php
$list = glob(__DIR__ . '/*');
$pattern = '/^pdo.*?\.php$/';
foreach ($list as $fn) {
	if (preg_match($pattern, basename($fn))) {
		echo $fn . "\n";
	}
}

$getty = file_get_contents(__DIR__ . '/gettysburg.txt');
// count the number of occurances of the word "we"
$pattern = '/the/';
preg_match_all($pattern, $getty, $matches);
echo count($matches[0]);
echo "\n";

// counts discreet instances of "the"
$pattern = '/\bthe\b/';
preg_match_all($pattern, $getty, $matches);
echo count($matches[0]);
echo "\n";

// counts number of UPPERCASE letters
$pattern = '/[A-Z]/';
preg_match_all($pattern, $getty, $matches);
echo count($matches[0]);


