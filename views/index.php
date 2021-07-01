<?php
  $mt = $sendqry->fetchcont();

  $msg = "";

  $tutorials = $sendqry->getTutorials();

  if (isset($_POST['sndmsg'])) {
    // code...
    if(!empty($_POST['Name'])||!empty($_POST['Email'])||!empty($_POST['Subject'])||!empty($_POST['Message'])){
      $nm = e($_POST['Name']);
      $eml = e($_POST['Email']);
      $sbj = e($_POST['Subject']);
      $msg = e($_POST['Message']);

      $sql = "INSERT INTO tbl_client_msgs
              (client_name,client_email,msg_subject,msg)
              VALUES 
              (?,?,?,?)
              ";

      $sndmsg = ($sendqry->insertRow($sql, [$nm,$eml,$sbj,$msg])) ? $msg="success" : $msg="fail" ;
    }
    else $msg = "fillout";
  }

?>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("mtech/mac.jpg");
  min-height: 100%;
}

.mt_bar .mt_button {
  padding: 16px;
}
</style>
<title>Mteule Tech</title>
<!-- Header with full-height image -->
<header class="bgimg-1 mt_display-container mt_dark-grey" id="home">
  <div class="mt_display-left mt_text-white" style="padding:48px">
    <span class="mt_jumbo mt_hide-small">Learn something that matters</span><br>
    <span class="mt_xxlarge mt_hide-large mt_hide-medium">Learn something that matters</span><br>
    <span class="mt_large">Stop wasting valuable time with things that just isn't wealth.</span>
    <p><a href="#about" class="mt_button mt_white mt_padding-large mt_large mt_margin-top mt_opacity mt_hover-opacity-off">Learn more and start today</a></p>
  </div> 
  <div class="mt_display-bottomleft mt_text-grey mt_large" style="padding:24px 48px">
    <a href="https://www.youtube.com/channel/UCbjiCpJEU2tP48HlbRQahqA?sub_confirmation=1"><i class="fa fa-youtube mt_hover-opacity"></i></a>
    <a href="https://facebook.com/mteuletech"><i class="fa fa-facebook-official mt_hover-opacity"></i></a>
    <a href="https://instagram.com/mteuletech"><i class="fa fa-instagram mt_hover-opacity"></i></a>
    <a href="https://twitter.com/mteuletech"><i class="fa fa-twitter mt_hover-opacity"></i></a>
    <a href="https://linkedin.com/mteuletech"><i class="fa fa-linkedin mt_hover-opacity"></i></a>
  </div>
</header>



<!-- Article Section -->
<div class="mt_container" style="padding:128px 16px" id="Tutorial">
  <h3 class="mt_center" id="THeading">Tutorial And Tranding Tools</h3>
  <div class="mt_row-padding mt_grayscale" style="margin-top:64px" id="TContent">

<?php
  foreach ($tutorials as $tut) {
    // code...
  ?>
      <div class="mt_col l3 m6 mt_margin-bottom">
        <div class="mt_card">
          <img src="tutorials/tutoimage/<?= $tut['fPhoto'];?>" alt="<?= $tut['usrnm']?>" style="width:100%">
          <div class="mt_container">
            <h3><?= $tut['sTitle'];?></h3>
            <p class="mt_opacity"><?= $tut['sPubDate'];?></p>
            <p><?= $tut['sDesc'];?></p>
            <p><button class="mt_button mt_light-grey mt_block" onclick="getTutorial(<?= $tut['sid'];?>)"><i class="fa fa-envelope"></i> Read More</button></p>
          </div>
        </div>
    </div>
<?php
  }
  ?>
  </div>
</div>

<!-- Promo Section "Statistics" -->
<div class="mt_container mt_row mt_center mt_dark-grey mt_padding-64">
  <div class="mt_quarter">
  </div>
  <div class="mt_quarter">
  </div>
  <div class="mt_quarter">
  </div>
  <div class="mt_quarter">
  </div>
</div>

<!-- Work Section -->
<div class="mt_container" style="padding:128px 16px" id="Works">
  <h3 class="mt_center">OUR WORK</h3>
  <p class="mt_center mt_large">What we've done for people</p>

  <div class="mt_row-padding" style="margin-top:64px">
<?php

  $works = $sendqry->fetchworks();

  foreach($works as $work){
    if ($work['wType']=="Programmer") {
?>
    <div class="mt_col l3 m6">
      <img src="mtech/<?=$work['wFPhoto'];?>" style="width:100%" onclick="onClick(this)" class="mt_hover-opacity" alt="<?=$work['wTitle'];?>">
    </div>
<?php
    }
  }
?>
    <div class="mt_col l3 m6">
      <img src="mtech/tech_phone.jpg" style="width:100%" onclick="onClick(this)" class="mt_hover-opacity" alt="A phone">
    </div>
    <div class="mt_col l3 m6">
      <img src="mtech/tech_drone.jpg" style="width:100%" onclick="onClick(this)" class="mt_hover-opacity" alt="A drone">
    </div>
    <div class="mt_col l3 m6">
      <img src="mtech/tech_sound.jpg" style="width:100%" onclick="onClick(this)" class="mt_hover-opacity" alt="Soundbox">
    </div>
  </div>

  <div class="mt_row-padding mt_section">
