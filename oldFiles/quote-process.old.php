


<?php

$emailsubject = 'GECO Lease Quote';
	   $mail = 'barnesplanners@rogers.com';

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
<b>How much will the unit tax be</b> : $unittax<br>
<b>When do you wish to take delivery</b> : $deliveryday,$deliverymonth,$deliveryyear<br>
<b>How do you want your lease payments</b> : $leasepayments1,$leasepayments2<br>
<b>How many months would you like a quote for</b> : $quotefor1,$quotefor2,$quotefor3<br>
EOD;

$headers = "From: $contactemail\r\n";
	$headers .= "Content-type: text/html\r\n";
	$success = mail($mail, $emailsubject, $body, $headers);
	
?>	

<html>


<head>


<title>Thank You </title>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	color: #006699;
	font-weight: bold;
}
-->
</style>
</head>


<body>



<div align="center" class="style1">Thank you</div>
</body>




</html>