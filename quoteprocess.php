<?php

$emailsubject = 'GECO Lease Quote';
	   $mail = 'info@gecofinancial.com';

$date = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$parkname = $_POST['parkname'];
$parkaddress = $_POST['parkaddress'];
$city = $_POST['city'];
$province = $_POST['province'];
$postalcode = $_POST['postalcode'];
$contactname = $_POST['contactname'];
$contactemail = $_POST['contactemail'];
$parkwebsite = $_POST['parkwebsite'];
$contactphone = $_POST['contactphone'];
$contactfax = $_POST['contactfax'];


$coachunits = $_POST['coachunits'];
$unitcost = $_POST['unitcost'];
$setupcost = $_POST['setupcost'];
$freight = $_POST['freight'];
$unittax = $_POST['unittax'];
$deliveryday = $_POST['day2'];
$deliverymonth = $_POST['month2'];
$deliveryyear = $_POST['year2'];
$leasepayments1 = $_POST['12months'];
$leasepayments2 = $_POST['6months'];
$quotefor1 = $_POST['39months'];
$quotefor2 = $_POST['52months'];
$quotefor3 = $_POST['66months'];

$body = <<<EOD
<br><hr><br>

<h2>Contact Information</h2><br><br>

<b>Date</b> : $date,$month,$year<br>
<b>Name of Park/Dealer</b> : $parkname<br>
<b>Address of Park</b> : $parkaddress<br>
<b>City</b> : $city<br>
<b>Province</b> : $province<br>
<b>Postal Code</b> : $postalcode<br>
<b>Name of Contact Person</b> : $contactname<br>
<b>Email of Contact Person</b> : $contactemail<br>
<b>Website of Park/Dealer</b> : $parkwebsite<br>
<b>Phone Number of Contact Person</b> : $contactphone<br>
<b>Fax Number of Contact Person</b> : $contactfax<br><br>

<h2>General Information</h2><br><br>

<b>How many Units are you interested in leasing</b> : $coachunits<br>
<b>What is the approximate cost of each unit</b> : $unitcost<br>
<b>How much will the setup costs be</b> : $setupcost<br>
<b>How much will the freight be for each unit</b> : $freight<br>
<b>How much will the unit tax be</b> : $unittax<br>
<b>When do you wish to take delivery</b> : $deliveryday,$deliverymonth,$deliveryyear<br>
<b>How do you want your lease payments</b> : $leasepayments1,$leasepayments2<br>
<b>How many months would you like a quote for</b> : $quotefor1,$quotefor2,$quotefor3<br>
EOD;

$headers = "From: $contactemail\r\n";
	$headers .= "Content-type: text/html\r\n";
	$success = mail($mail, $emailsubject, $body, $headers);

?>








<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />

