<?php 

session_start();
unset($_SESSION['psad']);
unset($_SESSION['adm']);

header("Location: ../personal/jdadmin.php");
exit();




 ?>