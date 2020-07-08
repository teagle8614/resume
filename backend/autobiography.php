<!-- 自傳管理 -->
<div class="topbar">自傳管理</div>
<div class="page page_autobiography">
  <form method="post" action="api/edit.php">
    <table class="table">
      <thead>
        <tr>
          <th class="th_id">id</th>
          <th style="width:60%">內容</th>
          <th>備註</th>
          <th class="th_show">顯示</th>
          <th class="th_del">刪除</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $table="resume_autobiography";
          $db=new DB($table);
          $rows=$db->all();
          foreach($rows as $row){
            // 顯示與否
            $isChk=($row['sh']==1)?'checked':'';
        ?>
        <tr>
          <td><?=$row['id'];?></td>  
          <td><textarea style="width:100%" type="text" name="content[]" rows="5"><?=$row['content'];?></textarea></td>
          <td><input type="text" name="note[]" value="<?=$row['note'];?>"></td>
          <td><input type="radio" name="sh" value="<?=$row['id'];?>" <?=$isChk;?>></td>
          <td><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>

          <input type="hidden" name="id[]" value="<?=$row['id'];?>">
        </tr>
        <?php
          }
        ?>
        <input type="hidden" name="table" value="<?=$table;?>">
      </tbody>
    </table>
    <div class="btnGroup">
      <a class="btn btnAdd" href="#" onclick="jbLoad('add_autobiography.php?table=<?=$table;?>')">新增</a>
      <div>
        <input class="btn btnOK" type="submit" value="確定">
        <input class="btn btnReset" type="reset" value="重置">
      </div>
    </div>
  </form>
</div>