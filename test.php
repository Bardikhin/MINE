<?php

if(isset($_FILES['myfile']['name']) && !empty($_FILES['myfile']['name'])){
	if($_FILES['myfile']["error"] == UPLOAD_ERR_OK &&
		move_uploaded_file($_FILES['myfile']['tmp_name'], $_FILES['myfile']['name'])){
		echo "Файл загружен";
	} else{
		echo "Ошибка";
	}
}

?>