<!-- 工作技能管理 -->
<div class="topbar">工作技能管理</div>
<div class="page page_skill">
  <div class="pageItem">
    <h5>技能種類</h5>
    <form method="post" action="api/edit.php">
      <table class="table">
        <thead>
          <tr>
            <th class="th_id">id</th>
            <th>技能種類</th>
            <th>排序</th>
            <th class="th_show">顯示</th>
            <th class="th_del">刪除</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $table="resume_skill";
            $db=new DB($table);
            $kind_rows=$db->all(['type'=>0]);
            $countKind=$db->count(['type'=>0]);

            foreach($kind_rows as $k_row){
              $isChk=($k_row['sh']==1)?'checked':'';
          ?>
            <tr>
              <td><?=$k_row['id'];?></td> 
              <td><input type="text" name="skill[]" value="<?=$k_row['skill'];?>"></td>
              <td class="td_order"><input type="text" name="orderNum[]" value="<?=$k_row['orderNum'];?>"></td>
              <td><input type="checkbox" name="sh[]" value="<?=$k_row['id'];?>" <?=$isChk;?>></td>
              <td><input type="checkbox" name="del[]" value="<?=$k_row['id'];?>"></td>

              <input type="hidden" name="id[]" value="<?=$k_row['id'];?>">
            </tr>
          <?php
            }
          ?>  
          <input type="hidden" name="skillChk" value="0">
          <input type="hidden" name="table" value="<?=$table;?>">
        </tbody>
      </table>

      <div class="btnGroup">
        <a class="btn btnAdd" href="#" onclick="jbLoad('add_skillKind.php?table=<?=$table;?>')">新增</a>
        <div>
          <input class="btn btnOK" type="submit" value="確定">
          <input class="btn btnReset" type="reset" value="重置">
        </div>
      </div>
    </form>
  </div>

  <hr>

  <div class="pageItem">
    <h5>技能項目</h5>
    <form method="post" action="api/edit.php">
      <table class="table">
        <thead>
          <tr>
            <th>id</th>
            <th>項目</th>
            <th>百分比</th>
            <th>技能種類</th>
            <th>排序</th>
            <th class="th_show">顯示</th>
            <th class="th_del">刪除</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $item_rows=$db->all(['type'=>1]);
            foreach($item_rows as $i_row){
              
              $isChk=($i_row['sh']==1)?'checked':'';
          ?>
            <tr>
              <td><?=$i_row['id'];?></td> 
              <td><input type="text" name="skill[]" value="<?=$i_row['skill'];?>"></td>
              <td><input type="number" name="percent[]" value="<?=$i_row['percent'];?>"></td>
              <td>
                <!-- <input type="text" name="parent[]" value="<?=$i_row['parent'];?>"> -->
                <?php
                  echo "<select name='parent[]'>";
                  if($countKind==0){
                    echo "<option value='0' selected>請選擇</option>";
                  }else{
                    echo "<option value='0'>請選擇</option>";
                  }
                  foreach($kind_rows as $k_row){
                    $selected=($k_row['id']==$i_row['parent'])?"selected":"";
                    echo "<option value='".$k_row['id']."' $selected>".$k_row['skill']."</option>";
                  }
                  echo "</select>";
                ?>
              </td>
              <td class="td_order"><input type="text" name="orderNum[]" value="<?=$i_row['orderNum'];?>"></td>
              <td><input type="checkbox" name="sh[]" value="<?=$i_row['id'];?>" <?=$isChk;?>></td>
              <td><input type="checkbox" name="del[]" value="<?=$i_row['id'];?>"></td>

              <input type="hidden" name="id[]" value="<?=$i_row['id'];?>">
            </tr>
          <?php
            }
          ?>    
          <input type="hidden" name="skillChk" value="1">
          <input type="hidden" name="table" value="<?=$table;?>">
        </tbody>
      </table>

      <div class="btnGroup">
        <a class="btn btnAdd" href="#" onclick="jbLoad('add_skillItem.php?table=<?=$table;?>')">新增</a>
        <div>
          <input class="btn btnOK" type="submit" value="確定">
          <input class="btn btnReset" type="reset" value="重置">
        </div>
      </div>
    </form>
  </div>
</div>