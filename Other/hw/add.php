<?php

	include_once('functions.php');

	$err = '';
	$isSend = false;
	$articles = getArticles();
	$lastID = (end($articles)['id']) + 1;
	
	if($_SERVER['REQUEST_METHOD'] === 'POST'){

		$name = trim($_POST['name']);
		$text = trim($_POST['text']);
		$date = date('Y-d-m H:i:s ');
		
		if(mb_strlen($name) < 4){
			$err = 'Название статьи не может быть короче 4 букв';
		}
		elseif(mb_strlen($text) < 20){
			$err = 'Содержание статьи не может быть короче 20 символов';
		}
		else{
		addArticle($name,$text);
		$err = 'Статья успешно отправлена, номер статьи №' . $lastID;
		$isSend = true;
		
	}
	}
	else{
		$name = '';
		$text = '';
	}
	
	
	/*
		
	your code here
		check request method
		read POST-data
		validate data
		call addArticle
	*/

?>
<div class=form>
<? if($isSend): ?>
<p><?=$err?></p>
<a href="add.php">Отправить еще одну?</a>
<? else: ?>
<form method="post">
	Название статьи<br>
	<input type="text" name="name" value="<?=$name?>"><br>
	Содержание статьи<br>
	<input type="text" name="text" value="<?=$text?>"><br>
	<button>Отправить</button>
</form>
<p><?=$err?></p>
<? endif; ?>


</div>
<hr>
<a href="index.php">Move to main page</a>
