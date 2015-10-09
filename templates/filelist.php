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
<form method="post" action="/upload">
<? foreach($arFiles as $item): ?>
    <div class="row">
        <div class="col-xs-3">
        <div style="background-image: url('/fotoupload/<?=$item ?>')" class="thumb_img img-thumbnail" /></div>

            </div>
        <div class="col-xs-9">
            <div class="form-group">
                <label>Название</label>
                <input type="text" class="form-control" name="FILES[name][]" value="" required/>
            </div>
            <div class="form-group">
                <label>Теги через запятую</label>
                <input type="text" class="form-control" name="FILES[tags][]" value="" required />
            </div>
        </div>
    </div>
    <input type="hidden" name="FILES[filename][]" value="<?=$item ?>" />
<? endforeach ?>
    <input type="hidden" name="step" value="2" />
    <input type="submit" class="btn btn-default" value="Отправить" />
</form>


<? require($_SERVER["DOCUMENT_ROOT"] . "/templates/_footer.php"); ?>


