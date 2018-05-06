<?php

const InputKey = 'uploadedFile';
const AllowedTypes = ['text/xml'];

function checkUpload()  {
    if (empty($_FILES[InputKey])) {
            die ("Looks like you haven't uploaded a file.");
        }
        if ($_FILES[InputKey]['error']>0) {
            die("There's an error. Please fix before you continue.");
        }
        if (!in_array($_FILES[InputKey]['type'], AllowedTypes)) {
            die("The file you've uploaded isn't the right type.");
        }
}
            
function uploadFile()   {
            
    checkUpload();
        
    $tmpFile = $_FILES[InputKey]['tmp_name'];
    $permFile= 'xmlFiles/'.$_FILES[InputKey]['name'];

    if (!move_uploaded_file($tmpFile, $permFile)) {
        die ("Error. File not moved.");
    }
    if (file_exists($tmpFile)) {
        unlink($tmpFile);
    }
//    return $permFile;
}
