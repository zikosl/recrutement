<?php
if(isset($_FILES["us_im"])||isset($_FILES["co_im"])) {
    if(isset($_FILES["us_im"]))
    {
        $file=$_FILES["us_im"];
    }
else
{
    $file=$_FILES["co_im"];
}
$target_dir = $_SERVER['DOCUMENT_ROOT']."/recrutment/pages/profile_pic/";
$target_file = $target_dir . basename($file["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
    $check = getimagesize($file["tmp_name"]);
    if($check !== false) {
        echo "<script>alert('File is an image - " . $check["mime"] . ".')</script>";
        $uploadOk = 1;
    } else {
        echo "<script>alert('File is not an image.')</script>";
        $uploadOk = 0;
    }
// Check if file already exists
if (file_exists($target_file)) {
    echo "<script>alert('Sorry, file already exists.')</script>";
    $uploadOk = 0;
}
// Check file size
if ($file["size"] > 500000) {
    echo "<script>alert('Sorry, your file is too large.')</script>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<script>alert('Sorry, your file was not uploaded.')</script>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($file["tmp_name"], $target_file)) {
        $target_file=str_replace($_SERVER['DOCUMENT_ROOT'],'',$target_file);
        $sql="UPDATE register SET pic='$target_file' where id='$id'";
        $con->query($sql);
        echo "<script>alert('The file ". $target_file. " has been uploaded.')</script>";
    } else {
        echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
    }
}
}
?>