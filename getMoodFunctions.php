<?php

function getMood($mood, $moodValue)   {
    if ($mood == "happy" && $moodValue == 3){
        return "You're feeling okay";
    }
    else if ($mood == "happy" && $moodValue == 2){
        return "You are quite happy";
    }
    else if ($mood == "happy" && $moodValue == 1){
        return "You are very happy!";
    }
    else if ($mood == "happy" && $moodValue == 4){
        return "You are a bit sad";
    }
    else if ($mood == "happy" && $moodValue == 5){
        return "You are really sad";
    }
    else if ($mood == "calm" && $moodValue == 1){
        return "Feeling zen";
    }
    else if ($mood == "calm" && $moodValue == 2){
        return "Feeling fairly chill";
    }
    else if ($mood == "calm" && $moodValue == 3){
        return "You are middling";
    }
    else if ($mood == "calm" && $moodValue == 4){
        return "Feeling a bit stressed";
    }
    else if ($mood == "calm" && $moodValue == 5){
        return "Let's find something to calm you down";
    }
    else if ($mood == "tired" && $moodValue == 1){
        return "Try to stay awake for this one";
    }
    else if ($mood == "tired" && $moodValue == 2){
        return "You're pretty sleepy";
    }
    else if ($mood == "tired" && $moodValue == 3){
        return "Feeling okay";
    }
    else if ($mood == "tired" && $moodValue == 4){
        return "Let's find something exciting";
    }
    else if ($mood == "tired" && $moodValue == 5){
        return "You've got to concentrate for these ones";
    }
    else if ($mood == "brave" && $moodValue == 1){
        return "Let's find something on the scary side...";
    }
    else if ($mood == "brave" && $moodValue == 2){
        return "Here are some onptions to keep you on your toes";
    }
    else if ($mood == "brave" && $moodValue == 3){
        return "Nothing too scary then";
    }
    else if ($mood == "brave" && $moodValue == 4){
        return "You're feeling a little bit scared";
    }
    else if ($mood == "brave" && $moodValue == 5){
        return "Here are some options that won't make you jump";
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
