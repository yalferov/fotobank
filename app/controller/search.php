<?php
/**
 * Created by PhpStorm.
 * User: DjJustin
 * Date: 06.10.2015
 * Time: 1:21
 */
$q=$app->request->get('q');
$images = ORM::for_table('images')
    ->where_raw('name LIKE ? OR tags LIKE ?', array('%'.$q.'%','%'.$q.'%'))
    ->find_many();

$params['images']=$images;
$app->render('search.php',$params);
?>