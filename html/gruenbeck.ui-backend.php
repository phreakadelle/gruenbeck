<?php

error_reporting(E_ALL);

include_once 'config.inc.php';

$step = 60;

$link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASS, MYSQL_DB);
$httpCode = 200;

if($link) {
    if(isset($_GET['item'])) {
        $item = $_GET['item'];
    } else {
        $item = "current_flow";
    }
    
    $limit = "";
    if(isset($_GET['limit'])) {
        $limit = int($limit) * -1;
        $limit = "and `updated` > timestampadd(day, ".$limit.", now())";
    } else {
        $limit = '`updated` > timestampadd(day, -90, now())';
    }
    
    $result = mysqli_query($link, "select UNIX_TIMESTAMP(updated) as ts, ROUND(".$item.",3) as value from gruenbeck where ".$limit." order by updated desc;");
    if(mysqli_num_rows($result)) {
        $allResults = array();
        while($obj = $result->fetch_array()){
            $allResults[] = $obj;
        }
        
        $allResults = array_reverse($allResults);
        
        $lasttime = 0;
        $lastvalue = 0;
        foreach($allResults as $current) {
            //if($lasttime > 0) {
            //    $diff = $current['ts'] - $lasttime;
            //}
            
            //my @out = ( @$vals[0]*1.0, @$vals[1]*1.0);
            //my $timenow = @$vals[0]*1.0;
            //my $valnow = @$vals[1]*1.0;
            //if($lasttime > 0) {
            //    my $timediff = $timenow - $lasttime;
            //    if($timediff > $step ) {
            //        while(($lasttime + $step) < $timenow) {
            //            $lasttime += $step;
            //            my @fill = ($lasttime, $lastval);
            //            push(@newarray, \@fill);
            //        } 
            //    }
            //}
            
            $retVal[] = array($current['ts'] * 1.0, $current['value'] * 1.0);
            
            //$lasttime = $current['ts'];
            //$lastvalue = $current['value'];
        }
    } else {
        $retVal['message'] = "no results";
    }
    
    $result->close();
    mysqli_connect($link);
} else {
    $retVal['message'] = "no connection to mysql server";
    $httpCode = 500;
}

header("application/json");
http_response_code($httpCode);

echo json_encode($retVal);
?>