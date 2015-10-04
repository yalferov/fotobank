<?php
/**
 * Created by PhpStorm.
 * User: DjJustin
 * Date: 28.09.2015
 * Time: 23:44
 */
?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/templates/_header.php"); ?>
<h1>Загрузка фото</h1>
<form method="post" action="/upload" enctype="multipart/form-data">
    <div class="form-group">
        <label>Выберите один или несколько файлов</label>
        <input type="file" class="form-control"  multiple="multiple" name="photo[]" accept="image" required="required" title="Необходимо выбрать минимум один файл"/>
    </div>
    <input type="hidden" name="step" value="1">
    <input type="submit">
</form>
<? require($_SERVER["DOCUMENT_ROOT"] . "/templates/_footer.php"); ?>