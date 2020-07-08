<!-- 帳號管理 -->
<div class="topbar">帳號管理</div>
<div class="page page_admin">
  <form method="post" action="api/edit.php">
    <table class="table">
      <thead>
        <tr>
          <th class="th_id">id</th>
          <th>帳號</th>
          <th>密碼</th>
          <th class="th_del">刪除</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $table="resume_admin";
          $db=new DB($table);
          $rows=$db->all();
          foreach($rows as $row){
            if($row['acc']!="admin"){
        ?>
          <tr>
            <td><?=$row['id'];?></td>  
            <td><input type="text" name="acc[]" value="<?=$row['acc'];?>"></td>
            <td> <input type="password" name="pw[]" value="<?=$row['pw'];?>"></td>
            <td><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>

            <input type="hidden" name="id[]" value="<?=$row['id'];?>">
          </tr>
        <?php
            }
            else{
        ?>
          <tr>
            <td><?=$row['id'];?></td>  
            <td><?=$row['acc'];?></td>
            <td>*****</td>
            <td></td>
          </tr>  
        <?php      
            }
          }
        ?>
        <input type="hidden" name="table" value="<?=$table;?>">
      </tbody>
    </table>
    <div class="btnGroup">
      <a class="btn btnAdd" href="#" onclick="jbLoad('add_admin.php?table=<?=$table;?>')">新增</a>
      <div>
        <input class="btn btnOK" type="submit" value="確定">
        <input class="btn btnReset" type="reset" value="重置">
      </div>
    </div>
  </form>
</div>