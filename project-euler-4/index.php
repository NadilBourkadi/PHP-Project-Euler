<?php

$testNumber = 2452;

?>

<html>

<head></head>

<body>

<?php 

$palindromes = [];

for($i = 999; $i > 100; $i--){
	// counting down from highest three digit number (999) down to lowest (100)
	for($y = 999; $y > 100; $y--){

		$product = $y * $i;

		if(strrev($product) == $product){
			$palindromes[] = $product;
			
		}

	}

}
rsort($palindromes, SORT_NUMERIC);
echo "The highest palindrome product of 3 digit numbers is " . $palindromes[0];


?>

<?php  

?>

</body>

</html>