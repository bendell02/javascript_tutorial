<?php
    if(empty($_REQUEST['state'])) {
        echo "No State Sent";
    }
    else {
        $search = trim($_REQUEST['state']);
        switch($search) {
            case "MO" :
                $result = "<city><value>stlou</value><tilte>St. Louis</title></city>" .
                        "<city><value>kc</value><title>Kansas City</title></city>";
                break;

            case "WA" :
                $result = "<city><value>seattle</value><tilte>Seattle</title></city>" .
                        "<city><value>spokane</value><title>Spokane</title></city>" .
                        "<city><value>olympia</value><title>Olympia</title></city>";
                break;

            case "CA" :
                $result = "<city><value>sanfran</value><tilte>San Francisco</title></city>" .
                        "<city><value>la</value><title>Los Angeles</title></city>" .
                        "<city><value>web2</value><title>Web 2.0 City</title></city>" .
                        "<city><value>barcamp</value><title>BarCamp</title></city>";
                break;
            
            case "ID" :
                $result = "<city><value>boise</value><title>Boise</title></city>";
                break;
            default :
                $result = "<city><value></value><title>No Cities Found</title></city>";
                break;
        }

        $result = '<?xml version="1.0" encoding="UTF-8" ?>' .
            "<cities>" . $result . "</cities>";
        
        header("Content-Type: text/xml; charset=utf-8");

        echo $result;
    }
?>
