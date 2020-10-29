<?php
include_once "../base220.php";

// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";

if($_FILES['upload']['error']==0){
    switch($_FILES['upload']['type']){
        case "image/jpeg";
            $sub='.jpg';
        break;
        case "image/png";
            $sub='.png';
        break;
        case "image/gif";
            $sub='.gif';            
        break;
    }

   $name='asa'.date("Ymdhis").$sub;
   move_uploaded_file($_FILES['upload']['tmp_name'],"../img2/".$name); 

   $db=new DB('file_info');
   $db->save([
    'filename'=>$name,
    'type'=>$_FILES['upload']['type'],
    'note'=>$_POST['note'],
    'path'=>'img2/'.$name
   ]);

   to("../asadown.php");
}
?>



