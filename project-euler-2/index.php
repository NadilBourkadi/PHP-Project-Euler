<?php


// initialising the array with 1 and 2

function generateFibonacci($firstNumber, $secondNumber, $countUpTo){

	$fibonacciArray = array($firstNumber, $secondNumber);
	// initialises array with the numbers passed to the function

	while($fibonacciArray[count($fibonacciArray) - 1] + $fibonacciArray[count($fibonacciArray) - 2] < $countUpTo){
	// this loop executes while the sum of the next two elements is less than what we want to count up to

		$fibonacciArray[] = $fibonacciArray[count($fibonacciArray) - 1] + $fibonacciArray[count($fibonacciArray) - 2];
		// push the sum of the last two elements in the fibonacciArray to the fibonacciArray
	}

	return $fibonacciArray;

}

function findEvenValues($arrayToCycle){
// finds even values in the array 

	$newArray = [];
	// creating empty array to later be returned by function

	for($i = 0; $i < count($arrayToCycle); $i++){
		if($arrayToCycle[$i] % 2 == 0){
		// divide by 2, if no remainder, then the item is even and can be added to the new array
			$newArray[] = $arrayToCycle[$i];
		}
	}

	return($newArray);

}

function addArrayItems($arrayToCycle){
// takes an array as input and returns the sum of all items in the array
	$sumOfArrayItems = 0;
	for($i = 0; $i < count($arrayToCycle); $i++){
		$sumOfArrayItems += $arrayToCycle[$i];
	}

	return $sumOfArrayItems;
}

$fullFibonacciArray = generateFibonacci(1,2,4000000);
$onlyEvenItemsFibonacciArray = findEvenValues($fullFibonacciArray);

// var_dump(findEvenValues($fullFibonacciArray));



// echo $fibonacciArray[count($fibonacciArray) - 1] . " " . $fibonacciArray[count($fibonacciArray) - 2];

?>

<head>

</head>

<body>

<h1>The sum of all even fibonacci numbers under 4,000,000 is <?php echo addArrayItems($onlyEvenItemsFibonacciArray); ?>.</h1>

</body>