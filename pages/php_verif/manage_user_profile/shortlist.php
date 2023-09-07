<?php
class shortlist
{
private $canid;
private $jobid;
function __construct($canid,$jobid)
{
    $this->canid=$canid;
    $this->jobid=$jobid;
    $this->can_id();
}
function set_shortlist()
{
global $con;
$sql="INSERT INTO shortlist (canid,jobid) values ('$this->canid','$this->jobid')";
$sql=$con->query($sql);
if(!$sql)
{
    die($con->error);
}
}
function can_id()
{
global $con;
$sql="SELECT id from candidat where canid='$this->canid'";
$sql=$con->query($sql);
$sql=mysqli_fetch_assoc($sql);
$this->canid=$sql["id"];
}
function del_shortlist()
{
global $con;
$sql="DELETE FROM shortlist where canid='$this->canid' AND jobid='$this->jobid'";
$sql=$con->query($sql);
}
function count_shortlist()
{ 
   global $con;
   $sql="SELECT count(id) FROM shortlist where jobid='$this->jobid'";
   $sql=$con->query($sql);
   $sql=mysqli_fetch_array($sql);
   return $sql[0];

}
function test_shortlist()
{
global $con;
$sql="SELECT id FROM shortlist where canid='$this->canid' AND jobid='$this->jobid'";
$sql=$con->query($sql);
$sql=mysqli_fetch_assoc($sql);
return !empty($sql);
}
}
?>