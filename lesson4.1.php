<?php
$host = 'localhost';
$db = 'test';
$user = 'root';
$pass = null;

$pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
$sql = "Select * from books";
$statement = $pdo->prepare($sql);
$statement->execute();

$results = [];
while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
	$results[]=$row;
}
?>

<!DOCTYPE html>
<html>
<head>
	<style>
    	table { 
       	 border-spacing: 0;
       	 border-collapse: collapse;
    	}
  	  	table td, table th {
    	  border: 1px solid #ccc;
  	      padding: 5px;
  	  	} 
 	   	table th {
      	  background: #eee;
   	 	}
    </style>
	<title></title>
</head>
<body>
<table>
	<tr>
		<th>Название</th>
		<th>Автор</th>
		<th>Год выпуска</th>
		<th>Жанр</th>
		<th>ISBN</th>
	</tr>
	<tr>
		<?php foreach ($results as $row) { ?>
		<tr>
			<td><?php echo htmlspecialchars($row['name']) ?></td>
			<td><?php echo htmlspecialchars($row['author']) ?></td>
			<td><?php echo $row['year'] ?></td>
			<td><?php echo htmlspecialchars($row['genre']) ?></td>
			<td><?php echo $row['isbn'] ?></td>
		</tr>
		<?php } ?>
	</tr>
</table>
</body>
</html>