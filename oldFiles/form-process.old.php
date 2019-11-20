<?php
$hiianswer="abc";
$hiirequiredurl="";
$hiifieldname="hii";

if(!empty($hiianswer)&&!empty($_POST)){$hiiinput=trim($_POST[$hiifieldname]);$hiiinput=strtolower($hiiinput);if(empty($hiiinput)){if(!empty($hiirequiredurl)){header("Location: $hiirequiredurl");}else{echo"<html><head><title>Human Intelligence Identification (Hii) Required</title></head><body>";echo"<h1 style='text-align:center'>Human Intelligence Identification Answer Required</h1>";echo"<p style='text-align:center'>Please <a href='contact.html'>Return to the Form</a><br /><br />and provide the required<br /><br /><b>Human Intelligence Identification Answer</b></p>";echo"</body></html>";}exit;}if($hiiinput!=$hiianswer){exit();}}?>



<?php

$emailsubject = 'GECO Financial Question or Comment';
	   $mail = 'barnesplanners@rogers.com';

$name = $_POST['name'];	   
$email = $_POST['email'];	   
$questions = $_POST['questions'];
	   
$body = <<<EOD
<br><hr><br>

<b>Name</b> : $name<br>
<b>Email Address</b> : $email<br>
<b>Question</b> : $questions<br>
EOD;

$headers = "From: $email\r\n";
	$headers .= "Content-type: text/html\r\n";
	$success = mail($mail, $emailsubject, $body, $headers);
	
?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />

