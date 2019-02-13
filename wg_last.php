<?php
//防止执行超时
set_time_limit(0);
//清空并关闭输出缓存
ob_end_clean();
//需要循环的数据
for($i = 0; $i < 188; $i++)
{
  $users[] = '課程' . $i;
}
//计算数据的长度
$total = 100;
//显示的进度条长度，单位 px 
$width = 100;
//每条记录的操作所占的进度条单位长度
//$pix = $width / $total;
//默认开始的进度条百分比
//$progress = 0;
?>

<html>

<body>

    <head>
        <title>WORLDGYM CLASS</title>       
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css">
        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
        

<script language="JavaScript">
 <!-- 
 function updateProgress(sMsg) 
 { 
  document.getElementById("status").innerHTML = sMsg; 
  //document.getElementById("progress").style.width = iWidth + "px"; 
  //document.getElementById("percent").innerHTML = parseInt(iWidth / <?php echo $width; ?> * 100) + "%"; 
  } 
 --> 
 </script>

    </head>
	
	<body>
    <div id="status"></div>

  </div> 
 <?php
flush(); //将输出发送给客户端浏览器 
foreach($users as $user)
{
  ?> 
<script language="JavaScript"> 
 updateProgress("查詢中...請稍候...<br><br>");
</script>
<?php
  flush(); //将输出发送给客户端浏览器，使其可以立即执行服务器端输出的 JavaScript 程序。 
  //$progress += $pix;
} //end foreach 
?> 
<script language="JavaScript"> 
  //最后将进度条设置成最大值 $width，同时显示操作完成 
 updateProgress("查詢成功!!"); 
</script>
<?php
flush();
?> 
        <div data-role="page">  
          
            <div data-role="header">
                <h1>Worldgym class</h1>
            </div> 
          
            <div data-role="main" class="ui-content">
         
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59633225-2', 'auto');
  ga('send', 'pageview');

</script>
<?php
$class_type = $_POST['class_type'];
$week_day = $_POST['wd'];
$class_office = $_POST['of'];
$multi_class = $_POST ['clas'];
$dis_cnt = 0;
$display_arr;
$nowoffice_arr;
//MAX SPOT = 69
$office_select=array_fill(1,69,0);
$wd_select=array_fill(0,7,0);
$js_office=array_fill(1,69,0);
if ($week_day)
$wd_select[$week_day-1] = 1;

if ($class_type == 0)

echo "<br><br> 請選擇課程";
else if ($class_type == 75)
echo "<br><br>課程名稱: BODY COMBAT";
else if ($class_type == 76)
echo "<br><br> 課程名稱: BODY PUMP";
else if ($class_type == 78)
echo "<br><br> 課程名稱: BODY BALANCE";
else if ($class_type == 81)
echo "<br><br> 課程名稱: CX WORX";
else if ($class_type == 51)
echo "<br><br> 課程名稱: Hatha Yoga";

$dowMap = array('週一(Mon)', '週二(Tue)', '週三(Wed)', '週四(Thu)', '週五(Fri)', '週六(Sat)','週日(Sun)');
$month = date('n');
//echo htmlentities((string)$json1);


 function jsonRemoveUnicodeSequences($struct) {
   return preg_replace("/\\\\u([a-f0-9]{4})/e", "iconv('UCS-4LE','UTF-8',pack('V', hexdec('U$1')))", json_encode($struct));
}

function cmp($a, $b)
{
    global $display_arr;
	
    return strcmp($display_arr[$a], $display_arr[$b]);
}
function getClass($json_res, $office, $weekday) {
// listing posts
		global $class_type; 
		global $dis_cnt;
	    global $display_arr;
		global $nowoffice_arr;
		//echo $weekday.'__'.$office_name;
		
    foreach ($json_res->periods->$weekday as $asset)
    { 
	    if ($asset->course_subject_id == $class_type)
		{
		if ($asset->remark == NULL)
		{
		    $str =  '['.$json_res->office->name.'] 從'.$asset->start_at.'到'.$asset->end_at.'  -- ('.$asset->teacher->name.')<br>';
		}
		else
		{
            $str =  '['.$json_res->office->name.'] 從'.$asset->start_at.'到'.$asset->end_at.'  -- ('.$asset->remark.')<br>';
		}
		$display_arr[$asset->start_at] = $str;
		$nowoffice_arr[$str] = $json_res->office->id;
       }   
	}
}

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
?>
 

<?php

foreach ($multi_class as $key => $value) {
   $office_select[$value] =1;
}

//$office_select[1] = 1;
//$office_select[2] = 1;
//echo 'Current PHP version: ' . phpversion();

