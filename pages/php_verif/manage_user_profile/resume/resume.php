<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/recrutment/pages/php_verif/manage_user_profile/educ.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/recrutment/pages/php_verif/manage_user_profile/experience.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/recrutment/pages/php_verif/manage_user_profile/aword.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/recrutment/pages/php_verif/manage_user_profile/skill.php';
?>
<?php
$educ=new educ();
$x=$educ->get_by_id($id);
$educ=array();
$i=0;
while($row=mysqli_fetch_assoc($x))
{
$educ[$i]=new educ($row['title'],$row['univ'],$row['ent_date'],$row['ser_date'],$row['qual'],$row['dscrpt']);
$i++;
}
//Experience
$expr=new expert();
$x=$expr->get_by_id($id);
$expr=array();
$i=0;
while($row=mysqli_fetch_assoc($x))
{
$expr[$i]=new expert($row['title'],$row['company'],$row['ent_date'],$row['ser_date'],$row['dscrpt']);
$i++;
}
//Skill
$skill=new skill();
$x=$skill->get_by_id($id);
$skill=array();
$i=0;
while($row=mysqli_fetch_assoc($x))
{
$skill[$i]=new skill($row['title'],$row['prsnt']);
$i++;
}
//Awords
$aword=new aword();
$x=$aword->get_by_id($id);
$aword=array();
$i=0;
while($row=mysqli_fetch_assoc($x))
{
$aword[$i]=new aword($row['title'],$row['from_'],$row['to_'],$row['dscrpt']);
$i++;
}
?>