<?php
/**
 * Created by PhpStorm.
 * User: DjJustin
 * Date: 28.09.2015
 * Time: 19:15
 */
require($_SERVER["DOCUMENT_ROOT"]."/templates/header.php");
var_dump($_FILES);
?>
<form method="post" action="/upload/" enctype="multipart/form-data">
    <input type="file" multiple="multiple" name="photo[]" accept="image" required="required" title="Необходимо выбрать минимум один файл" />
    <input type="submit">
</form>
<?php
require($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
?>