<!DOCTYPE HTML>
<html>
	<head>
	  <meta charset="utf-8">
	  <title>PHP Upload files</title>
	</head>
	<body>
		<h1>PHP Upload files</h1>
<?php

	if (isset($_POST['upload'])){

/////////////////////////////////////////////////////////////////////////////////////
		
		if (isset($_FILES) && $_FILES['file']['error'][0] == 0){ // Проверяем, загрузил ли пользователь файл
			$destiation_dir = '../img/';  // Директория для размещения файла
			$filename = time() . '.jpg';
			
			move_uploaded_file($_FILES['file']['tmp_name'][0], $destiation_dir . $filename); // Перемещаем файл в желаемую директорию			
			echo '<p class=\"error\">Файл загружен!</p>'; // Оповещаем пользователя об успешной загрузке файла
		} else {
		echo '<p class=\"error\">Файл не загружен!</p>'; // Оповещаем пользователя о том, что файл не был загружен
	}
}
?>
<form method="post" action="" enctype="multipart/form-data">	
	Файл 1: <input name="file[]" type="file" /><br />
	Файл 2: <input name="file[]" type="file" /><br />
	Файл 3: <input name="file[]" type="file" /><br />
	<input type="submit" name="upload" value="Upload">
</form>
</body>
</html>
