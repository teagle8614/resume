<?php
  $tipDisplay="none";
  $boxDisplay="block";
  if(isset($_GET['status'])){
    // css
    $tipDisplay="block";
    $boxDisplay="none";
  }
?>
<style>
  .tipBox{
    display: <?=$tipDisplay;?>;
  }
  .page{
    display: <?=$boxDisplay;?>;
  }
</style>
<div class="tipBox">
  <?php
    switch($_GET['status']){
      case "editT" :
        echo "<h5 class='tip'>資料編輯成功!</h5>";
        break;
      case "editF" :
        echo "<h5 class='tip'>資料編輯失敗!</h5>";
        break;
      case "addT" :
        echo "<h5 class='tip'>資料新增成功!</h5>";
        break;
      case "addF" :
        echo "<h5 class='tip'>資料新增失敗!</h5>";
        break;
    }
  ?>
  <a class='btn' href='admin.php?page=<?=$page;?>'>確定</a>
</div>