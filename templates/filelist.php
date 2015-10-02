<?php
/**
 * Created by PhpStorm.
 * User: DjJustin
 * Date: 28.09.2015
 * Time: 23:34
 */

?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/templates/_header.php"); ?>

<h1>Загрузка файлов</h1>
<? foreach($arFiles as $item): ?>
    <div><input type="text" value="<?=$item['name']; ?>"></div>
<? endforeach ?>


<? require($_SERVER["DOCUMENT_ROOT"] . "/templates/_footer.php"); ?>


