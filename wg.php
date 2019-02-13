<html>

<body>

<h1>WORLDGYM CLASS</h1>
<h2>Only for Taipei City</h2>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59633225-1', 'auto');
  ga('send', 'pageview');

</script>
<script>
    function visitPage(){
        window.location='wg.php?class_type=75';
    }
	    function visitPage2(){
        window.location='wg.php?class_type=76';
    }
</script>
Supported classes:<br>
<button onclick="visitPage();">BODY COMBAT</button>
<button onclick="visitPage2();">BODY PUMP</button>
<?php
$class_type = $_GET['class_type'];
if ($class_type == 0)
echo "<br><br> 請先選擇課程";
else if ($class_type == 75)
echo "<br><br> Selected class: BODY COMBAT";
else if ($class_type == 76)
echo "<br><br> Selected class: BODY PUMP";

$month = date('n');
$json1 = file_get_contents('http://www.worldgymtaiwan.com/zh-tw/api/schedule_period/schedule?office_id=1&month='.$month.'&format=js&callback=?');
$json1 = substr($json1,170);
//echo htmlentities((string)$json1);
$office1 = json_decode($json1);
/*
switch(json_last_error()) {
    case JSON_ERROR_DEPTH:
        echo ' - Maximum stack depth exceeded';
    break;
    case JSON_ERROR_CTRL_CHAR:
        echo ' - Unexpected control character found';
    break;
    case JSON_ERROR_SYNTAX:
        echo ' - Syntax error, malformed JSON';
    break;
    case JSON_ERROR_NONE:
        echo ' - No errors';
    break;
}
*/
$json2 = file_get_contents('http://www.worldgymtaiwan.com/zh-tw/api/schedule_period/schedule?office_id=2&month='.$month.'&format=js&callback=?');
$json2 = substr($json2,170);
$office2 = json_decode($json2);

$json3 = file_get_contents('http://www.worldgymtaiwan.com/zh-tw/api/schedule_period/schedule?office_id=3&month='.$month.'&format=js&callback=?');
$json3 = substr($json3,170);
$office3 = json_decode($json3);

$json4 = file_get_contents('http://www.worldgymtaiwan.com/zh-tw/api/schedule_period/schedule?office_id=4&month='.$month.'&format=js&callback=?');
$json4 = substr($json4,170);
$office4 = json_decode($json4);

$json5 = file_get_contents('http://www.worldgymtaiwan.com/zh-tw/api/schedule_period/schedule?office_id=5&month='.$month.'&format=js&callback=?');
$json5 = substr($json5,170);
$office5 = json_decode($json5);

$json6 = file_get_contents('http://www.worldgymtaiwan.com/zh-tw/api/schedule_period/schedule?office_id=6&month='.$month.'&format=js&callback=?');
$json6 = substr($json6,170);
$office6 = json_decode($json6);

$json7 = file_get_contents('http://www.worldgymtaiwan.com/zh-tw/api/schedule_period/schedule?office_id=7&month='.$month.'&format=js&callback=?');
$json7 = substr($json7,170);
$office7 = json_decode($json7);

$json8 = file_get_contents('http://www.worldgymtaiwan.com/zh-tw/api/schedule_period/schedule?office_id=8&month='.$month.'&format=js&callback=?');
$json8 = substr($json8,170);
$office8 = json_decode($json8);

$json9 = file_get_contents('http://www.worldgymtaiwan.com/zh-tw/api/schedule_period/schedule?office_id=9&month='.$month.'&format=js&callback=?');
$json9 = substr($json9,170);
$office9 = json_decode($json9);

$json10 = file_get_contents('http://www.worldgymtaiwan.com/zh-tw/api/schedule_period/schedule?office_id=31&month='.$month.'&format=js&callback=?');
$json10 = substr($json10,170);
//echo htmlentities((string)$json1);
$office10 = json_decode($json10);

