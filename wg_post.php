<html>

<body bgcolor="#888888">

    <head>
        <title>WORLDGYM CLASS</title>       
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css">
        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
        


    </head>
	
	<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59633225-2', 'auto');
  ga('send', 'pageview');

</script>
        <div data-role="page">  
          
            <div data-role="header">
                <h1>Worldgym class</h1>
            </div> 
          
            <div data-role="main" class="ui-content" id="context" style="background-color:lightgray;">
			 <fieldset data-role="controlgroup">
<?php
$office_id = $_POST['xof'];

 $json = file_get_contents('http://www.worldgymtaiwan.com/zh-tw/api/post?office_id='.$office_id);

 //$json = substr($json,171);
  $dejson = json_decode($json);
     foreach ( array_reverse($dejson->data) as $asset)
    { 
	    str_replace("451px","200px",$asset->details);
        echo $asset->details;
	}
?>
 </fieldset>
<br>
<input type="button" value="重新查詢" onclick="location.href='wgc.html'">
				</body>
				</html>