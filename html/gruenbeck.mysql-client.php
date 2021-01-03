<?php

error_reporting(E_ALL);

include_once 'config.inc.php';
include_once 'class.GruenbeckParameter.php';

ini_set("display_errors", 1);

$retVal = array();
$retVal['debug'] = array();

//$command = GRUENBECK_API_COMMAND;
$command = "";
$command .= GruenbeckParameter::getA1AktuellerDurchfluss() . GruenbeckParameter::$FIELD_SEPARATOR;
//$command .= GruenbeckParameter::getA1Restzeit() . GruenbeckParameter::$FIELD_SEPARATOR;
$command .= GruenbeckParameter::getA1Ueber() . GruenbeckParameter::$FIELD_SEPARATOR;
$command .= GruenbeckParameter::getWasserverbrauchGestern() . GruenbeckParameter::$FIELD_SEPARATOR;
$command .= GruenbeckParameter::getA1Kapazitaetszahl() . GruenbeckParameter::$FIELD_SEPARATOR;
$command .= GruenbeckParameter::getAktuellerRegenerationsschritt() . GruenbeckParameter::$FIELD_SEPARATOR;
$command .= GruenbeckParameter::getDatum() . GruenbeckParameter::$FIELD_SEPARATOR;
$command .= GruenbeckParameter::getUhrzeit() . GruenbeckParameter::$FIELD_SEPARATOR;

$link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASS, MYSQL_DB);
$httpCode = 200;

if($link) {
    $retVal['debug'][] = "connected to database";
    
    // use key 'http' even if you send the request to https://...
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/json\r\n",
            'method'  => 'GET'
        )
    );

    $url = GRUENBECK_API_ENDPOINT."?action=show&clientId=1234&parameter=".$command;
    
    try {
        $context  = stream_context_create($options);
        
        $retVal['debug'][] = $url;
        $retVal['debug'][] = "send request";
        $result = file_get_contents($url, false, $context);
        if($result !== false) {
            $retVal['debug'][] = "valid result received";
        
            $jsonResponse = json_decode($result);
            
            $retVal['debug'][] = "parsed";
            $retVal['code'] = $jsonResponse->code;
            
            $allParameters = GruenbeckParameter::getAll();
            
            $databaseFields = "";
            $databaseValues = "";
            
            if(isset($jsonResponse->results)) {
                foreach($jsonResponse->results as $curentResult) {
                    $handled = false;
                    
                    foreach($allParameters as $currentParam) {
                        if($currentParam->getKey() == $curentResult->key) {
                            $retVal['results'][$curentResult->key] = array("key" => $curentResult->key, "displayName" => $currentParam->getDisplayName(), "value" => $curentResult->value."");
                            $handled = true;
                            
                            if($currentParam->getDatabaseColumnName() != "") {
                                $databaseFields .= $currentParam->getDatabaseColumnName(). ", ";
                                $databaseValues .= $curentResult->value. ", ";
                            } else {
                                $retVal['debug'][] = "parameter has no database field, ignore for insert: ".$curentResult->key;
                            }
                        } 
                    }
                    
                    if($handled == false) {
                        $retVal['results'][$curentResult->key] = array("key" => $curentResult->key, "displayName" => "Unknown Field", "value" => $curentResult->value."");
                        $retVal['debug'][] = "unknown field: ".$curentResult->key;
                    }
                }
            } else {
                $retVal['debug'][] = "jsonResponse->results does not exist";
            }
            
            // Cut off last ", "
            $databaseFields = substr($databaseFields,0, -2);
            $databaseValues = substr($databaseValues,0, -2);
            
            // Prepare the Statement
            $insert = "insert into gruenbeck (".$databaseFields.") values (".$databaseValues.");";
            $retVal['sql'] = $insert;
            
            //if(mysqli_query($link, $insert)) {
            //    $retVal['message'] = "Done";
            //} else {
            //    $retVal['sql'] = $insert;
            //}
            
            mysqli_close($link); 
        } else {
            $httpCode = 200;
            $retVal['message'] = "Received Error Response fom JSON Interface";
        }
    } catch (Exception $e) {
        $retVal['message'] = "cannot handle response: " .$e->getMessage();
        $httpCode = 200;
    }    
    
       
} else {
    $retVal ['message'] = mysqli_connect_errno() . " - " . mysqli_connect_error();
}

header("application/json");
echo json_encode($retVal);
?>
