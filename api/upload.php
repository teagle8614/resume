<?php
  include_once "base.php";

  $table=$_POST['table'];
  $page="img";
  $db=new DB($table); 
  $row=$db->find($_POST['id']); // 將原本圖片的資料抓出

  // 判斷圖片是否有上傳成功
  if(!empty($_FILES['img']['tmp_name'])){
    $filename=$_FILES['img']['name'];
    // 圖片路徑在上層要注意
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$filename);

    $row['img']=$filename; // 若上傳的圖片檔名不同，則將檔名作修改
    $db->save($row); // 將資料存回資料庫
  }

  to("../admin.php?page=$page&status=editT");
?>