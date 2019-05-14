<?php
session_start();
if(     $_SESSION['rmgr*&^school'] == ''  ||    !isset($_SESSION['rmgr*&^school']) || $_SESSION['rmgr*&^school'] == 'False'    )
{  
header("location:index.php");
}

?>