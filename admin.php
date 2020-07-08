<?php  
  include_once "api/base.php"; 
  session_start();
  // 阻擋隨意進入後台
  if(empty($_SESSION['login'])){
    echo "<script>alert('非法登入，請重新登入'); location.href='index.php'</script>";
    exit();
  } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>admin</title>
  <link rel="stylesheet" href="plugins/bootstrap.min.css">
  <link rel="stylesheet" href="css/admin.css">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <!-- google font -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&family=Open+Sans:ital@0;1&display=swap" rel="stylesheet">
  <!-- google icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
  <div class="adminContainer">
    <div class="sideBar">
      <a class="sideTitle" href="admin.php">後台管理</a>
      <ul class="navList">
        <li><a href="admin.php?page=admin">帳號管理</a></li>
        <li><a href="admin.php?page=myInfo">個人基本資料管理</a></li>
        <li><a href="admin.php?page=link">連結管理</a></li>
        <li><a href="admin.php?page=autobiography">自傳管理</a></li>
        <li><a href="admin.php?page=jobCondition">求職條件管理</a></li>
        <li><a href="admin.php?page=experience">學經歷管理</a></li>
        <li><a href="admin.php?page=skill">工作技能管理</a></li>
        <li><a href="admin.php?page=portfolio">作品集管理</a></li>
        <li><a href="admin.php?page=img">圖片管理</a></li>
        <li><a href="index.php">回前台</a></li>
        <li><a href="api/logout.php">登出</a></li>
      </ul>
    </div>
    <div class="rightBox">

      <?php 
        $page=(!empty($_GET['page']))?$_GET['page']:'home';
        $file='backend/'.$page.".php";

        if(file_exists($file)){
          include $file;
        }else{
          include 'backend/home.php';
        }
      ?>

      <?php
        include_once "backend/tipBox.php";
        include_once "backend/jumpBox.php";
      ?>
    </div>
  </div>

  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="plugins/bootstrap.bundle.min.js"></script>
  <script src="js/backend.js"></script>
</body>
</html>