
<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
<form enctype="multipart/form-data" method="POST" action=" ">
	
	
	<input name="Add"type="submit">

</form>

</body>
</html>
 -->
<html>
 
<head>
  <title></title>
  <meta charset="utf-8">
</head>
 
<body>
<form name="form1" action="" enctype="multipart/form-data" method="post">
<input type="file" name="path" name="photo" title="Выберите файл"/> </br>

<input name="name" placeholder="Имя" type="text"><br>
	<input name="secondName" placeholder="Фамилия" type="text"><br>
	<input name="patronymic" placeholder="Отчество" type="text"><br>
	<input name="BirthDate" placeholder="Дата рождения" type="date"><br>
	<input name="address" placeholder="адресс" type="text"><br>
	<input name="Language" placeholder="Владение языком" type="text"><br>
	<input name="Education" placeholder="Образование" type="text"><br>
	<input name="Expirience" placeholder="Опыт работы" type="text"><br>
	<input name="Proffesion" placeholder="Профессия" type="text"><br>
	
<input type="submit" name="Add" /> </br>
 
 
</body>
 
</html>
 
<?php
  $file = "upload/".$_FILES['path']['name'];
  move_uploaded_file($_FILES['path']['tmp_name'], $file);
  if(isset($_FILES['path']['name']))
  {
echo "Загруженный файл: ".$_FILES['path']['name']."</br>";
echo "Размер: ".$_FILES['path']['size']."байт";
}
 
?>