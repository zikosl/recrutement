<?php
require_once $_SERVER['DOCUMENT_ROOT'].'\recrutment\pages\php_verif\manage_log_register\db.php';
?>
<?php
$sql='SELECT city,country,region From location';
$sql=$con->query($sql);
while($row=mysqli_fetch_assoc($sql))
{
$a[]=$row['city'].", ".$row['region'].", ".$row['country'];
}
$a=array_unique($a);
$q = $_REQUEST["q"];

$hint = "";

if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        $n=strtolower($name);
        if (strpos($n,$q)!==false) {
            if ($hint === "") {
                $hint = '<p>'.$name.'</p><hr class="dropdown-divider w-75 mx-auto my-0">';
            } else {
                $hint .= "<p>$name</p><hr class='dropdown-divider w-75 mx-auto my-0'>";
            }
        }
    }
}
echo $hint === "" ? "no suggestion" : $hint;
?>