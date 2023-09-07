<?php
if(isset($_POST['save_info']))
{
  $about=$_POST['dsc'];
$about=str_replace('id="null"',"",$about);
$about=test_input($about);
{
if(!empty($about))
{
    $about=mysqli_real_escape_string($con,$about);
    $exp->set_dscrpt($about);
}
}
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}  
?>