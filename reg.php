<?
	$name = $_POST['name'];
	$password = $_POST['password'];
	$f = file('file.txt');
	for($i=0; $i<count($f); $i++)
	{
		$line = $f[$i];
		echo $line.'<br>';
	}
	/*$file = fopen("file.txt", "at");
	fwrite($file, "$name\n$password \n");
	fclose($file);
	$k = 0;
	$fread = fopen('file.txt', 'r');
	while(!feof($fread)) {
		$str = fread($fread, 1024);
		$k++;
		echo $str.'<br>', $k;
	}
	fclose($fread);*/
	/*Запись логина и пароля в текстовый файл из инпута*/
	/*
	Алгоритм:
	Существует файл с логином и паролем
	1. Проверка текстовых полей
		1.1. Если такой пользователь есть, вывести ошибку
		1.2. Иначе записать нового пользователя в файл
	*/
?>
