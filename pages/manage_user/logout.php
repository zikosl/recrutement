<?php
if(!isset($_SESSION))
{
 session_start();  
}
if(isset($_GET['log_out']))
{
session_unset();
session_destroy();
if($_GET['log_out']=='yes')
{
    header('Location: http://localhost/recrutment/pages/log.php');
}
else
{
   echo '<script>location.reload();</script>';
}
}
?>