<?php

	include_once('functions.php');		

	
	$idArt = $_GET['id'] ?? '';
	$msg = '';
	
	if(checkID($idArt)){
		removeArticle($idArt);
		$msg = '<br>Статья успешно удалена';
	}
	else{
		$msg = '<br>Введите правильный номер статьи';
	}
	
	
	
	/*
		your code here
		get id from url
		check id
		call removeArticle
	*/
?>
<?=$msg?>
<hr>
<a href="index.php">Move to main page</a>