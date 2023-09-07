<?php
$x=$_POST['name'];
setcookie('arr',serialize($x),time()+60*60*24*30*12*3,"/");
echo json_encode(['code'=>200, 'msg'=>$_POST['name']]);
?>