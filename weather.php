<?php
$city = 'Moscow';
$lang = 'ru';
$mode = 'json';
$apikey = 'f6d1e9016e52800648952c5a30a4c89a';
$name = 'weather.json';
$url = "http://api.openweathermap.org/data/2.5/weather?q={$city}&lang={$lang}&mode={$mode}&units=metric&appid={$apikey}";

if (!empty($name)){
	$info = file_get_contents($url);
	file_put_contents($name, $info);
	$data = json_decode($info, true);
	echo 'Город: ' . $data['name'] . '<br/>';
	echo 'Погода: ' . $data['weather'][0]['description'] . '<br/>';
	echo 'Температура: ' . $data['main']['temp'] . ' C' . '<br/>';
	echo 'Давление: ' . $data['main']['pressure'] . ' мм. рт. ст.' . '<br/>';
	echo 'Скорость ветра: ' . $data['wind']['speed'] . ' м/с' . '<br/>';
	echo 'Облачность: ' . $data['clouds']['all'] . '%';
} else {
	$recordTime = filemtime($name);
	if (time() < $recordTime + 3600){
		$record = file_get_contents($name);
		$read = json_decode($record, true);
		echo 'Город: ' . $read['name'] . '<br/>';
		echo 'Погода: ' . $read['weather'][0]['description'] . '<br/>';
		echo 'Температура: ' . $read['main']['temp'] . ' C' . '<br/>';
		echo 'Давление: ' . $read['main']['pressure'] . ' мм. рт. ст.' . '<br/>';
		echo 'Скорость ветра: ' . $read['wind']['speed'] . ' м/с' . '<br/>';
		echo 'Облачность: ' . $read['clouds']['all'] . '%';
	} else {
		$info = file_get_contents($url);
		file_put_contents($name, $info);
		$data = json_decode($info, true);
		echo 'Город: ' . $data['name'] . '<br/>';
		echo 'Погода: ' . $data['weather'][0]['description'] . '<br/>';
		echo 'Температура: ' . $data['main']['temp'] . ' C' . '<br/>';
		echo 'Давление: ' . $data['main']['pressure'] . ' мм. рт. ст.' . '<br/>';
		echo 'Скорость ветра: ' . $data['wind']['speed'] . ' м/с' . '<br/>';
		echo 'Облачность: ' . $data['clouds']['all'] . '%';
	}
}
?>