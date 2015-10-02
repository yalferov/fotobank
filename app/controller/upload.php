<?php
/**
 * Created by PhpStorm.
 * User: DjJustin
 * Date: 28.09.2015
 * Time: 19:15
 */
require($_SERVER["DOCUMENT_ROOT"] . "/templates/header.php");

if ($_FILES['photo']) {
    $arFiles = reArrayFiles($_FILES['photo']);
    $params['arFiles']=$arFiles;
    $app->render('_filelist.php', $params);
} else {
    $app->render('_uploadform.php');
}

require($_SERVER["DOCUMENT_ROOT"] . "/templates/footer.php");
?>
