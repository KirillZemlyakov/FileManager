<?php 
header("Content-Type: text/html; charset=utf-8");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>File Manager</title>
	<link rel="stylesheet" type="text/css" href="filemanager.css">
</head>
<body>
	<?php 
	$rootFolder ="rootfolder";
	if ((strpos($fold,$rootFolder)!=0)|| (strpos($fold,"..")!=False)||($fold=="")){
		$dirct=$rootFolder;
	} else {
		$dirct=$fold;
	}
	echo ("<form action=request.php?folder=$dirct method=post>");
	if ($dirct!=$rootFolder){
		$back=substr ($dirct, 0, strrpos($dirct, "/"));
		echo ("<a href=filemanager.php?fold=$back>Корневая папка</a><br>");
	}

	$hdl=opendir($dirct);
	while ($file = readdir($hdl))
	    {
	    if (($file!="..")&&($file!="."))
	        {
	        $a[]=$file;
	        }
	     }
	closedir($hdl);
	if (sizeof($a)>0){
		asort($a);
		foreach ($a as $k){
			$full=$dirct."/".$k;
			$size = format_size(filesize($full)); /*Форматированный размер для каждого файла*/
			$lasttime = date("F d Y H:i:s.", filemtime($full)); /*Время последнего изменения файла*/
			echo ("<input name=fl value=$k type=radio>");
			if (is_dir($full)==True){
				echo ("<a href=filemanager.php?fold=$full><b>Папка - $k - $size - $lasttime</b></a>");
				$urlz = $_SERVER['REQUEST_URI'];
				$nextfolder = "filemanager.php?fold=$full";
				if(preg_match($urlz, $nextfolder)) {
					???????
				}
			}else{
				echo ("<a href=$full>Файл - $k - $size - $lasttime</a>");
			}
			echo ("<br>");
		}
	}

	/*Превращение b в B, KB, MB, GB, TB*/
	function format_size($size){
		$metrics[0] = 'B' ;
		$metrics[1] = 'KB' ;
		$metrics[2] = 'МB' ;
		$metrics[3] = 'GB' ;
		$metrics[4] = 'TB' ;
		$metric = 0; 
		while(floor($size / 1024) > 0){
			$metric ++;
			$size /= 1024;
		} 
		$result = round($size, 1) . " " .
		(isset($metrics[ $metric]) ? $metrics[ $metric] : '???' );
		return $result;
	}
	?>
	<br><input type=submit value="Удалить" name=delete>
	<input type=submit value="Создать папку" name=createnew>
	</form>
</body>
</html>