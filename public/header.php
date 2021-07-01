<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="public/css/mt.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="public/css/font-awesome.min.css">
<body>

<!-- Navbar (sit on top) -->
<div class="mt_top mt_red">
  <div class="mt_bar mt_white mt_card" id="Nav-bar">
    <a href="/" class="mt_bar-item mt_button mt_wide"><img src="MT.png" class="mt_circle mt_margin-right" style="width:46px" alt="MT">Mteule Tech</a>
    <!-- Right-sided navbar links -->
    <div class="mt_right mt_hide-small">
      <a href="/about" class="mt_bar-item mt_button"><i class="fa fa-user-secret"></i>ABOUT</a>
      <a href="/#Tutorial" class="mt_bar-item mt_button"><i class="fa fa-pencil-square-o"></i> SESSION</a>
      <a href="/#Works" class="mt_bar-item mt_button"><i class="  fa fa-th"></i> WORK</a>
      <a href="/#Skills" class="mt_bar-item mt_button"><i class="fa fa-umbrella"></i> SKILLS</a>
      <a href="/#contact" class="mt_bar-item mt_button"><i class="fa fa-envelope"></i> CONTACT</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="mt_bar-item mt_button mt_right mt_hide-large mt_hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="mt_sidebar mt_bar-block mt_black mt_card mt_animate-left mt_hide-medium mt_hide-large" style="display:none" id="menubar">
  <a href="/about" onclick="w3_close()" class="mt_bar-item mt_button">ABOUT</a>
  <a href="/#Tutorial" onclick="w3_close()" class="mt_bar-item mt_button">SESSION</a>
  <a href="/#Works" onclick="w3_close()" class="mt_bar-item mt_button">WORK</a>
  <a href="/#Skills" onclick="w3_close()" class="mt_bar-item mt_button">SKILLS</a>
  <a href="/#contact" onclick="w3_close()" class="mt_bar-item mt_button">CONTACT</a>
</nav>
