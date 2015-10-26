<?php


// BRUTE FORCE METHOD END
// BRUTE FORCE METHOD END
// BRUTE FORCE METHOD END

function bruteForce($highestInteger){
	// highestInteger is the highest integer in the range of numbers we want to check for divisibility

	for($y = $highestInteger; $y <= 1000000000; $y+= $highestInteger){
		// counts up to provided integer,

		for($i = $highestInteger; $i > 0; $i--){

			if($y % $i == 0 && $i == 1){
				echo $y . " is divisible by all numbers 1 - " . $highestInteger . "<br>";
				break;
			}
			else if($y % $i != 0){
				// echo $y . " is not divisible by " . $i . "<br>";
				break;
			}

		}

	}

}
// BRUTE FORCE METHOD END
// BRUTE FORCE METHOD END
// BRUTE FORCE METHOD END


// PRIME FACTORISATION METHOD
// PRIME FACTORISATION METHOD
// PRIME FACTORISATION METHOD

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

function primeFactors($number){
	// takes a number as input, returns an array 

	$primeFactors = [];

	for($i = 1; $i <= $number; $i++)
	{
		if(determinePrime($i) && $number % $i == 0){
			$primeFactors[] = $number / $i;
		}
	}

	for($i = 0; $i < count($primeFactors); $i++)
	{
		if(determinePrime($primeFactors[$i]) == false){
			$primeFactors[$i] = primeFactors($primeFactors[$i]);
		}
	}

	return $primeFactors;

}


// PRIME FACTORISATION METHOD
// PRIME FACTORISATION METHOD
// PRIME FACTORISATION METHOD 

?>

<html>
<head>

</head>

<body>

<?php 
// bruteForce(); 

var_dump(primeFactors(20));
?>

</body>
</html>
