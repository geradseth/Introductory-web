<?php
// bootstrap the web
  require_once"mt/core/bootstrap.php";


  include_once"public/header.php";

  $url = $_SERVER['REQUEST_URI'];
  $url = trim($url,'/');
  require_once($rt->goto($url));

  //require_once"modal.php";

  require_once"public/footer.php";

  GetClient::usrAgent();