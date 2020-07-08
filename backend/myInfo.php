<!-- 個人基本資料管理 -->
<div class="topbar">個人基本資料管理</div>
<div class="page page_myInfo">
  <form method="post" action="api/edit_info.php">
    <table class="table">
      <thead>
        <tr>
          <th>項目</th>
          <th>內容</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $table="resume_myInfo";
          $db=new DB($table);
          $row=$db->find(1);

          $Img=new DB("resume_img");
          $imgs=$Img->all();
          $countImg=$Img->count($row['imgId']);

        ?>
        <tr>
          <td>姓名</td>
          <td><input type="text" name="name" value="<?=$row['name'];?>"></td>
        </tr>
        <tr>
          <td>英文姓名</td>
          <td><input type="text" name="engName" value="<?=$row['engName'];?>"></td>
        </tr>
        <tr>
          <td>電話</td>
          <td><input type="text" name="phone"  value="<?=$row['phone'];?>"></td>
        </tr>
        <tr>
          <td>信箱</td>
          <td><input type="email" name="email" value="<?=$row['email'];?>"></td>
        </tr>
        <tr>
          <td>生日</td>
          <td><input type="text" name="birth" value="<?=$row['birth'];?>"></td>
        </tr>
        <tr>
          <td>居住縣市</td>
          <td><input type="text" name="city" value="<?=$row['city'];?>"></td>
        </tr>
        <tr>
          <td>簡介</td>
          <td><textarea style="width:100%" name="info" id="" rows="10"><?=$row['info'];?></textarea></td>
        </tr>
        <tr>
          <td>圖片</td>
          <td>
            <?php
              echo "<select name='imgId'>";
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
        </tr>
        <input type="hidden" name="table" value="<?=$table;?>">
      </tbody>
    </table>
    <div class="btnGroup">
      <div>
        <input class="btn btnOK" type="submit" value="確定">
        <input class="btn btnReset" type="reset" value="重置">
      </div>
    </div>
  </form>
</div>