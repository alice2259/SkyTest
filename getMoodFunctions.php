<?php

function getMood($mood, $moodValue)   {
    if ($mood == "happySad" && $moodValue == 3){
        return "You are middling";
    }
    else if ($mood == "happySad" && $moodValue == 2){
        return "You are quite happy";
    }
    else if ($mood == "happySad" && $moodValue == 1){
        return "You are very happy!";
    }
    else if ($mood == "happySad" && $moodValue == 4){
        return "You are a bit sad";
    }
    else if ($mood == "happySad" && $moodValue == 5){
        return "You are really sad";
    }
}

$mood = $_REQUEST["mood"];
$moodValue = $_REQUEST["moodValue"];

$moodDescription = getMood($mood, $moodValue);

echo $moodDescription;


//function readXMLFile()  {
//    $xmlProgrammes = simplexml_load_file($permFile) or
//            die("Could not load file");
//    foreach ($xmlProgrammes->children() as $programme)  {
//        echo $programme->title;
//    }  
//}
