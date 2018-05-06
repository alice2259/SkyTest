<?php

function howHappy($moodValue)    {
    if ($moodValue == 1){
        return "You are very happy!";
    }
    else if ($moodValue == 2){
        return "You are quite happy";
    }
    else if ($moodValue == 3){
        return "You're feeling okay";
    }
    else if ($moodValue == 4){
        return "You are a bit sad";
    }
    else if ($moodValue == 5){
        return "You are really sad";
    }
}

function howCalm($moodValue) {
    if ($moodValue == 1){
        return "Feeling zen";
    }
    else if ($moodValue == 2){
        return "Feeling fairly chill";
    }
    else if ($moodValue == 3){
        return "Feeling fine";
    }
    else if ($moodValue == 4){
        return "Feeling a bit stressed";
    }
    else if ($moodValue == 5){
        return "Let's find something to calm you down";
    }
}

function howTired($moodValue)    {
    if ($moodValue == 1){
        return "Try to stay awake for this one";
    }
    else if ($moodValue == 2){
        return "You're pretty sleepy";
    }
    else if ($moodValue == 3){
        return "Feeling okay";
    }
    else if ($moodValue == 4){
        return "Let's find something exciting";
    }
    else if ($moodValue == 5){
        return "You've got to concentrate for these ones";
    }
}

function howBrave($moodValue)    {
    if ($moodValue == 1){
        return "Let's find something on the scary side...";
    }
    else if ($moodValue == 2){
        return "Here are some options to keep you on your toes";
    }
    else if ($moodValue == 3){
        return "Nothing too scary then";
    }
    else if ($moodValue == 4){
        return "You're feeling a little bit scared";
    }
    else if ($moodValue == 5){
        return "Here are some options that won't make you jump";
    }
}

$mood = $_REQUEST["mood"];
$moodValue = $_REQUEST["moodValue"];

if ($mood == "happy")   {
    $moodDescription = howHappy($moodValue);
}
else if ($mood == "calm")   {
    $moodDescription = howCalm($moodValue);
}
else if ($mood == "tired")   {
    $moodDescription = howTired($moodValue);
}
else if ($mood == "brave")   {
    $moodDescription = howBrave($moodValue);
}

//echo $moodDescription



//function readXMLFile()  {
//    $xmlProgrammes = simplexml_load_file($permFile) or
//            die("Could not load file");
//    foreach ($xmlProgrammes->children() as $programme)  {
//        echo $programme->title;
//    }  
//}
