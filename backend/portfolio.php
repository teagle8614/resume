<!-- 作品集管理 -->
<div class="topbar">作品集管理</div>
<div class="page page_portfolio">
  <form method="post" action="api/edit.php">
    <table class="table">
      <thead>
        <tr>
          <th class="th_id">id</th>
          <th>項目</th>
          <th style="width:30%">內容</th>
          <th>連結</th>
          <th>預覽圖片</th>
          <th>排序</th>
          <th class="th_show">顯示</th>
          <th class="th_del">刪除</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $table="resume_portfolio";
          $db=new DB($table);
          $rows=$db->all();

          $Img=new DB("resume_img");
          $imgs=$Img->all();
          
          foreach($rows as $row){
            $isChk=($row['sh']==1)?'checked':'';
            $countImg=$Img->count($row['imgId']);
        ?>
          <tr>
            <td><?=$row['id'];?></td>  
            <td><input type="text" name="item[]" value="<?=$row['item'];?>"></td>
            <td><textarea style="width:100%;" name="content[]" rows="5"><?=$row['content'];?></textarea></td>
            <td><input type="text" name="link[]" value="<?=$row['link'];?>"></td>
            <td>
              <?php
                echo "<select name='imgId[]'>";
                if($countImg==0){
                  echo "<option value='0' selected>請選擇</option>";
                }else{
                  echo "<option value='0'>請選擇</option>";
                }
                foreach($imgs as $img){
                  $selected=($row['imgId']==$img['id'])?"selected":"";
                  echo "<option value='".$img['id']."' $selected>".$img['name']."</option>";
                }
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
      <a class="btn btnAdd" href="#" onclick="jbLoad('add_portfolio.php?table=<?=$table;?>')">新增</a>
      <div>
        <input class="btn btnOK" type="submit" value="確定">
        <input class="btn btnReset" type="reset" value="重置">
      </div>
    </div>
  </form>
</div>