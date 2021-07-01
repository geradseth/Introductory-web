<?php
# Function for logout page
unset($_SESSION['mt_web_session']);
session_destroy();
header("location: /");
?>