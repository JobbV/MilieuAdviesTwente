<?php

function controleerInput($vraag, $antwoord, $herhaal)
{
    $foutmelding = '';

    if(empty($vraag)){
        $foutmelding = "Voer een vraag in";
    }
    if(empty($antwoord)){
    $foutmelding .= "<br> voer een antwoord in ";
    }
    return $foutmelding;
}