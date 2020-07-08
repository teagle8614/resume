<!-- 學經歷管理 -->
<div class="topbar">學經歷管理</div>
<div class="page page_experience">
  <form method="post" action="api/edit.php">
    <table class="table">
      <thead>
        <tr>
          <th class="th_id">id</th>
          <th>項目</th>
          <th>時間</th>
          <th style="width:50%">內容</th>
          <th>學歷/<br>工作經歷</th>
          <th>排序</th>
          <th class="th_show">顯示</th>
          <th class="th_del">刪除</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $table="resume_experience";
          $db=new DB($table);
          $rows=$db->all();
          foreach($rows as $row){
            // 顯示與否
            $isChk=($row['sh']==1)?'checked':'';
        ?>
          <tr>
            <td><?=$row['id'];?></td>  
            <td><input type="text" name="item[]" value="<?=$row['item'];?>"></td>
            <td><input type="text" name="time[]" value="<?=$row['time'];?>"></td>
            <td><textarea type="text" name="content[]" id=""rows="5"><?=$row['content'];?></textarea></td>
            <td class="td_type">
              <!-- <input type="text" name="type[]" value="<?=$row['type'];?>"> -->
              <?php
                $selected0=($row['type']=="0")?"selected":"";
                $selected1=($row['type']=="1")?"selected":"";
                echo "<select name='type[]'>";
                echo "  <option value='0' $selected0>學歷</option>";
                echo "  <option value='1' $selected1>工作經歷</option>";
                echo "</select>";
              ?>
            </td>
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
      <a class="btn btnAdd" href="#" onclick="jbLoad('add_experience.php?table=<?=$table;?>')">新增</a>
      <div>
        <input class="btn btnOK" type="submit" value="確定">
        <input class="btn btnReset" type="reset" value="重置">
      </div>
    </div>
  </form>
</div>