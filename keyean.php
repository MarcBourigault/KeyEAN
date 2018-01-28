// Commentaires //

// $a = array(3,0,3,7,9,2,0,1,6,2,0,0);

// $rangPair = array(0, 7, 2, 1, 2, 0);
// $rangImpair = array (3, 3, 9, 0, 6, 0);


// echo "sum(rangPair) = " . array_sum($rangPair) . "\n"; 

// echo "sum(rangImpair) = " . array_sum($rangImpair) . "\n";


// Commentaires // 


<?php 

function calculEAN($code)
{
	// Verifier si il y a bien le même nombre de chiffre dans la suite afin de pas faire planter la fonction
	$ean = (int)substr($code,0,1)+((int)substr($code,1,2)*3)+(int)substr($code,2,3)+(int)substr($code,3,4)*3+(int)substr($code,4,5)+(int)substr($code,5,6)*3+(int)substr($code,6,7)+(int)substr($code,7,8)*3+(int)substr($code,8,9)+(int)substr($code,9,10)*3+(int)substr($code,10,11)+(int)substr($code,11,12)*3;
	//var_dump($ean)
	$eanKey = fmod($ean,10);// fmod, c'est une fonction php qui permet de sortir le reste d'une division
	if ($eanKey == 0) {
		$ean = 0;
	} else {
		$ean = (10 - $eanKey);
	};

	echo $ean;
}

calculEAN(303792016200);

?>	
