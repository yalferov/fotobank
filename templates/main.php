<?php
/**
 * Created by PhpStorm.
 * User: DjJustin
 * Date: 03.10.2015
 * Time: 0:01
 */
?>
<? require($_SERVER["DOCUMENT_ROOT"]."/templates/_header.php"); ?>
<? echo "<h1>Последние фото</h1>"; ?>
<? foreach($images as $image): ?>
    <a href="/foto/<?=$image['id'] ?>"><div style="background-image: url('/fotoupload/<?=$image['filename'] ?>')" class="thumb_img img-thumbnail" /></div></a>
<? endforeach ?>
<? require($_SERVER["DOCUMENT_ROOT"]."/templates/_footer.php"); ?>