if ($class_office == tp)
{
$office_select=array_fill(1,9,1);
$office_select[31] = 1 ;
$office_select[37] = 1 ;
$office_select[58] = 1 ;
$office_select[60] = 1 ;
$office_select[62] = 1 ;
$office_select[63] = 1 ;
$office_select[66] = 1 ;
$office_select[67] = 1 ;
$office_select[68] = 1 ;
}
else if ($class_office == nt)
{
$office_select=array_fill(10,6,1);
$office_select[30] = 1 ;
$office_select[32] = 1 ;
$office_select[39] = 1 ;
$office_select[45] = 1 ;
$office_select[47] = 1 ;
$office_select[51] = 1 ;
$office_select[52] = 1 ;
$office_select[55] = 1 ;
}
else if ($class_office == ty)
{
$office_select[17] = 1 ;
$office_select[18] = 1 ;
$office_select[33] = 1 ;
$office_select[64] = 1 ;

}
else if ($class_office == hs)
{
$office_select[20] = 1 ;
$office_select[21] = 1 ;
$office_select[38] = 1 ;
$office_select[49] = 1 ;
}
else if ($class_office == tc)
{
$office_select=array_fill(22,2,1);
$office_select[36] = 1 ;
$office_select[44] = 1 ;
$office_select[46] = 1 ;
$office_select[61] = 1 ;
}
else if ($class_office == tn)
{
$office_select=array_fill(25,3,1);
}
else if ($class_office == ks)
{
$office_select=array_fill(34,2,1);
$office_select[59] = 1 ;
$office_select[69] = 1 ;
}
else if ($class_office == il)
{
$office_select=array_fill(42,2,1);
}
else if ($class_office == pt)
{
$office_select[48] = 1 ;
}
else if ($class_office == wl)
{
$office_select[56] = 1 ;
}
else if ($class_office == all)
{
    $office_select=array_fill(0,39,1);
}


//MAX SPOT = 69
$i=69;


echo '  <form method="post" action="wg_post.php" data-ajax="false"> <div class="parent" style="height:100%;"> <div class="child" style="height:100%;">';


if ($week_day == 0)
{
	
	for($x=1 ; $x<=7 ; $x++)
	{	
      //$wd_select=array_fill(0,7,1);
      echo '<h3 align="center">    <legend>+++++'.$dowMap[$x-1].'課表+++++</legend>    </h3> <hr>';
 
       for($j=1 ; $j<=$i ; $j++)
	   {
           if ($office_select[$j] == 1 )
           {
	           if (  $js_office[$j] == 0 )
	           {    
			       //echo "s:".date('H:i:s');
				   //$context = stream_context_create(array('http' => array('"method"=>"GET","timeout"=>1')));
	               ${"json" . $j.$x} = @curl_get_file_contents('http://52.27.235.58/zh-tw/api/schedule_period/schedule?office_id='.$j.'&month='.$month.'&format=js&callback=?');
				   //echo "<br>e:".date('H:i:s')."<br>";
                   ${"office" . $j.$x} = @json_decode(${"json" . $j.$x});  
                   			   
	               //$js_office[$j] = 1;
		           @getClass(${"office" . $j.$x}, $j, $x);
				   
	           }
            }
        }
        ksort($display_arr);
        $xx= 0;
	    foreach ($display_arr as $value) 
		{
            echo '<input type="radio" name="xof" id="'.$x.'x'.$xx.'" value="'.$nowoffice_arr[$value].'""><label for="'.$x.'x'.$xx.'">'.$value.'</label>';
	        $xx++;
	    }
    
    echo '  ';	
	//Arrays.fill($display_arr, null);
	$display_arr = []; 
    }
}
else
{
    if ($week_day)
    {
		
       echo '<h3 align="center">    <legend>+++++'.$dowMap[$week_day-1].'課表+++++</legend>    </h3> <hr>';
 
       for($j=1 ; $j<=$i ; $j++)
	   {
           if ($office_select[$j] == 1 )
           {
	           if (  $js_office[$j] == 0 )
	           {    
			       //echo "s:".date('H:i:s');
				   //$context = stream_context_create(array('http' => array('"method"=>"GET","timeout"=>1')));
	               ${"json" . $j} = @curl_get_file_contents('http://52.27.235.58/zh-tw/api/schedule_period/schedule?office_id='.$j.'&month='.$month.'&format=js&callback=?');
				   //echo "<br>e:".date('H:i:s')."<br>";
                   ${"office" . $j} = @json_decode(${"json" . $j});  
                   			   
	               $js_office[$j] = 1;
		           @getClass(${"office" . $j}, $j, $week_day);
				   
	           }
            }
        }
        ksort($display_arr);
        $xx= 0;
	    foreach ($display_arr as $value) 
		{
            echo '<input type="radio" name="xof" id="'.$week_day.'x'.$xx.'" value="'.$nowoffice_arr[$value].'""><label for="'.$week_day.'x'.$xx.'">'.$value.'</label>';
	        $xx++;
	    }
    }
    echo '  ';
}
?>
<input type="submit" value="店點公告 (請先選取一間店名)">
<input type="button" value="重新查詢 (回首頁)" onclick="location.href='wgc.html'">

</div> </div>





 </form>
<script>
function goBack() {
    window.history.back()
}
</script>
</div>
</body>
</html>