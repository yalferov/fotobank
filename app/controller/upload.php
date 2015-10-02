<?php
/**
 * Created by PhpStorm.
 * User: DjJustin
 * Date: 28.09.2015
 * Time: 19:15
 */


if ($_FILES['photo']) {
    $arFiles = reArrayFiles($_FILES['photo']);
    $params['arFiles']=$arFiles;
    $app->render('filelist.php', $params);
} else {
    $app->render('uploadform.php');
}

?>
