
<?php
$target_dir = "assets/poster/";
$target_file = $target_dir.basename($_FILES["file"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$file_name = "product".date("d").date("m").date("y").date("g").date("i").date("s").'.'.$imageFileType;
$target_file = $target_dir.$file_name;

if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)){
    echo $file_name;
}

?>