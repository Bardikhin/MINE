<?php
	$jsonString = file_get_contents('phoneBook.json');
	$data = json_decode($jsonString, true);
?>

<html>
<head>
	<title>Телефонная книга</title>
</head>
<body>

	<table>
		<tr>
			<td>Имя</td>
			<td>Фамилия</td>
			<td>Адрес</td>
			<td>Номер телефона</td>
		</tr>
		<?php foreach ($data as $datum) {?>
			<tr>
				<td><?php echo $datum['firstName']?></td>
				<td><?php echo $datum['lastName']?></td>
				<td><?php echo $datum['address']?></td>
				<td><?php echo $datum['phoneNumber']?></td>
			</tr>
		<?php } ?>
	</table>

</body>
</html>