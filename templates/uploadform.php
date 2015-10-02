<?php
/**
 * Created by PhpStorm.
 * User: DjJustin
 * Date: 28.09.2015
 * Time: 23:44
 */
?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/templates/_header.php"); ?>
<? include_once 'blocks/search.php'; ?>
<form method="post" action="/upload/" enctype="multipart/form-data">
    <input type="file" multiple="multiple" name="photo[]" accept="image" required="required"
           title="Необходимо выбрать минимум один файл"/>
    <input type="submit">
</form>
<? require($_SERVER["DOCUMENT_ROOT"] . "/templates/_footer.php"); ?>