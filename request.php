<?php 
header("Content-Type: text/html; charset=utf-8");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Request</title>
</head>
<body>
	<?php 
	echo ("<form action=execution.php?folder=$folder method=post>");
	if (isset($_POST['delete'])){
		/*if(isset($fl) && is_array($fl)) foreach ($fl as $i){*/
			if (isset($_POST['fl'])){
				$flname=$_POST['fl'];
				echo ("<b>Удалить выбранный файл/папку?</b><br>");
				echo "<br><b>Имя файла/папки - $flname</b><br><br>";
				echo ("<input type=submit value=Удалить name=delete>");
			} else{
				echo "<b>Выберите файл либо папку для удаления</b><br>";
			}
			/*echo ("<input type=hidden name=$name value=$name из папки $folder<br>");*/
	}
	
	if (isset($_POST['createnew'])){
		echo ("Введите имя папки:<br><input type=text size=30 name=newname>");
		echo ("<input type=submit value=Создать папку name=createnew>");
	}
	?>
	 <br><input type=submit value="Отмена" name=cancel>
</form>
</body>
</html>