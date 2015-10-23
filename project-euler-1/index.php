<head>
</head>

<?php

$sumOfMultiples = 0;

for ($x = 0; $x < 1000; $x++){

	if($x % 3 == 0 or $x % 5 == 0){

		$sumOfMultiples += $x;
		// echo $x . "<br>";
		// decomment to see the full list of numbers divisible by 3 or 5

	}

}


?>



<body>
<h3>The sum of all multiples of 3 and 5 under 1000 is <?php echo $sumOfMultiples; ?>.</h3>
</body>