function getClass($json_res, $office, $weekday) {




// listing posts
//for ($i = 1; $i < 8; $i++) {
$office_name = '';
		switch ($office)
		{
		    case 1: 
			    {$office_name = '101店'; 
				}
				break;
		    case 2: 
			    {$office_name = '民生店'; 
				}
				break;
		    case 3: 
			    {$office_name = '南京店'; 
				}
				break;
		    case 4: 
			    {$office_name = '大安店'; 
				}
				break;
		    case 5: 
			    {$office_name = '西門店'; 
				}
				break;		
		    case 6: 
			    {$office_name = '站前店'; 
				}
				break;		
		    case 7: 
			    {$office_name = '天母店'; 
				}
				break;		
		    case 8: 
			    {$office_name = '統領店'; 
				}
				break;		
		    case 9: 
                {$office_name = '內湖店'; 
				}
				break;			
		    case 10: 
			    {$office_name = '公館店'; 
				}
				break;				
		}
		global $class_type; 
		//echo $weekday.'__'.$office_name;
		 
    foreach ($json_res->periods->$weekday as $asset)
    { 
	    if ($asset->course_subject_id == $class_type)
		{
       
        echo  '['.$office_name.']  '.$asset->subject->alias;
		echo '從'.$asset->start_at.'到'.$asset->end_at;
		echo '<br>';
       }   
	   else
	   {}
	}
//}

}
?>
<div id=week1>
###########禮拜一###########<br>
<?php
@getClass($office1, 1, 1);
@getClass($office2, 2, 1);
@getClass($office3, 3, 1);
@getClass($office4, 4, 1);
@getClass($office5, 5, 1);
@getClass($office6, 6, 1);
@getClass($office7, 7, 1);
@getClass($office8, 8, 1);
@getClass($office9, 9, 1);
@getClass($office10, 10, 1);
?>
</div>
<div id=week2>
###########禮拜二###########<br>
<?php

@getClass($office1, 1, 2);
@getClass($office2, 2, 2);
@getClass($office3, 3, 2);
@getClass($office4, 4, 2);
@getClass($office5, 5, 2);
@getClass($office6, 6, 2);
@getClass($office7, 7, 2);
@getClass($office8, 8, 2);
@getClass($office9, 9, 2);
@getClass($office10, 10, 2);
?>
</div>
<div id=week3>
###########禮拜三###########<br>
<?php

@getClass($office1, 1, 3);
@getClass($office2, 2, 3);
@getClass($office3, 3, 3);
@getClass($office4, 4, 3);
@getClass($office5, 5, 3);
@getClass($office6, 6, 3);
@getClass($office7, 7, 3);
@getClass($office8, 8, 3);
@getClass($office9, 9, 3);
@getClass($office10, 10, 3);
?>
</div>
<div id=week4>
###########禮拜四###########<br>
<?php

@getClass($office1, 1, 4);
@getClass($office2, 2, 4);
@getClass($office3, 3, 4);
@getClass($office4, 4, 4);
@getClass($office5, 5, 4);
@getClass($office6, 6, 4);
@getClass($office7, 7, 4);
@getClass($office8, 8, 4);
@getClass($office9, 9, 4);
@getClass($office10, 10, 4);
?>
</div>
<div id=week5>
###########禮拜五###########<br>
<?php

@getClass($office1, 1, 5);
@getClass($office2, 2, 5);
@getClass($office3, 3, 5);
@getClass($office4, 4, 5);
@getClass($office5, 5, 5);
@getClass($office6, 6, 5);
@getClass($office7, 7, 5);
@getClass($office8, 8, 5);
@getClass($office9, 9, 5);
@getClass($office10, 10, 5);
?>
</div>
<div id=week6>
###########禮拜六###########<br>
<?php

@getClass($office1, 1, 6);
@getClass($office2, 2, 6);
@getClass($office3, 3, 6);
@getClass($office4, 4, 6);
@getClass($office5, 5, 6);
@getClass($office6, 6, 6);
@getClass($office7, 7, 6);
@getClass($office8, 8, 6);
@getClass($office9, 9, 6);
@getClass($office10, 10, 6);
?>
</div>
<div id=week7>
###########禮拜日###########<br>
<?php

@getClass($office1, 1, 7);
@getClass($office2, 2, 7);
@getClass($office3, 3, 7);
@getClass($office4, 4, 7);
@getClass($office5, 5, 7);
@getClass($office6, 6, 7);
@getClass($office7, 7, 7);
@getClass($office8, 8, 7);
@getClass($office9, 9, 7);
@getClass($office10, 10, 7);
?>
</div>
</body>
</html>