<title>::: Free Lease Quote  |   GECO Financial Canada :::</title>
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
	color: #0033CC;
	text-decoration: underline;
}
a:active {
	color: #0033CC;
	text-decoration: none;
}
.style8 {font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #333333; font-weight: bold; }
.style9 {
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style19 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #333333; font-weight: bold; }
-->
</style>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
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

<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">

/***********************************************
* Drop Down Date select script- by JavaScriptKit.com
* This notice MUST stay intact for use
* Visit JavaScript Kit at http://www.javascriptkit.com/ for this script and more
***********************************************/

var monthtext=['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sept','Oct','Nov','Dec'];

function populatedropdown(dayfield, monthfield, yearfield){
var today=new Date()
var dayfield=document.getElementById(dayfield)
var monthfield=document.getElementById(monthfield)
var yearfield=document.getElementById(yearfield)
for (var i=0; i<31; i++)
dayfield.options[i]=new Option(i, i+1)
dayfield.options[today.getDate()]=new Option(today.getDate(), today.getDate(), true, true) //select today's day
for (var m=0; m<12; m++)
monthfield.options[m]=new Option(monthtext[m], monthtext[m])
monthfield.options[today.getMonth()]=new Option(monthtext[today.getMonth()], monthtext[today.getMonth()], true, true) //select today's month
var thisyear=today.getFullYear()
for (var y=0; y<20; y++){
yearfield.options[y]=new Option(thisyear, thisyear)
thisyear+=1
}
yearfield.options[0]=new Option(today.getFullYear(), today.getFullYear(), true, true) //select today's year
}

</script>

<style type="text/css">
<!--
.style22 {
	font-size: 16px
}
.style23 {color: #990000}
.style24 {font-size: 14px}
-->
</style>
</head>

<body onload="MM_preloadImages('images/buttonbar-over_01.jpg','images/buttonbar-over_02.jpg','images/buttonbar-over_03.jpg','images/buttonbar-over_04.jpg','images/buttonbar-over_05.jpg')">
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <th width="900" scope="col"><img src="pics/logo.jpg" width="1000" height="300" /></th>
  </tr>
</table>

<table width="907" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <th width="907" scope="col"><table width="750" height="36" border="0" align="left" cellpadding="0" cellspacing="0" id="Table_01">
      <tr>
        <td><a href="index.html"><img src="images/buttonbar_01.jpg" alt="" width="88" height="36" border="0" id="Image2" onmouseover="MM_swapImage('Image2','','images/buttonbar-over_01.jpg',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td><a href="privacy-policy.html"><img src="images/buttonbar_02.jpg" alt="" width="171" height="36" border="0" id="Image3" onmouseover="MM_swapImage('Image3','','images/buttonbar-over_02.jpg',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td><a href="credit-app.html"><img src="images/buttonbar_03.jpg" alt="" width="210" height="36" border="0" id="Image4" onmouseover="MM_swapImage('Image4','','images/buttonbar-over_03.jpg',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td><a href="contact.html"><img src="images/buttonbar_04.jpg" alt="" width="138" height="36" border="0" id="Image5" onmouseover="MM_swapImage('Image5','','images/buttonbar-over_04.jpg',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td><a href="lease-quote.html"><img src="images/buttonbar_05.jpg" alt="" width="143" height="36" border="0" id="Image1" onmouseover="MM_swapImage('Image1','','images/buttonbar-over_05.jpg',1)" onmouseout="MM_swapImgRestore()" /></a></td>
      </tr>
    </table>
      &nbsp;<a href="dealer-leasing.html"><img src="images/dealerbutt_05_05.jpg" width="143" height="36" border="0" /></a></th>
  </tr>
</table>
<table width="997" border="0" align="center" cellpadding="10" cellspacing="0">
  <tr>
    <td width="928" valign="top" scope="col"><p align="center" class="style1">&nbsp;</p>
      <p align="center" class="style1"><br />
        </p>
      <p align="center" class="style19 style22"><span class="style23">Thank you for your request</span></p>
      <p align="center" class="style19 style22"><br />
        <span class="style24">We will be in touch as soon as possible</span></p>
      <p class="style8">&nbsp;</p>
    <p class="style8">&nbsp;</p></td>
    <td width="29" valign="top" scope="col">&nbsp;</td>
  </tr>
</table>
<table width="987" border="0" align="center" cellpadding="15" cellspacing="0">
  <tr>
    <td width="957" height="46" scope="col"><div align="center" class="style5">
      <div align="center">
        <hr align="center" width="700" size="1" noshade="noshade" />
        <span class="style9"><a href="http://www.gecofinancial.com">home</a>  |  <a href="contact.html">contact us</a>  |  <a href="privacy-policy.html">privacy policy</a>  |  <a href="credit-app.html">application form</a>  |  <a href="http://www.generalcoachcanada.com" target="_blank">general coach</a>  |  <a href="lease-quote.html">free lease quote</a></span></div>
    </div></td>
  </tr>
</table>
<p>&nbsp;</p>

</body>
</html>
