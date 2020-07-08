<!-- 工作技能管理-新增技能種類-->
<div class="jumpBoxTop">新增技能種類</div>
<div class="jumpBoxContent">
  <form action="api/add.php" method="post" enctype="multipart/form-data">
    <table class="table">
      <tr>
        <td>技能種類</td>
        <td><input type="text" name="skill"></td>
      </tr>
      <input type="hidden" name="table" value="<?=$_GET['table']?>">
      <input type="hidden" name="skillChk" value="0">
    </table>
    <div class="btnGroup">
      <input class="btn btnOK" type="submit" value="確定">
      <input class="btn btnReset" type="reset" value="重置">
    </div>
  </form>
</div>