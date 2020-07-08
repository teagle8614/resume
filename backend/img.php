<!-- 圖片管理 -->
<div class="topbar">圖片管理</div>
<div class="page page_img">
  <form method="post" action="api/edit.php">
    <table class="table">
      <thead>
        <tr>
          <th class="th_id">id</th>
          <th>縮圖</th>
          <th>圖片備註</th>
          <th>圖檔名</th>
          <th class="th_del">刪除</th>
          <th class="th_btn"></th>
        </tr>
      </thead>
      <tbody>
        <?php
          $table="resume_img";
          $db=new DB($table);
          $rows=$db->all();
          foreach($rows as $row){
        ?>
          <tr>
            <td><?=$row['id'];?></td>
            <td class="td_img"><img src="img/<?=$row['img'];?>" alt=""></td>
            <td><input type="text" name="name[]" value="<?=$row['name'];?>"></td>
            <td><?=$row['img'];?></td>
            <td>
              <input type="checkbox" name="del[]" value="<?=$row['id'];?>">
            </td>
            <td>
              <a href="#" class="btn" onclick="jbLoad('upload_img.php?table=<?=$table;?>&id=<?=$row['id'];?>')">更新圖片</a>
            </td>

            <input type="hidden" name="id[]" value="<?=$row['id'];?>">
          </tr>
        <?php
          }
        ?>
        <input type="hidden" name="table" value="<?=$table;?>">
      </tbody>
    </table>
    <div class="btnGroup">
      <a class="btn btnAdd" href="#"  onclick="jbLoad('add_img.php?table=<?=$table;?>')">新增</a>
      <div>
        <input class="btn btnOK" type="submit" value="確定">
        <input class="btn btnReset" type="reset" value="重置">
      </div>
    </div>
  </form>
</div>
