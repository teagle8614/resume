<?php
  include_once "api/base.php";

  $MyInfo=new DB("resume_myinfo");
  $myinfo=$MyInfo->find(1);

  $Img=new DB("resume_img");
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>resume</title>
  <link rel="stylesheet" href="plugins/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <!-- google font -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&family=Oleo+Script&family=Open+Sans:ital@0;1&display=swap" rel="stylesheet">
  <!-- google icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/f4c023462d.js" crossorigin="anonymous"></script>
  <!-- Wow.js -->
  <link rel="stylesheet" href="plugins/wow/animate.css"/>
</head>
<body>
  <header class="navbar-dark fixed-top">
    <nav class="navbar navbar-expand-md container">
      <a class="navbar-brand" href="javascript:void(0);">Resume</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="nav">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="#about">關於我</a>
          <a class="nav-item nav-link" href="#jobCondition">求職條件</a>
          <!-- <a class="nav-item nav-link" href="#autobiography">自傳</a> -->
          <a class="nav-item nav-link" href="#skill">工作技能</a>
          <a class="nav-item nav-link" href="#experience">經歷</a>
          <a class="nav-item nav-link" href="#portfolio">作品集</a>
          
        </div>
        <div class="navbar-nav ml-auto">
          <?php
            session_start();
            if(empty($_SESSION['login'])){
              // echo "<a id='login' class='nav-item nav-link' href='myLogin.php'>登入</a>";
            }
            else{
              echo "<a class='nav-item nav-link' href='admin.php'>進入後台</a>";
            }
          ?>
          
        </div>
      </div>
    </nav>
  </header>

  <div id="topBar" class="section container-fluid">
    <div class="topBox">
      <?php
        $myImg=$Img->find($myinfo['imgId']);
      ?>
      <div class="myPhoto wow fadeInUp">
        <div style="background-image: url(img/<?=$myImg['img'];?>);"></div>
      </div>
      <div class="myName wow fadeInUp"><?=$myinfo['engName'];?></div>
      <div class="myLink text-center wow fadeInUp">
        <?php
          $Link=new DB("resume_link");
          $links=$Link->all(["sh"=>1]," order by  `orderNum` asc");

          foreach($links as $link){
        ?>
          <a href="<?=$link['link'];?>" target="_blank"><span class="<?=$link['icon'];?>"></span></a>
        <?php
          }
        ?>  
      </div>
      <a href="#about" id="btnDown" class="btnDown">
        <span class="material-icons">keyboard_arrow_down</span>
      </a>
    </div>
  </div>

  <section id="about" class="container">
    <h3 class="title wow fadeInLeft">關於我<span></span></h3>
    <div class="row wow fadeInUpBig">
      <div class="col-lg-5">
        <!-- <div class="myPhoto"></div> -->
        <div>
          <table class="table wow fadeInUpBig">
            <tr>
              <td><?=$myinfo['name'];?> <?=$myinfo['engName'];?></td>
            </tr>
            <tr>
              <td>現居<?=$myinfo['city'];?></td>
            </tr>
            <tr>
              <td><?=$myinfo['email'];?></td>
            </tr>
          </table>
        </div>
      </div>
      <div class="col-lg-7">
        <div><?=nl2br($myinfo['info']);?></div>
      </div> 
    </div> 
  </section>

  <hr>

  <section id="jobCondition" class="container">
    <h3 class="title wow fadeInLeft">求職條件<span></span></h3>
    <table class="table wow fadeInUpBig">
      <tbody>
        <?php
          $Job=new DB("resume_jobcondition");
          $jobs=$Job->all(["sh"=>1]," order by  `orderNum` asc");

          foreach($jobs as $job){
        ?>
          <tr>
            <td><?=$job['item'];?></td>
            <td><?=$job['content'];?></td>
          </tr>
        <?php
          }
        ?>  
      </tbody>
    </table>
  </section>

  <!-- <hr>


  <section id="autobiography" class="container">
    <h3 class="title wow fadeInLeft">自傳<span></span></h3>
    <div class="autobiographyContent wow fadeInUpBig">
      <?php
        $Autobio=new DB("resume_autobiography");
        $autobio=$Autobio->find(["sh"=>1]);
        echo nl2br($autobio['content']);
      ?>
    </div>
  </section> -->

  <hr>

  <section id="skill" class="container">
    <h3 class="title wow fadeInLeft">工作技能<span></span></h3>
    <div class="row">
      <?php
        $Skill=new DB("resume_skill");
        $skillKinds=$Skill->all(["type"=>0,"sh"=>1]," order by  `orderNum` asc,`id` asc");

        foreach($skillKinds as $skillKind){
      ?>
      <div class="col-12 col-lg-12 wow fadeInLeft">
        <div class="skills-content">
          <h4><?=$skillKind['skill'];?></h4>
            <div class="row">
          <?php
            $skills=$Skill->all(["parent"=>$skillKind['id'],"sh"=>1]," order by  `orderNum` asc ,`id` asc");
            foreach($skills as $skill){
          ?>
              <div class="col-12 col-lg-6">
                <div class="progressBox">
                  <p class="skillText"><?=$skill['skill'];?><span class="percent"><?=$skill['percent'];?>%</span></p>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" data-percent="<?=$skill['percent'];?>"></div>
                  </div>
                </div>
              </div>
          <?php
            }
          ?> 
          </div>
        </div>
      </div>
      <?php
        }
      ?> 
    </div> 
  </section>

  <hr>

  <section id="experience" class="container">
    <h3 class="title wow fadeInLeft">經歷<span></span></h3>
    <div class="row">
      <div class="col-12 mb-4">
        <div class="part wow fadeInUpBig"><span>學歷</span></div>
        <?php
          $Exper=new DB("resume_experience");
          $expers=$Exper->all(["sh"=>1,"type"=>0]," order by  `orderNum` asc, `id` asc");

          foreach($expers as $exper){
        ?>
        <div class="experienceItem wow fadeInUpBig">
          <div class="experienceItemLine">
            <p class="experTitle"><?=$exper['item'];?></p>
            <p class="experTime"><?=$exper['time'];?></p>
            <div class="experContent"><?=nl2br($exper['content']);?></div>
          </div>
        </div>
        <?php
          }
        ?>
      </div>

      <div class="col-12">
        <div class="part wow fadeInUpBig"><span>工作經歷</span></div>
        <?php
          $expers=$Exper->all(["sh"=>1,"type"=>1]," order by  `orderNum` asc, `id` asc");

          foreach($expers as $exper){
        ?>
        <div class="experienceItem wow fadeInUpBig">
          <div class="experienceItemLine">
            <p class="experTitle"><?=$exper['item'];?></p>
            <p class="experTime"><?=$exper['time'];?></p>
            <div class="experContent"><?=nl2br($exper['content']);?></div>
          </div>
        </div>
        <?php
          }
        ?>
      </div>
    </div>
  </section>
  

  <hr>

  <section id="portfolio" class="container">
    <?php
      $Port=new DB("resume_portfolio");
      $ports=$Port->all(["sh"=>1]," order by `orderNum` asc,`id` asc");
      
      $typeKinds=$Port->q("SELECT DISTINCT `type` FROM `resume_portfolio`");
    ?>
    <h3 class="title wow fadeInLeft">作品集<span></span></h3>
    <div class="control_btn">
      <a href="javascript:controlPost(0)">ALL</a>
      <?php
        foreach($typeKinds as $typeKind){
          echo "<a href='javascript:controlPost(\"".$typeKind['type']."\")'>".$typeKind['type']."</a>";
        }
      ?>
    </div>


    <!-- <div class="row">
      <?php
        foreach($ports as $port){
          // 利用id去找resume_img裡的圖片
          $imgLink=$Img->find($port['imgId']);
      ?>
      <div class="col-12 col-lg-4 col-md-6 my-3 wow fadeInUp" data-portfolio="<?=$port['type'];?>">
       <a href="<?=$port['link'];?>" target="_blank">
         <div class="box box1" style="background-image: url(img/<?=$imgLink['img'];?>);">
            <div class="innerBox">
              <span class="material-icons">search</span>
              <p class="namePortfolio"><?=$port['item'];?></p>
              <div class="textPortfolio"><?=nl2br($port['content']);?></div>
            </div>
         </div>
       </a>
      </div>
      <?php
          }
      ?>
    </div>   -->


    <?php
      foreach($ports as $port){
        // 利用id去找resume_img裡的圖片
        $imgLink=$Img->find($port['imgId']);
    ?>
      <div class="row wow fadeInUp" data-portfolio="<?=$port['type'];?>">
        <div class="col-md-4 lBox">
        <a href="<?=$port['link'];?>" target="_blank">
          <div class="box" style="background-image: url(img/<?=$imgLink['img'];?>);">
              <div class="innerBox">
                <span class="material-icons">search</span>
                <p class="tipPortfolio">前往瀏覽</p>
              </div>
          </div>
        </a>
        </div>

        <div class="col-md-8 wow fadeInUp rBox">
          <div class="boxInfo">
              <div class="innerBox">
                <p class="namePortfolio"><?=$port['item'];?></p>
                <p class="skillPortfolio"><?=nl2br($port['skill']);?></p>
                <p class="textPortfolio"><?=nl2br($port['content']);?></p>
                <a href="<?=$port['link'];?>" target="_blank" class="btnDemo"><span class="arrow">►</span> DEMO</a>
              </div>
          </div>
        </div>
      </div>
    <?php
      }
    ?>
  </section>


  <div class="btnBackUP">
    <span class="material-icons">keyboard_arrow_up</span>
  </div>

  <footer>
    <p>© Copyright <span id="footerTime">2020-2022</span>. <br> All Rights Reserved. Designed by 何思逸</p>
  </footer>


  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="plugins/bootstrap.bundle.min.js"></script>
  <!-- waypoints -->
  <script src="plugins/jquery.waypoints.min.js"></script>
  <!-- Wow.js -->
  <script src="plugins/wow/wow.min.js"></script>
  <script src="js/general.js"></script>

  <script>
    
  </script>
</body>
</html>
