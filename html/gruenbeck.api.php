<?php
/**
  sudo apt-get install php-xml
 */

error_reporting(E_ALL);
//ini_set("display_errors", 1);

include_once 'class.GruenbeckParameter.php';

$retVal = array();
$retVal['debug'] = array();

define("GRUENBECK_PROTOCOL",    "http");
define("GRUENBECK_IP",          "192.168.2.181");

$httpCode = 200;

if(!isset($_GET['action']) || $_GET['action'] == "list") {
    $allParameters = GruenbeckParameter::getAll();
    $retVal = array();
    $retVal['action'] = array();
    $retVal['action'][] = "list";
    $retVal['action'][] = "show";
    $retVal['action'][] = "edit";
    
    $retVal['parameter'] = array();
    foreach($allParameters as $currentParam) {
        $retVal['parameter'][$currentParam->getKey()] = array("key" => $currentParam->getKey(), "displayName" => $currentParam->getDisplayName());
    }    
} else if($_GET['action'] == "show") {

    $url = GRUENBECK_PROTOCOL."://".GRUENBECK_IP."/mux_http";
    
    if(isset($_GET['clientId'])) {
        $clientId = $_GET['clientId'];
    } else {
        $clientId = rand(1,9999);    
    }
    
    if(isset($_GET['parameter'])) {
        $parameter = filter_input(INPUT_GET, 'parameter', FILTER_SANITIZE_SPECIAL_CHARS);;
        if(strpos($parameter, ",") > 0) {
            $allParams = explode(",", $parameter);
            $command = "";
            foreach($allParams as $currentParam) {
                $command .= $currentParam . GruenbeckParameter::$FIELD_SEPARATOR;
            }
        } else {
            $command = $parameter;
        }
    } else {
        $command = GruenbeckParameter::getWasserverbrauchGestern()->getKey();
    }
    
    $retVal['url'] = $url;
    $retVal['clientId'] = $clientId;
    $retVal['command'] = $command;
    $retVal['content'] = "id=" . $clientId . "&show=" . $command . "" . GruenbeckParameter::$FINALIZER;
    
    // use key 'http' even if you send the request to https://...
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => "id=" . $clientId . "&show=" . $command . "" . GruenbeckParameter::$FINALIZER
        )
    );
    
    try {
        $context  = stream_context_create($options);
        
        $retVal['debug'][] = "send request";
        $result = file_get_contents($url, false, $context);
        $retVal['debug'][] = "result received";
        
        //$result = "<data><code>ok</code><D_A_1_1>0.00</D_A_1_1><D_A_1_2>0.19</D_A_1_2><D_A_3_2>66</D_A_3_2><D_Y_1>188</D_Y_1><D_A_1_3>6.6</D_A_1_3><D_Y_5>0</D_Y_5></data>";
        $retVal['plain_response'] = htmlspecialchars($result);
    
        $xmlResponse = new SimpleXMLElement($result);
        $retVal['debug'][] = "parsed";
        $retVal['code'] = $xmlResponse->code."";
        
        $allParameters = GruenbeckParameter::getAll();
        
        foreach($xmlResponse as $key => $val) {
            $handled = false;
            if($key == "code" || $key == "error") {
                $retVal['code'] = $val."";
                $handled = true;
            }
            
            foreach($allParameters as $currentParam) {
                if($currentParam->getKey() == $key) {
                    if(strpos($key, "D_Y_2_")) {
                        $retVal['results'][$key] = array("key" => $key, "displayName" => $currentParam->getDisplayName(), "value" => $val."");
                    } else {
                        $retVal['results'][$key] = array("key" => $key, "displayName" => $currentParam->getDisplayName(), "value" => $val."", "date" => date("Y-m-d", strtotime("- ".substr($key, -1)."day")));
                    }
                    $handled = true;
                } 
            }
            
            if($handled == false) {
                $retVal['results'][$key] = array("key" => $key, "displayName" => "Unknown Field", "value" => $val."");
                $retVal['debug'][] = "unknown field: ".$key;
            }
        }
        
    } catch (Exception $e) {
        $retVal['message'] = "cannot handle response: " .$e->getMessage();
        $httpCode = 500;
    }    

} else if($_GET['action'] == "edit") {
    $retVal['message'] = "Edit Operation is not implemented yet: ".$_GET['action'];
    $httpCode = 501;
} else {
    $retVal['message'] = "Unsupported Operation: ".$_GET['action'];
    $httpCode = 501;
}
$httpCode = 200;
header("application/json");
http_response_code($httpCode);

if(!isset($_GET['debug'])) {
    unset($retVal['debug']);
}
echo json_encode($retVal);
?>