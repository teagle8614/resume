<!-- 連結管理-新增連結-->
<div class="jumpBoxTop">新增連結</div>
<div class="jumpBoxContent">
  <form action="api/add.php" method="post" enctype="multipart/form-data">
    <table class="table">
      <tr>
        <td>網頁名稱</td>
        <td><input type="text" name="web"></td>
      </tr>
      <tr>
        <td>連結</td>
        <td><input type="text" name="link"></td>
      </tr>
      <tr>
        <td>圖示</td>
        <td><input type="text" name="icon"></td>
      </tr>
      <input type="hidden" name="table" value="<?=$_GET['table']?>">
    </table>
    <div class="btnGroup">
      <input class="btn btnOK" type="submit" value="確定">
      <input class="btn btnReset" type="reset" value="重置">
    </div>
  </form>
</div>