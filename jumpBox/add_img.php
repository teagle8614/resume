<!-- 圖片管理-新增圖片-->
<div class="jumpBoxTop">新增圖片</div>
<div class="jumpBoxContent">
  <form action="api/add.php" method="post" enctype="multipart/form-data">
    <table class="table">
      <tr>
        <td>上傳圖片</td>
        <td><input type="file" name="img"></td>
      </tr>
      <tr>
        <td>圖片備註</td>
        <td><input type="text" name="name"></td>
      </tr>
      <!-- <tr>
        <td>圖檔名</td>
        <td><input type="text" name="imgName"></td>
      </tr> -->
      <input type="hidden" name="table" value="<?=$_GET['table']?>">
    </table>
    <div class="btnGroup">
      <input class="btn btnOK" type="submit" value="確定">
      <input class="btn btnReset" type="reset" value="重置">
    </div>
  </form>
</div>