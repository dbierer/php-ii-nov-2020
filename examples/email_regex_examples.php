<?php
$input = [
	'jono$nojnv@aol.com',
	'doug@unlikelysource.com',
	'fred.flintstone@bedrock.com',
	'fred-flintstone@bedrock.com',
	'fred',
	'xxx@yyy',
	'xxx@yyy.UUU',
	'???@^^&*(^(*&^*(',
	'Jorge.Terrero@Lennar.com',
	'test@zend.com',
];
$pattern = '/^(\w|\.|\-)+@(\S+)$/';
echo "Using preg_match from Ketul\n";
foreach ($input as $email) {
	echo $email . ' : '; 
	echo (preg_match($pattern,$email)) ? 'MATCH' : 'NO MATCH';
	echo "<br>\n";
}

echo "Using filter_var\n";
foreach ($input as $email) {
	echo $email . ' : '; 
	echo (filter_var($email, FILTER_VALIDATE_EMAIL)) ? 'MATCH' : 'NO MATCH';
	echo "<br>\n";
}

echo "Using preg_match from Jorge\n";
$regex =  '/^\w{1}[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/i';
foreach ($input as $email) {
	echo $email . ' : '; 
	echo (preg_match($regex,$email)) ? 'MATCH' : 'NO MATCH';
	echo "<br>\n";
}
