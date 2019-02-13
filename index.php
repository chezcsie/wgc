
<!DOCTYPE html>
<html>
    <head>
        <title>Worldgym class 5.0</title> 		
         <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/stylesheets/main.css">
        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}

.fa-snapchat-ghost {
  background: #fffc00;
  color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

.fa-skype {
  background: #00aff0;
  color: white;
}

.fa-android {
  background: #a4c639;
  color: white;
}

.fa-dribbble {
  background: #ea4c89;
  color: white;
}

.fa-vimeo {
  background: #45bbff;
  color: white;
}

.fa-tumblr {
  background: #2c4762;
  color: white;
}

.fa-vine {
  background: #00b489;
  color: white;
}

.fa-foursquare {
  background: #45bbff;
  color: white;
}

.fa-stumbleupon {
  background: #eb4924;
  color: white;
}

.fa-flickr {
  background: #f40083;
  color: white;
}

.fa-yahoo {
  background: #430297;
  color: white;
}

.fa-soundcloud {
  background: #ff5500;
  color: white;
}

.fa-reddit {
  background: #ff5700;
  color: white;
}

.fa-rss {
  background: #ff6600;
  color: white;
}
</style>


    </head>
    <body>
	
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59633225-2', 'auto');
  ga('send', 'pageview');

</script>

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
                <h1>Worldgym Class 世界健身課程 區域快查</h1>

            </div> 

<script>
var isShow = false;
function change(x) {
	if(!isShow) {
		isShow = true;
		document.getElementById(x).style.display='';
		
	}
	else {
		isShow = false;
		document.getElementById(x).style.display='none';
		
	}			
}

function updateTotal() {
   
    //var form = this.form;
    
    var val = '';
	var el = document.getElementById('sec_1');
	var tops = el.getElementsByTagName('input');
    for (var i=0, len=tops.length; i<len; i++) {
        if ( tops[i].type == 'checkbox' && tops[i].checked) {
			if (val !='') {val += ', '} else {val=''};
            val += tops[i].value;
        }
    }
    
	var al = document.getElementById('info');
	var end = al.getElementsByTagName('input');
	for (var i=0, len=end.length; i<len; i++) 
	{
        if ( end[i].type == 'text') 
			end[i].value = val;
    }
}

function attachCheckboxHandlers(sec) {
    // get reference to element containing toppings checkboxes
    var el = document.getElementById(sec);

    // get reference to input elements in toppings container element
    var tops = el.getElementsByTagName('input');
    
    // assign updateTotal function to onclick property of each checkbox
    for (var i=0, len=tops.length; i<len; i++) {
        if ( tops[i].type == 'checkbox' ) {
            tops[i].onclick = updateTotal;
        }
    }
}

function toggleDiv(x){
	var sec_num = 10;
	var sec_toggle = 0;
    for (var i=0;i<=sec_num;i++) {
		if(x == i )
		{
			document.getElementById("sec_"+(i)).style.display='';
			
	    }
	    else
		{
          document.getElementById("sec_"+(i)).style.display='none';
		}
    }
    divs[selectedDiv].style.display="block"; 


 }   
 
 
function toggleClassDiv(x){
	var sec_num = 7;
	var sec_toggle = 0;
    for (var i=1;i<=sec_num;i++) {
		if(x == i )
		{
			document.getElementById("class_"+(i)).style.display='';
			
	    }
	    else
		{
          document.getElementById("class_"+(i)).style.display='none';
		}
    }
    divs[selectedDiv].style.display="block"; 


 }   




 
</script>


            <div data-role="main" class="ui-content">  
                <form name="wgc" method="post" action="wg_last.php" data-ajax="false">

      
                    <fieldset data-role="controlgroup">
                        <legend>選擇要查詢的課程:</legend>
						
					<div data-role="main" id="info" class="ui-content">  
					<fieldset data-type="horizontal" data-role="controlgroup" >
					<input type="button" onclick="toggleClassDiv(1)" value="LesMills萊美系統課程">
					<input type="button" onclick="toggleClassDiv(2)" value="Sport Training運動訓練課程">
					<input type="button" onclick="toggleClassDiv(3)" value="Cardio&Sculpt心肺肌力課程">					
					<input type="button" onclick="toggleClassDiv(4)" value="AntiGravity Fitness反重力體適能">
					<input type="button" onclick="toggleClassDiv(5)" value="Indoor Cycling飛輪課程">
					<input type="button" onclick="toggleClassDiv(6)" value="Dancing Dance Class舞動舞蹈課程">			
					<input type="button" onclick="toggleClassDiv(7)" value="Mind-Body Class心靈靜修課程">						
					</fieldset>
					</div>
					
                    <div data-role="main"  id="class_1" class="ui-content"  style="display: none">  
                    <fieldset data-type="horizontal" data-role="controlgroup" >
                        <legend>LesMills萊美系統課程:</legend>
						<input type="radio" name="class_type" id="75" value="75">
                        <label for="75">Body Combat</label>
						
						<input type="radio" name="class_type" id="76" value="76">
                        <label for="76">Body Pump</label>
						
                        <input type="radio" name="class_type" id="77" value="77">
                        <label for="77">Body Jam</label>
						
                        <input type="radio" name="class_type" id="78" value="78">
                        <label for="78">Body Balance</label>
						
                        <input type="radio" name="class_type" id="79" value="79">
                        <label for="79">Body Attack</label>
						
                        <input type="radio" name="class_type" id="80" value="80">
                        <label for="80">Body Step</label>
						
                        <input type="radio" name="class_type" id="81" value="81">
                        <label for="81">CXworx™</label>
						
                        <input type="radio" name="class_type" id="82" value="82">
                        <label for="82">Body Vive</label>
						
                        <input type="radio" name="class_type" id="105" value="105">
                        <label for="105">SH'BAM</label>						
                    </fieldset>
					</div> 	

                    <div data-role="main"  id="class_2" class="ui-content"  style="display: none">  
                    <fieldset data-type="horizontal" data-role="controlgroup" >
                        <legend>Sport Training運動訓練課程:</legend>
						<input type="radio" name="class_type" id="110" value="110">
                        <label for="110">功能性訓練Functional Training</label>
						
						<input type="radio" name="class_type" id="118" value="118">
                        <label for="118">階梯體能訓練 Stomp Fx</label>
						
                        <input type="radio" name="class_type" id="129" value="129">
                        <label for="129">Animal Flow</label>
						
                        <input type="radio" name="class_type" id="134" value="134">
                        <label for="134">體感綜合技擊 Fight FX </label>
						
                        <input type="radio" name="class_type" id="135" value="135">
                        <label for="135">自由體能玩轉 Blast FX</label>
						
                        <input type="radio" name="class_type" id="139" value="139">
                        <label for="139">激能槓鈴雕塑 Pump Fx</label>
						
                        <input type="radio" name="class_type" id="140" value="140">
                        <label for="140">adidas Gym & Run</label>			
                    </fieldset>
					</div> 	

                    <div data-role="main"  id="class_3" class="ui-content"  style="display: none">  
                    <fieldset data-type="horizontal" data-role="controlgroup" >
                        <legend>Cardio&Sculpt心肺肌力課程:</legend>
						<input type="radio" name="class_type" id="117" value="117">
                        <label for="117">流動時尚舞蹈 Groove FX</label>
						
						<input type="radio" name="class_type" id="126" value="126">
                        <label for="126">派對雙響炮 Double Pop</label>
						
                        <input type="radio" name="class_type" id="10" value="10">
                        <label for="10">入門有氧Aerobic Intro</label>
						
                        <input type="radio" name="class_type" id="23" value="23">
                        <label for="23">拉丁有氧Latin Jam</label>
						
                        <input type="radio" name="class_type" id="138" value="138">
                        <label for="138">STRONG by Zumba™</label>
						
                        <input type="radio" name="class_type" id="88" value="88">
                        <label for="88">活力有氧 I Hi-Low I</label>
						
                        <input type="radio" name="class_type" id="89" value="89">
                        <label for="89">活力有氧 II Hi-Low II</label>			
						
                        <input type="radio" name="class_type" id="14" value="14">
                        <label for="14">全方位雕塑Total Body Sculpt</label>		
						
						<input type="radio" name="class_type" id="15" value="15">
                        <label for="15">球雕塑Ball Sculpt</label>		
						
						<input type="radio" name="class_type" id="16" value="16">
                        <label for="16">彼瑜塑身PIYO ™</label>							
                    </fieldset>
					</div> 			

                    <div data-role="main"  id="class_4" class="ui-content"  style="display: none">  
                    <fieldset data-type="horizontal" data-role="controlgroup" >
                                    (付費預約制)
                    </fieldset>
					</div> 		
					
                    <div data-role="main"  id="class_5" class="ui-content"  style="display: none">  
                    <fieldset data-type="horizontal" data-role="controlgroup" >
                        <legend>Indoor Cycling飛輪課程:</legend>
						<input type="radio" name="class_type" id="127" value="127">
                        <label for="127">Real Riding Tour</label>
						
						<input type="radio" name="class_type" id="141" value="141">
                        <label for="141">RIDEZONE飛輪心率騎</label>
						
                        <input type="radio" name="class_type" id="143" value="143">
                        <label for="143">StagesFlight</label>
						
                        <input type="radio" name="class_type" id="83" value="83">
                        <label for="83">燃脂Fat Burning</label>
						
                        <input type="radio" name="class_type" id="98" value="98">
                        <label for="98">EOXi ®飛輪</label>
						
                        <input type="radio" name="class_type" id="132" value="132">
                        <label for="132">大滿貫燃脂Grand tours</label>
						
                        <input type="radio" name="class_type" id="142" value="142">
                        <label for="142">Z30 心率30</label>			
						
                        <input type="radio" name="class_type" id="19" value="19">
                        <label for="19">飛輪入門Spinning Intro</label>		
						
						<input type="radio" name="class_type" id="84" value="84">
                        <label for="84">間歇Interval</label>		
						
						<input type="radio" name="class_type" id="20" value="20">
                        <label for="20">RPM™ 飛輪有氧</label>							
                    </fieldset>
					</div>
                    <div data-role="main"  id="class_6" class="ui-content"  style="display: none">  
                    <fieldset data-type="horizontal" data-role="controlgroup" >
                                    (Comming soon...)
                    </fieldset>
					</div> 	
                    <div data-role="main"  id="class_7" class="ui-content"  style="display: none">  
                    <fieldset data-type="horizontal" data-role="controlgroup" >
                                     (Comming soon...)
                    </fieldset>
					</div> 						
					    <!-- 
                        <input type="radio" name="class_type" id="PUMP" value="76">
						<label for="PUMP">BODY PUMP</label>
                        
                        <input type="radio" name="class_type" id="COMBAT" value="75">	
						<label for="COMBAT">BODY COMBAT</label>
						          
                        <input type="radio" name="class_type" id="BAL" value="78">	
						<label for="BAL">BODY BALANCE</label>
                        
                        <input type="radio" name="class_type" id="CX" value="81">
                        <label for="CX">CX WORX</label>						
                        
                        <input type="radio" name="class_type" id="Hatha" value="51">	
                        <label for="Hatha">Hatha Yoga</label>
-->						
                    </fieldset>
					<div data-role="main" id="info" class="ui-content">  
					<fieldset data-type="horizontal" data-role="controlgroup" >
					<input type="button" onclick="toggleDiv(0)" value="區域搜尋">
					<input type="button" onclick="toggleDiv(1)" value="台北店點">
					<input type="button" onclick="toggleDiv(9)" value="新北店點">					
					<input type="button" onclick="toggleDiv(2)" value="桃園店點">
					<input type="button" onclick="toggleDiv(3)" value="新竹店點">
					<input type="button" onclick="toggleDiv(4)" value="台中店點">
					<input type="button" onclick="toggleDiv(5)" value="台南店點">
					<input type="button" onclick="toggleDiv(6)" value="高雄店點">
					<input type="button" onclick="toggleDiv(7)" value="屏東店點">			
					<input type="button" onclick="toggleDiv(8)" value="宜蘭店點">		
					<input type="button" onclick="toggleDiv(10)" value="花蓮店點">						
					</fieldset>
					</div>
					<div data-role="main"  id="sec_1" class="ui-content"  style="display: none">  
                    <fieldset data-type="horizontal" data-role="controlgroup" >
                        <legend>台北區店點(可複選):</legend>
						
						<input type="checkbox" name="clas[]" id="1" value="1">
                        <label for="1">101店</label>
						
                        <input type="checkbox" name="clas[]" id="2" value="2">
                        <label for="2">民生店</label>
						
                        <input type="checkbox" name="clas[]" id="4" value="4">
                        <label for="4">大安店</label>
						
                        <input type="checkbox" name="clas[]" id="60" value="60">
                        <label for="60">松隆店</label>					
						
                        <input type="checkbox" name="clas[]" id="5" value="5">
                        <label for="5">西門店</label>
						
                        <input type="checkbox" name="clas[]" id="68" value="68">
                        <label for="68">松仁店</label>			
						
                        <input type="checkbox" name="clas[]" id="6" value="6">
                        <label for="6">站前店</label>
					
                        <input type="checkbox" name="clas[]" id="7" value="7">
                        <label for="7">天母店</label>				
						
                        <input type="checkbox" name="clas[]" id="67" value="67">
                        <label for="67">FIT ZONE天母店</label>
						
                        <input type="checkbox" name="clas[]" id="8" value="8">
                        <label for="8">統領店</label>
						
                        <input type="checkbox" name="clas[]" id="62" value="62">
                        <label for="62">光復店</label>
						
                        <input type="checkbox" name="clas[]" id="9" value="9">
                        <label for="9">內湖店</label>		
						
                        <input type="checkbox" name="clas[]" id="37" value="37">
                        <label for="37">內湖福華店</label>	
						
                        <input type="checkbox" name="clas[]" id="58" value="58">
                        <label for="58">大直店</label>	
						
                        <input type="checkbox" name="clas[]" id="63" value="63">
                        <label for="63">麗水店</label>
						
                        <input type="checkbox" name="clas[]" id="3" value="3">
                        <label for="3">南京店</label>	
						
                        <input type="checkbox" name="clas[]" id="66" value="66">
                        <label for="66">FIT ZONE公館店</label>			
						
                        <input type="checkbox" name="clas[]" id="31" value="31">
                        <label for="31">公館店</label>											

                    </fieldset>
					</div> 
					
					<div data-role="main"  id="sec_9" class="ui-content"  style="display: none">  
                    <fieldset data-type="horizontal" data-role="controlgroup" >
                        <legend>新北區店點(可複選):</legend>

                        <input type="checkbox" name="clas[]" id="10" value="10">
                        <label for="10">新店店</label>	
						
                        <input type="checkbox" name="clas[]" id="13" value="13">
                        <label for="13">板橋府中店</label>	
											
                        <input type="checkbox" name="clas[]" id="45" value="45">
                        <label for="45">板橋中山店</label>
						
                        <input type="checkbox" name="clas[]" id="51" value="51">
                        <label for="51">板橋雙十店</label>	
						
                        <input type="checkbox" name="clas[]" id="14" value="14">
                        <label for="14">中和店</label>	
						
                        <input type="checkbox" name="clas[]" id="32" value="32">
                        <label for="32">景平店</label>	
						
                        <input type="checkbox" name="clas[]" id="11" value="11">
                        <label for="11">新莊店</label>	
						
                        <input type="checkbox" name="clas[]" id="12" value="12">
                        <label for="12">北新莊店</label>	
						
                        <input type="checkbox" name="clas[]" id="15" value="15">
                        <label for="15">永和店</label>	
						
                        <input type="checkbox" name="clas[]" id="47" value="47">
                        <label for="47">永和民權店</label>	
						
                        <input type="checkbox" name="clas[]" id="30" value="30">
                        <label for="30">淡水店</label>	
						
                        <input type="checkbox" name="clas[]" id="39" value="39">
                        <label for="39">三重店</label>	
						
                        <input type="checkbox" name="clas[]" id="52" value="52">
                        <label for="52">汐止店</label>	
						
                        <input type="checkbox" name="clas[]" id="55" value="55">
                        <label for="55">土城店</label>	
						
                        <input type="checkbox" name="clas[]" id="16" value="16">
                        <label for="16">林口店</label>	
                    </fieldset>
					</div> 
					
                    <div data-role="main"  id="sec_2" class="ui-content"  style="display: none">  
                    <fieldset data-type="horizontal" data-role="controlgroup" >
                        <legend>桃園區店點(可複選):</legend>
						<input type="checkbox" name="clas[]" id="64" value="64">
                        <label for="64">國強店</label>
						
						<input type="checkbox" name="clas[]" id="18" value="18">
                        <label for="18">復興店</label>
						
                        <input type="checkbox" name="clas[]" id="33" value="33">
                        <label for="33">大有店</label>
						
                        <input type="checkbox" name="clas[]" id="17" value="17">
                        <label for="17">中壢店</label>
					
                    </fieldset>
					</div> 			
					
                    <div data-role="main"  id="sec_3" class="ui-content"  style="display: none">  
                    <fieldset data-type="horizontal" data-role="controlgroup" >
                        <legend>新竹區店點(可複選):</legend>
						<input type="checkbox" name="clas[]" id="38" value="38">
                        <label for="38">中正店</label>
						
                        <input type="checkbox" name="clas[]" id="20" value="20">
                        <label for="20">林森店</label>
						
                        <input type="checkbox" name="clas[]" id="21" value="21">
                        <label for="21">巨城店</label>
							
                        <input type="checkbox" name="clas[]" id="49" value="49">
                        <label for="49">竹北店</label>					
                    </fieldset>
					</div> 				

                    <div data-role="main"  id="sec_4" class="ui-content"  style="display: none">  
                    <fieldset data-type="horizontal" data-role="controlgroup" >
                        <legend>台中區店點(可複選):</legend>
						<input type="checkbox" name="clas[]" id="22" value="22">
                        <label for="22">一中店</label>
						
                        <input type="checkbox" name="clas[]" id="23" value="23">
                        <label for="23">SOGO店</label>
						
                        <input type="checkbox" name="clas[]" id="46" value="46">
                        <label for="46">學府店</label>
							
                        <input type="checkbox" name="clas[]" id="36" value="36">
                        <label for="36">崇德店</label>	
						
                        <input type="checkbox" name="clas[]" id="61" value="61">
                        <label for="61">黎明店</label>	
						
                        <input type="checkbox" name="clas[]" id="44" value="44">		
                        <label for="44">西屯店</label>							
                    </fieldset>
					</div> 		
					
                    <div data-role="main"  id="sec_5" class="ui-content"  style="display: none">  
                    <fieldset data-type="horizontal" data-role="controlgroup" >
                        <legend>台南區店點(可複選):</legend>
						<input type="checkbox" name="clas[]" id="25" value="25">
                        <label for="25">FOCUS店</label>
						
                        <input type="checkbox" name="clas[]" id="26" value="26">
                        <label for="26">國賓店</label>
						
                        <input type="checkbox" name="clas[]" id="27" value="27">
                        <label for="27">長榮店</label>
                    </fieldset>
					</div> 			
					
                    <div data-role="main"  id="sec_6" class="ui-content"  style="display: none">  
                    <fieldset data-type="horizontal" data-role="controlgroup" >
                        <legend>高雄區店點(可複選):</legend>
						<input type="checkbox" name="clas[]" id="35" value="35">
                        <label for="35">SOGO店</label>
						
                        <input type="checkbox" name="clas[]" id="34" value="34">
                        <label for="34">寶成店</label>
						
                        <input type="checkbox" name="clas[]" id="59" value="59">
                        <label for="59">中華店</label>
						
                        <input type="checkbox" name="clas[]" id="69" value="69">
                        <label for="69">岡山店</label>
                    </fieldset>
					</div> 	

                    <div data-role="main"  id="sec_7" class="ui-content"  style="display: none">  
                    <fieldset data-type="horizontal" data-role="controlgroup" >
                        <legend>屏東區店點(可複選):</legend>
						<input type="checkbox" name="clas[]" id="48" value="48">
                        <label for="48">自由店</label>
                    </fieldset>
					</div> 	
                    <div data-role="main"  id="sec_8" class="ui-content"  style="display: none">  
                    <fieldset data-type="horizontal" data-role="controlgroup" >
                        <legend>宜蘭區店點(可複選):</legend>
						<input type="checkbox" name="clas[]" id="42" value="42">
                        <label for="42">友愛店</label>
						
                        <input type="checkbox" name="clas[]" id="43" value="43">
                        <label for="43">羅東店</label>
                    </fieldset>
					</div> 	
					
                    <div data-role="main"  id="sec_10" class="ui-content"  style="display: none">  
                    <fieldset data-type="horizontal" data-role="controlgroup" >
                        <legend>花蓮區店點(可複選):</legend>
						<input type="checkbox" name="clas[]" id="56" value="56">
                        <label for="56">國聯店</label>
                    </fieldset>
					</div> 	
					<div data-role="main"  id="sec_0" class="ui-content"  style="display:"> 
                    <fieldset data-type="horizontal" data-role="controlgroup" >
                        <legend>區域搜尋:</legend>
						<input type="radio" name="of" id="all" value="all">
                        <label for="all">全台</label>
						
                        <input type="radio" name="of" id="tp" value="tp">
                        <label for="tp">台北區</label>
						
                        <input type="radio" name="of" id="nt" value="nt">
                        <label for="nt">新北區</label>
						
                        <input type="radio" name="of" id="il" value="il">
                        <label for="il">宜蘭區</label>						
                        
						<input type="radio" name="of" id="ty" value="ty">
                        <label for="ty">桃園區</label>
						
                        <input type="radio" name="of" id="hs" value="hs">
                        <label for="hs">新竹區</label>
						
                        <input type="radio" name="of" id="tc" value="tc">
                        <label for="tc">台中區</label>
						
                        <input type="radio" name="of" id="tn" value="tn">
                        <label for="tn">台南區</label>
						
                        <input type="radio" name="of" id="ks" value="ks">
                        <label for="ks">高雄區</label>	
						
						<input type="radio" name="of" id="pt" value="pt">
                        <label for="pt">屏東區</label>
						
						<input type="radio" name="of" id="wl" value="wl">
                        <label for="wl">花蓮區</label>								
                    </fieldset>
					</div>
				
                    <fieldset data-type="horizontal" data-role="controlgroup">
                        <legend>日期:</legend>
                        <!-- 
						<input type="radio" name="wd" id="allweek" value="0">
                        <label for="allweek">整週</label>
						-->
                        <input type="radio" name="wd" id="mon" value="1">
                        <label for="mon">週一</label>
						
                        <input type="radio" name="wd" id="tue" value="2">
						<label for="tue">週二</label>
						
                        <input type="radio" name="wd" id="wed" value="3">
						<label for="wed">週三</label>
						
                        <input type="radio" name="wd" id="thu" value="4">
						<label for="thu">週四</label>
						
                        <input type="radio" name="wd" id="fri" value="5">
						<label for="fri">週五</label>
						
                        <input type="radio" name="wd" id="sat" value="6">
						<label for="sat">週六</label>
						
                        <input type="radio" name="wd" id="sun" value="7">
						<label for="sun">週日</label>
      
						
                    </fieldset>

<script> 


function enhancedRadio() {  
    var r = document.forms[0].elements[this.name];  
    for (var i=0;i<r.length;i++) {  
       if (r[i].index != this.index)  
            r[i].isChecked = false;  
    }  
    this.isChecked = !this.isChecked;  
    this.checked = this.isChecked;  
}  
function deployRadioEvent() {  
    var f = document.forms[0];  
    for (var i=0;i<f.elements.length;i++) { 
        var e = f.elements[i]; 
        if (e.type == "radio") { 
            e.onclick = enhancedRadio;  
            e.setAttribute("isChecked",false);  
            e.setAttribute("index",i); 
        }     
    }     
}  
deployRadioEvent();  
</script> 

<input type="submit" value="查詢課表">

                    
               
                </form>
            </div>
          
            <div data-role="footer">
		<p><span style="color: #333333;">如有任何問題請聯絡我</span></p>
		<a href="https://www.facebook.com/cha.micro" class="fa fa-facebook"></a>
            </div>
        </div>
       
        <div data-role="page" id="pageone">
       
            <div data-role="header">
                <h1></h1>
            </div>

        </div> 

    </body>
</html>
