<?php
  include_once "base.php";

  // 按編輯時沒資料會出錯，所以要先自己再資料表加入一兩筆上去
  // 且至少要有一筆是顯示的狀態
  $table=$_POST['table'];
  $db=new DB($table);

  foreach($_POST['id'] as $key=>$id){
    // echo "key:".$key.",id:".$id."<br>";

    if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
      $db->del($id);
    }else{
      $row=$db->find($id);


      switch($table){
        // 帳號管理
        case 'resume_admin':
          $row['acc']=$_POST['acc'][$key];
          $row['pw']=$_POST['pw'][$key];
          $page="admin";
          break;
        // 連結管理
        case 'resume_link':
          $row['web']=$_POST['web'][$key];
          $row['link']=$_POST['link'][$key];
          $row['icon']=$_POST['icon'][$key];
          $row['orderNum']=$_POST['orderNum'][$key];
          $row['sh']=(!empty($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
          $page="link";
          break;  
        // 自傳管理
        case 'resume_autobiography':
          $row['content']=$_POST['content'][$key];
          $row['note']=$_POST['note'][$key];
          $row['sh']=($_POST['sh']==$id)?1:0;
          $page="autobiography";
          break;
        case 'resume_jobCondition':
        // 求職條件管理
          $row['item']=$_POST['item'][$key];
          $row['content']=$_POST['content'][$key];
          $row['orderNum']=$_POST['orderNum'][$key];
          $row['sh']=(!empty($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
          $page="jobCondition";
          break;
        // 學經歷管理
        case 'resume_experience':
          $row['item']=$_POST['item'][$key];
          $row['time']=$_POST['time'][$key];
          $row['content']=$_POST['content'][$key];
          $row['type']=$_POST['type'][$key];
          $row['orderNum']=$_POST['orderNum'][$key];
          $row['sh']=(!empty($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
          $page="experience";
          break;
        // 工作技能管理
        case 'resume_skill':
          if($_POST['skillChk']=="0"){
            // 技能種類
            $row['skill']=$_POST['skill'][$key];
            $row['orderNum']=$_POST['orderNum'][$key];
            $row['sh']=(!empty($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
          }else{
            // 技能項目
            $row['skill']=$_POST['skill'][$key];
            $row['percent']=$_POST['percent'][$key];
            $row['parent']=$_POST['parent'][$key];
            $row['orderNum']=$_POST['orderNum'][$key];
            $row['sh']=(!empty($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
          }
          $page="skill";
          break;  
        // 作品集管理
        case 'resume_portfolio':
          $row['item']=$_POST['item'][$key];
          $row['content']=$_POST['content'][$key];
          $row['link']=$_POST['link'][$key];
          $row['imgId']=$_POST['imgId'][$key];
          $row['orderNum']=$_POST['orderNum'][$key];
          $row['sh']=(!empty($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
          $page="portfolio";
          break;
        // 圖片管理
        case 'resume_img':
          $row['name']=$_POST['name'][$key];
          $page="img";
          break;  
        default: 
      }

      $res=$db->save($row);
    }
  }

  to("../admin.php?page=$page&status=editT");
?>