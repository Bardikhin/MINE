<?php
$continents = [
	'Africa' => ['Glossina'],
	'Eurasia' => ['Ursus thibetanus', 'Nyctereutes procyonoides'],
	'North America' => ['Nasua Storr', 'Gulo gulo'],
	'South America' => ['Dasypus novemcinctus', 'Tremarctos ornatus'],
	'Australia' => ['Macropus rufus'],
	'Antarctica' => ['Pygoscelis antarctica', 'Lagenorhynchus cruciger'],
];

foreach ($continents as $continent => $animals) {
	foreach ($animals as $animal) {
		$rows = explode(' ', $animal);
		if (count($rows) > 1){
			$newAnimals = array($animal);
		}
    }
}
?>