<?php
    if(empty($_REQUEST['state'])) {
        echo "No State Sent";
    }
    else {
        $search = trim($_REQUEST['state']);
        switch($search) {
            case "MO" :
                $result = '[ { "value" : "stlou", "tittle" : "St. Louis" }, ' . 
                        '{ "value" : "kc", "tittle" : "Kansas City" } ]';
                break;

            case "WA" :         
                $result = '[ { "value" : "seattle", "tittle" : "Seattle" }, ' . 
                        '{ "value" : "spokane", "tittle" : "Spokane" }, ' . 
                        '{ "value" : "olympia", "tittle" : "Olympia" } ]';
                break;

            case "CA" :            
                $result = '[ { "value" : "sanfran", "tittle" : "San Francisco" }, ' . 
                        '{ "value" : "la", "tittle" : "Los Angeles" }, ' . 
                        '{ "value" : "web2", "tittle" : "Web 2.0 City" }, ' . 
                        '{ "value" : "barcamp", "tittle" : "BarCamp" } ]';
                break;
            
            case "ID" :                   
                $result = '[ { "value" : "boise", "tittle" : "Boise" } ]';
                break;

            default :                     
                $result = '[ { "value" : "", "tittle" : "No Cities Found" } ]';
                break;
        }
       
        echo $result;
    }
?>
