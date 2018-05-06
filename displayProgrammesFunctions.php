<?php
require_once 'getMoodFunctions.php';

libxml_use_internal_errors(true);

$xmlProgrammes = simplexml_load_file("xmlFiles/programmes.xml");

<<<<<<< HEAD
=======
if ($xmlProgrammes === false) {
    echo "Failed loading XML: ";
    foreach(libxml_get_errors() as $error) {
        echo "<br>", $error->message;
    }
}

$happyImagePaths = $xmlProgrammes->xpath('/programmes/programme[@mood="happy"]/image');
$happyTitles = $xmlProgrammes->xpath('/programmes/programme[@mood="happy"]/title');

//print_r($happyImagePaths);

$imagePath1 = "images/".$happyImagePaths[0];
$title1 = $happyTitles[0];

$imagePath2 = "images/".$happyImagePaths[1];
$title2 = $happyTitles[1];

$imagePath3 = "images/".$happyImagePaths[2];
$title3 = $happyTitles[2];

$imagePath4 = "images/".$happyImagePaths[3];
$title4 = $happyTitles[3];

$imagePath5 = "images/".$happyImagePaths[4];
$title5 = $happyTitles[4];

echo $moodDescription."[BRK]".$imagePath1."[BRK]".$title1."[BRK]".$imagePath2."[BRK]".
        $title2."[BRK]".$imagePath3."[BRK]".$title3."[BRK]".$imagePath4."[BRK]".$title4.
        "[BRK]".$imagePath5."[BRK]".$title5;

>>>>>>> parent of d7c2101... functionality done
