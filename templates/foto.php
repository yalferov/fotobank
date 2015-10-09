<?php
/**
 * Created by PhpStorm.
 * User: DjJustin
 * Date: 06.10.2015
 * Time: 0:41
 */
?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/templates/_header.php"); ?>


<div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
        <h1>Фото <?=$image['name'] ?></h1>
        <img src="/fotoupload/<?=$image['filename'] ?>" class="img-responsive"><br>
        Теги: <?=$tagsstring ?><br>
        Дата: <?=$image['datetime'] ?>
    </div>
</div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/templates/_footer.php"); ?>

