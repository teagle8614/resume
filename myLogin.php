<?php
include_once "api/base.php";
  $opacityCSS=0;
  // 判斷帳密是否有輸入
  if(!empty($_POST['acc']) && !empty($_POST['pw'])){

    $admin=new DB("resume_admin");
    $acc=$_POST['acc'];
    $pw=$_POST['pw'];
    $chk=$admin->count(['acc'=>$acc,'pw'=>$pw]);
    
    if($chk>0){
      session_start();
      $_SESSION['login']=$acc;
      echo $acc;
      to("admin.php");
    }else{
      $opacityCSS=1;
    }
  }

?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>登入</title>
  <link rel="stylesheet" href="css/login.css">
  <style>
    .tip{
      opacity: <?=$opacityCSS;?>;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="loginBox">

      <h3>會員登入</h3>
      <form action="myLogin.php" method="POST">

        <div>
          <label for="acc">帳號:</label>
          <input type="text" name="acc" required>
        </div>
        <div>
          <label for="pw">密碼:</label>
          <input type="password" name="pw" required>
        </div>
        <p class="tip">帳號或密碼錯誤</p>
        <input type="submit" value="登入">
        <input type="reset" value="重置">
      </form>
 
    </div>
  </div>
</body>
</html>