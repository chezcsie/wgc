<?php
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
//MAX SPOT = 69
$i=69;


    {
		
       //echo '<h3 align="center">    <legend>+++++'.$dowMap[$week_day-1].'課表+++++</legend>    </h3> <hr>';
 
       for($j=1 ; $j<=$i ; $j++)
	   {

	               ${"json" . $j} = @curl_get_file_contents('http://52.27.235.58/zh-tw/api/schedule_period/schedule?office_id='.$j.'&month='.$month.'&format=js&callback=?');
                   ${"office" . $j} = @json_decode(${"json" . $j});  
                   //file_put_contents(${"office" . $j},  ${"office" . $j});

$fp = fopen($_SERVER['DOCUMENT_ROOT'] . ${"/office" . $j},"wb");
fwrite($fp,$content);
fclose($fp);

        }
       
}

?>