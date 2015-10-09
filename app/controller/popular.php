<?php
/**
 * Created by PhpStorm.
 * User: DjJustin
 * Date: 06.10.2015
 * Time: 1:17
 */
$images = ORM::for_table('images')->find_many();
$params['images']=$images;
$app->render('popular.php',$params);
?>