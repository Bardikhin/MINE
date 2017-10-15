<form method="post" action="" enctype="multipart/form-data">
	<input type="file" name="uploadFile"><br/>
	<input  type="hidden" name="MAX_FILE_SIZE" value="900000000"  /><br/>
	<input type="submit" value="Отправить">
</form>
<?php

echo '<pre>';
print_r($_FILES);
echo '</pre>';


if(isset($_FILES["uploadFile"]["name"]) && !empty($_FILES["uploadFile"]["name"])){
	if($_FILES["uploadFile"]["error"] == UPLOAD_ERR_OK && move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $_FILES["uploadFile"]["name"])){
		echo "Файл загружен";
	} else{
		echo "Ошибка";
	}
}
?>