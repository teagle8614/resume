<!-- 自傳管理-新增自傳-->
<div class="jumpBoxTop">新增自傳</div>
<div class="jumpBoxContent">
  <form action="api/add.php" method="post" enctype="multipart/form-data">
    <table class="table">
      <tr>
        <td>內容</td>
        <td>
          <textarea name="content" rows="10"></textarea>
        </td>
      </tr>
      <tr>
        <td>備註</td>
        <td><input type="text" name="note"></td>
      </tr>
      <input type="hidden" name="table" value="<?=$_GET['table']?>">
    </table>
    <div class="btnGroup">
      <input class="btn btnOK" type="submit" value="確定">
      <input class="btn btnReset" type="reset" value="重置">
    </div>
  </form>
</div>