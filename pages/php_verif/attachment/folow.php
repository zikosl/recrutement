<?php
class follow
{
private $canid;
private $empid;
function __construct($canid,$empid)
{
    $this->canid=$canid;
    $this->empid=$empid;
    $this->rec_id();
    $this->can_id();
}
function set_follow()
{
global $con;
$date=date('Y-m-d H:i:s');
echo $date;
$sql="INSERT INTO follow (canid,empid,date) values ('$this->canid','$this->empid','$date')";
$sql=$con->query($sql);
if(!$sql)
{
    die($con->error);
}
}
function rec_id()
{
global $con;
$sql="SELECT id from empolyer where empid='$this->empid'";
$sql=$con->query($sql);
$sql=mysqli_fetch_assoc($sql);
$this->empid=$sql["id"];
}
function can_id()
{
global $con;
$sql="SELECT id from candidat where canid='$this->canid'";
$sql=$con->query($sql);
$sql=mysqli_fetch_assoc($sql);
$this->canid=$sql["id"];
}
function del_follow()
{
global $con;
$sql="DELETE FROM follow where canid='$this->canid' AND empid='$this->empid'";
$sql=$con->query($sql);
}
function count_follow()
{ 
   global $con;
   $sql="SELECT count(id) FROM follow where empid='$this->empid'";
   $sql=$con->query($sql);
   $sql=mysqli_fetch_array($sql);
   return $sql[0];

}
function test_follow()
{
global $con;
$sql="SELECT id FROM follow where canid='$this->canid' AND empid='$this->empid'";
$sql=$con->query($sql);
$sql=mysqli_fetch_assoc($sql);
return !empty($sql);
}
}
?>