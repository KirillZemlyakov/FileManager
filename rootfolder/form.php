<?php require 'header.php'; ?>
<div class="mainblock2">
	<div class="titlemain">
		<p>Calculator:</p>
	</div>
	<div class="content1">
		<span><?php 
		$a = $_POST['a'];
		$b = $_POST['b'];
		if (!empty($a) || !empty($b)){ /*Пустое ли поле?*/
			if(preg_match("/^[0-9]+$/",$a) && preg_match("/^[0-9]+$/",$b)){ /*Проверка на ввод числа*/
				if(check_length($a, 1, 5) && check_length($b, 1, 5)){ /*Проверка на размер числа*/
					echo "Данные введены верно";
				}
				else{
					echo "Введите число, которое состоит из 1-5 цифр";
				}
			}
			else{
				echo "Недопустимый символ, допускается вводить только числа";
			}
		}
		else{
			echo "Заполните пустые поля";
		}

		/*Вывод глобальных переменных POST и GET*/
		foreach ($_POST as $value) {
			echo "<br>$value";
		}
		/*	foreach ($_GET as $value) {
			echo $value;
		}*/

		/*Проверка длинны введынных данных*/
		function check_length($value, $min, $max) {
		 	$result = (mb_strlen($value) >= $min && mb_strlen($value) <= $max);
		    return $result;
		}
		?></span>
		<form  id="calculator" method="post">
		<input type="text" placeholder="Введите первое число (до 5 знаков)" name="a" id="a" autocomplete="off">
		<input type="text" placeholder="Введите второе число (до 5 знаков)" name="b" id="b" autocomplete="off">
		 <select id="op">
			<option value="sum">Сложение</option>
			<option value="sub">Вычетание</option>
			<option value="mul">Умножение</option>
			<option value="div">Деление</option>
			<option value="pow">Возведение в степень</option>
			<option value="sqrt">Корень от первого числа</option>
		</select> 
		<input type="submit" value="Проверка ввода">
		<button type="button" onclick="calc()">GO</button>
		<textarea id="res" cols="11" rows="1"></textarea>
		<textarea id="check_res" cols="11" rows="1" placeholder="Введите результат"></textarea>
		<span id="err"></span>
		<span id="checked"></span>

	</form> 

	</div>
<?php require 'footer.php'; ?>