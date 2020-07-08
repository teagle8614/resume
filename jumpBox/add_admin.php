<!-- 帳號管理-新增帳號-->
<div class="jumpBoxTop">新增帳號</div>
<div class="jumpBoxContent">
  <form action="api/add.php" method="post" enctype="multipart/form-data">
    <table class="table">
      <tr>
        <td>帳號</td>
        <td><input type="text" name="acc"></td>
      </tr>
      <tr>
        <td>密碼</td>
        <td><input type="password" name="pw"></td>
      </tr>
      <input type="hidden" name="table" value="<?=$_GET['table']?>">
    </table>
    <div class="btnGroup">
      <input class="btn btnOK" type="submit" value="確定">
      <input class="btn btnReset" type="reset" value="重置">
    </div>
  </form>
</div>