<?php
/**
 * Created by PhpStorm.
 * User: DjJustin
 * Date: 28.09.2015
 * Time: 23:44
 */
?>
<form method="post" action="/upload/" enctype="multipart/form-data">
    <input type="file" multiple="multiple" name="photo[]" accept="image" required="required"
           title="���������� ������� ������� ���� ����"/>
    <input type="submit">
</form>
