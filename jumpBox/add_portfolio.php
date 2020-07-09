<!-- 作品集管理-新增作品-->
<?php
  include_once "../api/base.php";
?>

<div class="jumpBoxTop">新增作品</div>
<div class="jumpBoxContent">
  <form action="api/add.php" method="post" enctype="multipart/form-data">
    <table class="table">
      <tr>
        <td>項目</td>
        <td><input type="text" name="item"></td>
      </tr>
      <tr>
        <td>內容</td>
        <td><textarea name="content" rows="8"></textarea></td>
      </tr>
      <tr>
        <td>連結</td>
        <td><input type="text" name="link"></td>
      </tr>
      <tr>
        <td>作品類型</td>
        <td><input type="text" name="type"></td>
      </tr>
      <tr>
        <td>圖片</td>
        <td>
          <select name="imgId">
            <option value="0">請選擇</option>
          <?php
            $table="resume_img";
            $db=new DB($table);
            $rows=$db->all();

            foreach($rows as $row){
              echo "<option value='".$row['id']."'>".$row['name']."</option>";
            }
          ?>
          </select>
        </td>
      </tr>
      <input type="hidden" name="table" value="<?=$_GET['table']?>">
    </table>
    <div class="btnGroup">
      <input class="btn btnOK" type="submit" value="確定">
      <input class="btn btnReset" type="reset" value="重置">
    </div>

    
  </form>
</div>