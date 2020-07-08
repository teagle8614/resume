<!-- 帳號管理 -->
<div class="topbar">連結管理</div>
<div class="page page_admin">
  <form method="post" action="api/edit.php">
    <table class="table">
      <thead>
        <tr>
          <th class="th_id">id</th>
          <th>網頁名稱</th>
          <th>連結</th>
          <th>圖示<br>FontAwesome</th>
          <th>排序</th>
          <th class="th_show">顯示</th>
          <th class="th_del">刪除</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $table="resume_link";
          $db=new DB($table);
          $rows=$db->all();
          foreach($rows as $row){
            $isChk=($row['sh']==1)?'checked':'';
        ?>
        <tr>
          <td><?=$row['id'];?></td>  
          <td><input type="text" name="web[]" value="<?=$row['web'];?>"></td>
          <td><input type="text" name="link[]" value="<?=$row['link'];?>"></td>
          <td><input type="text" name="icon[]" value="<?=$row['icon'];?>"></td>
          <td class="td_order"><input type="text" name="orderNum[]" value="<?=$row['orderNum'];?>"></td>
          <td><input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=$isChk;?>></td>
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
      <a class="btn btnAdd" href="#" onclick="jbLoad('add_link.php?table=<?=$table;?>')">新增</a>
      <div>
        <input class="btn btnOK" type="submit" value="確定">
        <input class="btn btnReset" type="reset" value="重置">
      </div>
    </div>
  </form>
</div>