<title>::: Contact Us   |   GECO Financial Canada :::</title>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #333333;
}
.style5 {
	color: #333333;
	font-family: "Times New Roman", Times, serif;
	font-size: 14px;
}
a:link {
	color: 333333;
	text-decoration: none;
}
a:visited {
	color: 333333;
	text-decoration: none;
}
a:hover {
	color: #006699;
	text-decoration: underline;
}
a:active {
	color: #006699;
	text-decoration: none;
}
.style6 {
	font-size: 22px;
	font-weight: bold;
}
.style11 {
	color: #0066FF;
	font-weight: bold;
	font-size: 16px;
}
.style14 {
	color: #333333;
	font-size: 14px;
}
.style16 {font-size: 16px}
.style19 {
	font-size: 14px;
	font-weight: bold;
}
.style20 {
	font-size: 12px;
	font-weight: bold;
}
.style21 {
	font-family: "Times New Roman", Times, serif;
	font-size: 14px;
	font-weight: bold;
	color: #0066CC;
}
.style22 {font-size: 16px; color: #333333;  font-family: Arial, Helvetica, sans-serif;}
.style27 {font-size: 18px; font-weight: bold; color: #006699; }
.style28 {color: #006699}
.style29 {color: #006699; font-weight: bold; font-size: 16px; }
.style30 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; color: #006699; }
.style31 {
	font-size: 18px;
	color: #006600;
}
.style32 {
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
-->
</style>
<script type="text/javascript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-8007953-13']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body onload="MM_preloadImages('images/buttonbar-over_01.jpg','images/buttonbar-over_02.jpg','images/buttonbar-over_03.jpg','images/buttonbar-over_04.jpg')">
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <th width="900" scope="col"><img src="pics/header.jpg" width="1000" height="300" /></th>
  </tr>
</table>

<table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <th scope="col"><table width="750" height="36" border="0" align="left" cellpadding="0" cellspacing="0" id="Table_01">
	<tr>
		<td>
			<a href="index.html"><img src="images/buttonbar_01.jpg" alt="" width="88" height="36" border="0" id="Image2" onmouseover="MM_swapImage('Image2','','images/buttonbar-over_01.jpg',1)" onmouseout="MM_swapImgRestore()"></a></td>
		<td>
			<a href="privacy-policy.html"><img src="images/buttonbar_02.jpg" alt="" width="171" height="36" border="0" id="Image3" onmouseover="MM_swapImage('Image3','','images/buttonbar-over_02.jpg',1)" onmouseout="MM_swapImgRestore()"></a></td>
		<td>
			<a href="credit-app.html"><img src="images/buttonbar_03.jpg" alt="" width="210" height="36" border="0" id="Image4" onmouseover="MM_swapImage('Image4','','images/buttonbar-over_03.jpg',1)" onmouseout="MM_swapImgRestore()"></a></td>
		<td>
			<a href="contact.html"><img src="images/buttonbar_04.jpg" alt="" width="138" height="36" border="0" id="Image5" onmouseover="MM_swapImage('Image5','','images/buttonbar-over_04.jpg',1)" onmouseout="MM_swapImgRestore()"></a></td>
		<td>
			<img src="images/buttonbar_05.jpg" width="143" height="36" alt=""></td>
	</tr>
</table>&nbsp;</th>
  </tr>
</table>
<table width="900" border="0" align="center" cellpadding="10" cellspacing="0">
  <tr>
    <td width="505" height="565" valign="top" scope="col"><p align="left" class="style1"><img src="pics/contact-title.jpg" width="380" height="45" /><br />
        </p>
      <p class="style22">Please feel free to contact us at any time by using the following methods.</p>
      <p class="style1"><span class="style29">Our direct toll free line</span> - <span class="style6">1-866-394-4774</span><br />
         <br />
        <span class="style29">Our direct toll free fax</span>  - <span class="style6">1-866- 395-4774</span><br />
         <br />
        <span class="style11"><span class="style28">Our e-mail </span> <span class="style14">- </span> </span><a href="mailto:info@gecofinancial.com" target="_blank"><strong><u>info@gecofinancial.com</u></strong></a></p>
      <p class="style1">&nbsp;</p>
      <hr align="left" width="500" size="1" />
      <p class="style1"><br />
         <span class="style16"><br />
        <span class="style27">Executive Vice President</span></span><br />
        <br />
        <span class="style19">John Rodgers</span><br />
        <span class="style20"><a href="mailto:jrodgers@gecofinancial.com" target="_blank"><u>jrodgers@gecofinancial.com</u></a></span><br />
        <br />
         <br />
        <span class="style27">Executive Vice President</span><br />
        <br />
        <strong>Joe Barnes, RHU, EPC<br />
        </strong><span class="style20"><a href="mailto:jbarnes@gecofinancial.com" target="_blank"><u>jbarnes@gecofinancial.com</u></a></span></p>
    </td>
    <td width="355" valign="top" scope="col"><div align="center">
      <form action="form-process.php" method="post" name="form1" class="style21" id="form1">
        <p align="left"><br />
          <span class="style30">PLEASE LEAVE US YOUR QUESTIONS OR CONCERNS AND WE WILL GET BACK TO YOU A.S.A.P          </span></p>
        <table width="357" height="183" border="0" cellpadding="5" cellspacing="0" bordercolor="#666666">
          <tr>
            <td width="84" scope="col"><div align="left" class="style30">Name</div></td>
            <td width="251" scope="col"><div align="left">
              <label>
              <input type="text" name="name" id="name" />
              </label>
            </div></td>
          </tr>
          <tr>
            <td scope="col"><div align="left" class="style30">Email</div></td>
            <td scope="col"><div align="left">
              <label>
              <input type="text" name="email" id="email" />
              </label>
            </div></td>
          </tr>
          <tr>
            <td scope="col"><div align="left" class="style30">Questions</div></td>
            <td scope="col"><div align="left">
              <label>
              <textarea name="questions" id="questions" cols="22" rows="5"></textarea>
              </label>
            </div></td>
          </tr>
          <tr>
            <td height="37" scope="col">&nbsp;</td>
            <td scope="col"><label>
              <input type="submit" name="submit" id="submit" value="SEND" />
            </label></td>
          </tr>
        </table>
        <p class="style30 style31">::: THANK YOU :::</p>
      </form>
      </div>
      <p align="center"><a href="credit-app.html"><img src="pics/3homes.jpg" width="350" height="287" border="0" /></a></p></td>
  </tr>
</table>
<table width="900" border="0" align="center" cellpadding="15" cellspacing="0">
  <tr>
    <td height="46" scope="col"><div align="center" class="style5">
      <div align="center">
        <hr align="center" width="700" size="1" noshade="noshade" />
        <span class="style32"><a href="http://www.gecofinancial.com">home</a>  |  <a href="contact.html">contact us</a>  |  <a href="privacy-policy.html">privacy policy</a>  |  <a href="credit-app.html">application form</a>  |  <a href="http://www.generalcoachcanada.com" target="_blank">general coach </a></span></div>
    </div></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
