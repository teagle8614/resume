<?php
include_once "api/base.php";
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
      echo "<script>alert('帳號或密碼錯誤')</script>";
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
    
  </style>
</head>
<body>
  <div class="container">
    <div class="loginBox">

      <h3>會員登入</h3>
      <form action="login.php" method="POST">

        <div>
          <label for="acc">帳號:</label>
          <input type="text" name="acc" required>
        </div>
        <div>
          <label for="pw">密碼:</label>
          <input type="password" name="pw" required>
        </div>

        <input type="submit" value="登入">
        <input type="reset" value="重置">
      </form>
 
    </div>
  </div>
</body>
</html>