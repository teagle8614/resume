<!-- 求職條件管理-新增求職條件-->
<div class="jumpBoxTop">新增求職條件</div>
<div class="jumpBoxContent">
  <form action="api/add.php" method="post" enctype="multipart/form-data">
    <table class="table">
      <tr>
        <td>項目</td>
        <td><input type="text" name="item"></td>
      </tr>
      <tr>
        <td>內容</td>
        <td><input type="text" name="content"></td>
      </tr>
      <input type="hidden" name="table" value="<?=$_GET['table']?>">
    </table>
    <div class="btnGroup">
      <input class="btn btnOK" type="submit" value="確定">
      <input class="btn btnReset" type="reset" value="重置">
    </div>
  </form>
</div>