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

