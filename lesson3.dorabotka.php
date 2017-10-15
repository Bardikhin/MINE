<?php 
$continents = [ 
	'Africa' => ['Glossina'], 
	'Eurasia' => ['Ursus thibetanus', 'Nyctereutes procyonoides'], 
	'North America' => ['Nasua Storr', 'Gulo gulo'], 
	'South America' => ['Dasypus novemcinctus', 'Tremarctos ornatus'], 
	'Australia' => ['Macropus rufus'], 
	'Antarctica' => ['Pygoscelis antarctica', 'Lagenorhynchus cruciger'], 
	]; 

$keys = []; 
$firstName = []; 
$lastName = []; 
$mixedAnimals = []; 

foreach ($continents as $continent => $animals) { 
	foreach ($animals as $animal) { 
		$rows = explode(' ', $animal); 
		if (count($rows) == 2) { 
			$firstName [] = array_shift($rows); 
			$lastName [] = $rows [0]; 
			$keys [] = key($continents); 
			next($continents); 
		} 
	} 
} 
shuffle($lastName); 
foreach ($firstName as $key => $value) { 
	for($key = 0; $key < count($firstName); $key++){ 
		$mixedAnimals [$key] = $firstName[$key].' '.$lastName[$key]; 
	} 
} 
echo '<pre>'; 
print_r($mixedAnimals); 
echo '</pre>'; 
?>