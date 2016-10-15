	function calc ()
	{
	var op = document.getElementById('op'), i;
	i = op.selectedIndex;
	clear ();
	if (i == 0)
		{
		var a = parseInt(document.getElementById('a').value),
		b = parseInt(document.getElementById('b').value);
		document.getElementById('res').innerHTML =  a + b;
		srav ();
		}
	else if (i == 1){
		var a = parseInt(document.getElementById('a').value),
		b = parseInt(document.getElementById('b').value);
		document.getElementById('res').innerHTML =  a - b;
		srav ();
		}
	else if (i == 2){
		var a = parseInt(document.getElementById('a').value),
		b = parseInt(document.getElementById('b').value);
		document.getElementById('res').innerHTML =  a * b;
		srav ();
		}
	else if (i == 3){
		var a = parseInt(document.getElementById('a').value),
		b = parseInt(document.getElementById('b').value);
		if (b == 0) {
			document.getElementById('err').innerHTML = ("Деление на 0");
			document.getElementById('res').innerHTML = ("");
			document.getElementById('check_res').innerHTML = ("");
		}
		else{
			document.getElementById('res').innerHTML =  a / b;
			srav ();
		}
		}
	else if (i == 4){
		var a = parseInt(document.getElementById('a').value),
		b = parseInt(document.getElementById('b').value);
		document.getElementById('res').innerHTML = Math.pow(a, b);
		srav ();
		}
	else if (i == 5){
		var a = parseInt(document.getElementById('a').value);
		if (a < 1) {
			document.getElementById('err').innerHTML = ("Число должно быть больше 0");
			document.getElementById('res').innerHTML = ("");
			document.getElementById('check_res').innerHTML = ("");
		}
		else{
			document.getElementById('res').innerHTML = Math.sqrt(a);
			srav ();
		}
		}
	}

/*	function errors() {
		try{
			if ((a == "") || (b == "")) throw "Поля должны быть заполнены";
			if ((isNaN(a) || isNaN(b))) throw "Поля должны быть заполнены числами";
		}
		catch(err){
			document.getElementById('res').innerHTML = err;
		}
	}*/

/*	function animation ()
	{
	var elem = document.getElementById("dental"); 
    var pos = 192;
    var id = setInterval(frame, 10);
    function frame() {
		if (pos == 500) {
			pos -= 308;
			pos++; 
            elem.style.left = pos + 'px';               
			if (pos = 192)
				{clearInterval(id);}
        } else {
            pos++; 
            elem.style.left = pos + 'px'; 
        }
    }
	}*/

	function srav (){
		var res = document.getElementById('res').value,
		check_res = document.getElementById('check_res').value;
		if(res == check_res){
			document.getElementById('checked').innerHTML = ("Числа совпадают");
		}
		else{
			document.getElementById('checked').innerHTML = ("Числа не совпадают, проверьте вычисления еще раз");
		}
	}

	function clear (){
		document.getElementById('checked').innerHTML = ("");
		document.getElementById('err').innerHTML = ("");
	}