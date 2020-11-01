<?
include_once('functions.php');

$idArt = $_GET['id'] ?? '';
$articles = getArticles();
$msg = '';
$isSuccess = false;

if($idArt !== null){
    foreach($articles as $id => $art){
       if ($id == $idArt){
         $name = $art['title'];
         $text = $art['content'];
         
        
         if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $newTitle = $_POST['name'];
            $newContent = $_POST['text'];

            $articles[$id] = [
                'id' => $id,
                'title' => $newTitle,
                'content' => $newContent
            ];
            saveArticles($articles);
            $isSuccess = true;
            $msg = 'Статья успешно отредактирована';
}

     
    }
    }
}

?>
<div class="form">
   <? if($isSuccess): ?>
    <?=$msg?>
   <? else: ?>
    <form method="post">
        Название<br>
        <input type="text" name="name" value="<?=$name?>"><br>
        Текст<br>
        <input type="text" style="width:100%; height:200px;" name="text" value="<?=$text?>"><br>
        <button>Отправить</button></br>
        <?=$name?>;
        <?=$text?>;
    </form>
   <?endif;?>
</div>
<hr>
<a href="index.php">Вернуться на главную</a>