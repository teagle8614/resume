<!-- 學經歷管理-新增學經歷-->
<div class="jumpBoxTop">新增學經歷</div>
<div class="jumpBoxContent">
  <form action="api/add.php" method="post" enctype="multipart/form-data">
    <table class="table">
      <tr>
        <td>項目</td>
        <td><input type="text" name="item"></td>
      </tr>
      <tr>
        <td>時間</td> 
        <td><input type="text" name="time"></td>
      </tr>
      <tr>
        <td>內容</td>
        <td>
          <textarea name="content" id="" rows="5"></textarea>
        </td>
      </tr>
      <tr>
        <td>學歷/工作經歷</td>
        <td>
          <select name="type">
            <option value="0">學歷</option>
            <option value="1">工作經歷</option>
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