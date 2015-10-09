<?php
/**
 * Created by PhpStorm.
 * User: DjJustin
 * Date: 06.10.2015
 * Time: 0:38
 */
$image = ORM::for_table('images')->find_one($id);
$tags=explode(",", $image['tags']);
foreach($tags as &$tag){
    $tag='<a href="/tag/'.$tag.'">'.$tag.'</a>';
}
$tagsString=implode(', ',$tags);
$params['image']=$image;
$params['tags']=$tags;
$params['tagsstring']=$tagsString;
$app->render('foto.php',$params);
?>