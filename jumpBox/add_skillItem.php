<!-- 工作技能管理-新增技能項目-->
<?php
  include_once "../api/base.php";
?>

<div class="jumpBoxTop">新增技能項目</div>
<div class="jumpBoxContent">
  <form action="api/add.php" method="post" enctype="multipart/form-data">
    <table class="table">
      <tr>
        <td>項目</td>
        <td><input type="text" name="skill"></td>
      </tr>
      <tr>
        <td>百分比</td>
        <td><input type="number" name="percent"></td>
      </tr>
      <tr>
        <td>技能種類</td>
        <td>
          <select name="parent">
            <option value="0">請選擇</option>
          <?php
            $table="resume_skill";
            $db=new DB($table);
            $rows=$db->all(['type'=>0]);

            foreach($rows as $row){
              echo "<option value='".$row['id']."'>".$row['skill']."</option>";
            }
          ?>
          </select>
        </td>
      </tr>
      <input type="hidden" name="table" value="<?=$_GET['table']?>">
      <input type="hidden" name="skillChk" value="1">
    </table>
    <div class="btnGroup">
      <input class="btn btnOK" type="submit" value="確定">
      <input class="btn btnReset" type="reset" value="重置">
    </div>
  </form>
</div>