<?php

  $works = $sendqry->fetchworks();

  foreach($works as $work){
    if ($work['wType']=="Hacking") {
      // code...
?>
    <div class="mt_col l3 m6">
      <img src="mtech/<?=$work['wFPhoto'];?>" style="width:100%" onclick="onClick(this)" class="mt_hover-opacity" alt="<?=$work['wTitle'];?>">
    </div>
<?php
    }
  }
?>
    <div class="mt_col l3 m6">
      <img src="mtech/tech_camera.jpg" style="width:100%" onclick="onClick(this)" class="mt_hover-opacity" alt="A camera">
    </div>
    <div class="mt_col l3 m6">
      <img src="mtech/tech_typewriter.jpg" style="width:100%" onclick="onClick(this)" class="mt_hover-opacity" alt="A typewriter">
    </div>
    <div class="mt_col l3 m6">
      <img src="mtech/tech_tableturner.jpg" style="width:100%" onclick="onClick(this)" class="mt_hover-opacity" alt="A tableturner">
    </div>
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="mt_modal mt_black" onclick="this.style.display='none'">
  <span class="mt_button mt_xxlarge mt_black mt_padding-large mt_display-topright" title="Close Modal Image">×</span>
  <div class="mt_modal-content mt_animate-zoom mt_center mt_transparent mt_padding-64">
    <img id="img01" class="mt_image">
    <p id="caption" class="mt_opacity mt_large"></p>
  </div>
</div>

<!-- Skills Section -->
<div class="mt_container mt_light-grey mt_padding-64" id="Skills">
  <div class="mt_row-padding">
    <div class="mt_col m6">
      <h3>Our Skills.</h3>
      <p>These are Skills That enable Us to Carry Tasks it is not limited one</p>
      <p>You get go to our about page by Clicking on Navigation menu button above on menu bars</p>
    </div>
    <div class="mt_col m6">
      <p class="mt_wide"><i class="fa fa-desktop mt_margin-right"></i>Full Stack Developer</p>
      <div class="mt_grey">
        <div class="mt_container mt_dark-grey mt_center" style="width:90%">90%</div>
      </div>
      <p class="mt_wide"><i class="fa fa-desktop mt_margin-right"></i>Hacking</p>
      <div class="mt_grey">
        <div class="mt_container mt_dark-grey mt_center" style="width:85%">85%</div>
      </div>
      <p class="mt_wide"><i class="fa fa-camera mt_margin-right"></i>Photography</p>
      <div class="mt_grey">
        <div class="mt_container mt_dark-grey mt_center" style="width:90%">90%</div>
      </div>
      <p class="mt_wide"><i class="fa fa-desktop mt_margin-right"></i>Web Design</p>
      <div class="mt_grey">
        <div class="mt_container mt_dark-grey mt_center" style="width:85%">85%</div>
      </div>
      <p class="mt_wide"><i class="fa fa-photo mt_margin-right"></i>Photoshop</p>
      <div class="mt_grey">
        <div class="mt_container mt_dark-grey mt_center" style="width:75%">75%</div>
      </div>
      <p class="mt_wide"><i class="fa fa-photo mt_margin-right"></i>Blender</p>
      <div class="mt_grey">
        <div class="mt_container mt_dark-grey mt_center" style="width:70%">70%</div>
      </div>
    </div>
  </div>
</div>

<!-- Contact Section -->
<div class="mt_container mt_light-grey" style="padding:128px 16px" id="contact">
  <h3 class="mt_center">CONTACT</h3>
  <p class="mt_center mt_large">You have something. Send us a message:</p>
  <div style="margin-top:48px">
    <p><i class="fa fa-map-marker fa-fw mt_xxlarge mt_margin-right"></i>Address: <?= $mt['mt_address']; ?></p>
    <p><i class="fa fa-phone fa-fw mt_xxlarge mt_margin-right"></i>Phone: <?= $mt['mt_phone']; ?></p>
    <p><i class="fa fa-envelope fa-fw mt_xxlarge mt_margin-right"> </i> Email: <?= $mt['mt_email']; ?></p>
    <br>
    <form name="cont_form" method="post" id="cont-form" action="">
      <p><input class="mt_input mt_border" type="text" placeholder="Name" required name="Name" id="name"></p>
      <p><input class="mt_input mt_border" type="text" placeholder="Email" required name="Email" id="mail"></p>
      <p><input class="mt_input mt_border" type="text" placeholder="Subject" required name="Subject" id="subj"></p>
      <p><input class="mt_input mt_border" type="text" placeholder="Message" required name="Message" id="msg"></p>
      <p class="mt_right">
        
          <i class="fa fa-paper-plane"></i> <input class="mt_button mt_black" type="submit" name="sndmsg" value="SEND MESSAGE">
      </p>
    </form>
    <!-- Image of Mteule Tech Office -->
    <img src="techphoto/field-work.jpg" class="mt_image mt_greyscale" style="width:100%;margin-top:48px" alt="Working Field">
  </div>
</div>
