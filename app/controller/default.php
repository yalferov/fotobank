<?php
/**
 * Created by PhpStorm.
 * User: DjJustin
 * Date: 28.09.2015
 * Time: 19:10
 */
$images = ORM::for_table('images')->order_by_desc('datetime')->limit(20)->find_many();
$params['images']=$images;
$app->render('main.php',$params);

?>

