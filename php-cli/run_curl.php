<?php
$woeid = 12797535;
$total_time = array();
$iterate = 100;

for ($i=0; $i<$iterate; $i++){
    $woeid += 1;
    $target_url = 'http://gws2.maps.yahoo.com/FindLocation?woeid=' . $woeid . '&locale=en-US&appid=search&count=1';

    //echo $target_url . PHP_EOL;
    $info = curl_api($target_url);
    $total_time[] = $info['total_time'];
}

sort($total_time);
print_r($total_time);
echo 'average time = ' . array_sum($total_time) / count($total_time) . PHP_EOL;
echo 'maximum time = ' . max($total_time) . PHP_EOL;


function curl_api($url){
    $ch = curl_init($url);
    curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );

    // Execute
    curl_exec($ch);

    // Check if any error occurred
    if(!curl_errno($ch))
    {
     $info = curl_getinfo($ch);
    }

    // Close handle
    curl_close($ch);
    return $info;
}
?>