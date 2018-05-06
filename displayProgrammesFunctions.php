<?php
require_once 'getMoodFunctions.php';

$xmlProgrammes = simplexml_load_file("xmlFiles/programmes.xml");

$happyImages = $xmlProgrammes->xpath('/programmes/programme[@mood="happy"]/image');
$happyTitles = $xmlProgrammes->xpath('/programmes/programme[@mood="happy"]/title');

$sadImages = $xmlProgrammes->xpath('/programmes/programme[@mood="sad"]/image');
$sadTitles = $xmlProgrammes->xpath('/programmes/programme[@mood="sad"]/title');

$calmImages = $xmlProgrammes->xpath('/programmes/programme[@mood="calm"]/image');
$calmTitles = $xmlProgrammes->xpath('/programmes/programme[@mood="calm"]/title');

$stressedImages = $xmlProgrammes->xpath('/programmes/programme[@mood="stressed"]/image');
$stressedTitles = $xmlProgrammes->xpath('/programmes/programme[@mood="stressed"]/title');

$tiredImages = $xmlProgrammes->xpath('/programmes/programme[@mood="tired"]/image');
$tiredTitles = $xmlProgrammes->xpath('/programmes/programme[@mood="tired"]/title');

$awakeImages = $xmlProgrammes->xpath('/programmes/programme[@mood="awake"]/image');
$awakeTitles = $xmlProgrammes->xpath('/programmes/programme[@mood="awake"]/title');

$braveImages = $xmlProgrammes->xpath('/programmes/programme[@mood="brave"]/image');
$braveTitles = $xmlProgrammes->xpath('/programmes/programme[@mood="brave"]/title');

$scaredImages = $xmlProgrammes->xpath('/programmes/programme[@mood="scared"]/image');
$scaredTitles = $xmlProgrammes->xpath('/programmes/programme[@mood="scared"]/title');


function getImages($moodValue, $leftImages, $rightImages) {
        switch ($moodValue)    {
            case 1:
            case 2:
            case 3:
                $images = $leftImages;
                return $images;
            break;
            case 4:
            case 5:
                $images = $rightImages;
                return $images;
            break;
        }
        return $images;
}

function getTitles($moodValue, $leftTitles, $rightTitles) {
        switch ($moodValue)    {
            case 1:
            case 2:
            case 3:
                $titles = $leftTitles;
                return $titles;
            break;
            case 4:
            case 5:
                $titles = $rightTitles;
                return $titles;
            break;
        }
        return $titles;
}

if ($mood == "happy")   {
    $images = getImages($moodValue, $happyImages, $sadImages);
    $titles = getTitles($moodValue, $happyTitles, $sadTitles);
}else if ($mood == "calm")  {
    $images = getImages($moodValue, $calmImages, $stressedImages);
    $titles = getTitles($moodValue, $calmTitles, $stressedTitles);
}else if ($mood == "tired") {
    $images = getImages($moodValue, $tiredImages, $awakeImages);
    $titles = getTitles($moodValue, $tiredTitles, $awakeTitles);
}else if ($mood == "brave") {
    $images = getImages($moodValue, $braveImages, $scaredImages);
    $titles = getTitles($moodValue, $braveTitles, $scaredTitles);
}

$imagePath1 = "images/".$images[0];
$title1 = $titles[0];

$imagePath2 = "images/".$images[1];
$title2 = $titles[1];

$imagePath3 = "images/".$images[2];
$title3 = $titles[2];

$imagePath4 = "images/".$images[3];
$title4 = $titles[3];

$imagePath5 = "images/".$images[4];
$title5 = $titles[4];

echo $moodDescription."[BRK]".$imagePath1."[BRK]".$title1."[BRK]".$imagePath2."[BRK]".
        $title2."[BRK]".$imagePath3."[BRK]".$title3."[BRK]".$imagePath4."[BRK]".$title4.
        "[BRK]".$imagePath5."[BRK]".$title5;