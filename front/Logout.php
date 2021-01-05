<?php
session_start ();
unset($_SESSION['uname']);
header ('location:../../drawe/front/index.php');
?>
