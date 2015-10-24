<?php 


function determinePrime($inputNumber){
// returns true if number passed is prime, false if not


	if($inputNumber < 2){
	// eliminates 1, 0, and negatives
		return false; }
	if(($inputNumber % 2 == 0) && ($inputNumber > 2)){
		// if it's divisible by 2, but is not 2, it's not prime - eliminates a lot quickly without having to iterate
		return false;}
	for($i = 3; $i <= sqrt($inputNumber); $i += 2){
		// even numbers are eliminated, including 2, so we start counting up from 3
		// counts up in increments of 2
		// if $inputNumber is not a prime (and not 1) then it's highest prime factor is less than sqrt($inputNumber)
		// so if we haven't found a divisor by the time we get to $i <= sqrt($inputNumber) then we can
		// assume that $inputNumber is in fact prime

		if($inputNumber % $i == 0){
			return false;
		}
		
	}

	return true;

}

function determinePrimeFactors($inputNumber){
// outputs an array of all the prime factors of the input

	$factorsArray = [];

	for($i = 3; $i <= sqrt($inputNumber); $i+= 2){

		if((determinePrime($i) == true) && (fmod($inputNumber, $i) == 0)) {
			if (! in_array($i, $factorsArray))
			{
				array_push($factorsArray, $i);
			}
		}
		
	}

	return $factorsArray;
}

?>

<html>

<head>

</head>

<body>

<p>The prime factors of 13195 are 5, 7, 13 and 29.<p>

<p>What is the largest prime factor of the number 600851475143 ?</p>

<p>The largest prime factor of 600851475143 is <?php 

$test = determinePrimeFactors(600851475143);
rsort($test, SORT_NUMERIC);
// sorts the array by highest -> lowest (reverse sort)

echo $test[0];

 ?></p>



</body>