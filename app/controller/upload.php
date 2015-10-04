<?php
/**
 * Created by PhpStorm.
 * User: DjJustin
 * Date: 28.09.2015
 * Time: 19:15
 */

if ($app->request->post('step') == 2) {
    // step2
    $arFiles = reArrayFiles($_POST['FILES']);
    foreach($arFiles as $item){
        $images = ORM::for_table('images')->create();
        $images->filename = $item['filename'];
        $images->name = $item['name'];
        $tags=explode(",", $item['tags']);
        foreach($tags as &$item){
            $item=trim($item);
        }
        $images->tags = implode(',',$tags);
        $images->save();
    }
    $app->render('uploadform.php');
} elseif ($app->request->post('step') == 1) {
    //step 1
    $arFiles = reArrayFiles($_FILES['photo']);
    $arImages=array();
    $name=time();
    $i=0;
    foreach ($arFiles as $item) {
        $ext=pathinfo($item['name'], PATHINFO_EXTENSION);
        if($ext=='jpg') {
            $i++;
            $filename=$name .'_'.$i. ".jpg";
            move_uploaded_file($item['tmp_name'], 'fotoupload/' .$filename);
            $arImages[]=$filename;
        }
    }
    $params['arFiles'] = $arImages;
    $app->render('filelist.php', $params);
} else {
    //step 0
    $app->render('uploadform.php');
}

?>
