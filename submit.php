<?php 
    $uploadDir = 'uploads/'; 
    $uploadedFile = ''; 
    if(!empty($_FILES["file"]["name"])){ 
        $fileName = basename($_FILES["file"]["name"]); 
        $targetFilePath = $uploadDir . $fileName; 
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
        $allowTypes = array('jpg', 'png', 'jpeg'); 
        if(in_array($fileType, $allowTypes)){ 
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
                $uploadedFile = $fileName; 
            }
        }
    }
?>