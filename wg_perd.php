<?php
set_time_limit(600);
function curl_get_file_contents($URL) 
    { 
        $c = curl_init(); 
        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($c, CURLOPT_URL, $URL); 
        $contents = curl_exec($c); 
        curl_close($c); 

        if ($contents) return $contents; 
            else return FALSE; 
    } 
//MAX SPOT = 83
$i=83; //CHANGE ME 
date_default_timezone_set('Asia/Taipei');
$date = date('m/d/Y h:i:s a', time());
$fp = fopen($_SERVER['DOCUMENT_ROOT'] . "/../../tmp/update.txt","wb");

fwrite($fp,$date);
fclose($fp);
    {
		
       //echo '<h3 align="center">    <legend>+++++'.$dowMap[$week_day-1].'課表+++++</legend>    </h3> <hr>';
 
       for($j=1 ; $j<=$i ; $j++)
	   {
	        ${"json" . $j} = @curl_get_file_contents('http://52.27.235.58/zh-tw/api/schedule_period/schedule?office_id='.$j.'&month='.$month.'&format=js&callback=?');
            //$fp = fopen($_SERVER['DOCUMENT_ROOT'] . "/json" . $j. ".txt","wb");
			$fp = fopen($_SERVER['DOCUMENT_ROOT'] . "/../../tmp/json" . $j. ".txt","wb");
            fwrite($fp, ${"json" . $j});
            fclose($fp);
        }
       
}

?>