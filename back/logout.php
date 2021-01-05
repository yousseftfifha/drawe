<?php
session_start ();
unset($_SESSION['aname']);
header ('location:../../drawe/back/index.php');
?>
