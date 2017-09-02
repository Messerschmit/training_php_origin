<?php

    $string = "LoRмммM abc impuls doleren abc abc impack";
    
    echo '<pre>'.$string.'</pre>';
    
    $pattern = '/lor*m/i';
    
    //echo '<br>';
    
    echo preg_match_all($pattern, $string, $matches);
    echo '<br>';
    
    $url = "http://komunitasweb.com/";
    
    if (preg_match('(?:(?:ht|f)tp?://)?(?:[\\-\\w]+:[\\-\\w]+@)?(?:[0-9a-z][\\-0-9a-z]*[0-9a-z]\\.)+[a-z]{2,6}(?::\\d{1,5})?(?:[?/\\\\#][?!^$.(){}:|=[\\]+\\-/\\\\*;&~#@,%\\wА-Яа-я]*)?', $url)) {
        echo "Your url is ok.";
    } else {
        echo "Wrong url.";
    } 
     
?>