<?php
$continents = [
	'Africa' => ['Glossina'],
	'Eurasia' => ['Ursus thibetanus', 'Nyctereutes procyonoides'],
	'North America' => ['Nasua Storr', 'Gulo gulo'],
	'South America' => ['Dasypus novemcinctus', 'Tremarctos ornatus'],
	'Australia' => ['Macropus rufus'],
	'Antarctica' => ['Pygoscelis antarctica', 'Lagenorhynchus cruciger'],
];

$newAnimals = [];
foreach ($continents as $continent => $animals) {
	foreach ($animals as $animal) {
		$rows = explode(' ', $animal);
		if (count($rows) == 2) {
			$newAnimals[] = $rows;
		}
	}	
}

$firstName = [];
$lastName = [];
$mixedAnimals = [];

foreach ($newAnimals as $animal) {
	$firstName [] = array_shift($animal);
	$lastName [] = $animal [0];
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