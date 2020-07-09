<?php
  include_once "base.php";
  $table=$_POST['table'];
  $db=new DB($table);
  $data=[];
  $page="";

  // 判斷圖片是否有上傳成功
  if(!empty($_FILES['img']['tmp_name'])){
    $filename=$_FILES['img']['name'];
    // 圖片路徑在上層要注意
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$filename);
    // 有圖片時才會有這個值
    $data['img']=$filename;
  }
  
  switch($table){
    // 帳號管理
    case 'resume_admin':
      $data['acc']=$_POST['acc'];
      $data['pw']=$_POST['pw'];
      $page="admin";
      break;
    // 連結管理
    case 'resume_link':
      $data['web']=$_POST['web'];
      $data['link']=$_POST['link'];
      $data['icon']=$_POST['icon'];
      $data['sh']=1;
      $page="link";
      break;  
    // 自傳管理
    case 'resume_autobiography':
      $data['content']=$_POST['content'];
      $data['note']=$_POST['note'];
      $data['sh']=0;
      $page="autobiography";
      break;
    case 'resume_jobcondition':
    // 求職條件管理
      $data['item']=$_POST['item'];
      $data['content']=$_POST['content'];
      $data['sh']=1;
      $page="jobCondition";
      break;
    // 學經歷管理
    case 'resume_experience':
      $data['item']=$_POST['item'];
      $data['time']=$_POST['time'];
      $data['content']=$_POST['content'];
      $data['type']=$_POST['type'];
      $data['sh']=1;
      $page="experience";
      break;
    // 工作技能管理
    case 'resume_skill':
      if($_POST['skillChk']=="0"){
        // 技能種類
        $data['skill']=$_POST['skill'];
        $data['percent']=0;
        $data['parent']=0;
        $data['type']=0;
        $data['sh']=1;
      }else{
        // 技能項目
        $data['skill']=$_POST['skill'];
        $data['percent']=$_POST['percent'];
        $data['parent']=$_POST['parent'];
        $data['type']=1;
        $data['sh']=1;
      }
      $page="skill";
      break;  
    // 作品集管理
    case 'resume_portfolio':
      $data['item']=$_POST['item'];
      $data['content']=$_POST['content'];
      $data['link']=$_POST['link'];
      $data['type']=$_POST['type'];
      $data['imgId']=$_POST['imgId'];
      $data['sh']=1;
      $page="portfolio";
      break;
    // 圖片管理
    case 'resume_img':
      $data['name']=$_POST['name'];
      $page="img";
      break;
  }

  $res=$db->save($data);
  if($res>0){
    to("../admin.php?page=$page&status=addT");
  }else{
    to("../admin.php?page=$page&status=addF");
  }
  
?>