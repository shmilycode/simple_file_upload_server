<?php
$uploaddir = '/home/walle/Code/upload/save/';
$uploadfile = $uploaddir.basename($_FILES['userfile']['name']);
 
echo $uploadfile;
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
        echo "File $uploadfile is valid and was successfully uploaded.\n";
} else {
        echo "Possible file upload attack!\n";
}
  
#echo 'Here is some more debugging info:';
#print_r($_FILES);
 
    
?>
