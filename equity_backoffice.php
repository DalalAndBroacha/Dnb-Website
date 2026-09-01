<?php 
	$menu = "home";
	if(isset($_GET['site'])) $site = $_GET['site'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dalal &amp; Broacha</title>
<link rel="stylesheet" type="text/css" href="css/reset.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
<div id="main">
	<div id="header">
		<div id="logo"><img src="images/logo.gif" alt="Dalal &amp; Broacha - Logo" /></div>
		<ul id="menu">
			<li><a href="http://www.dalalbroacha.com/home.php"><img src="images/menu_equity_backoffice.gif"  alt="Home" /></a></li>
			<li style="float:right"><a href="http://www.dalal-broacha.com/"><img src="images/menu_db_home.gif"  alt="Home" /></a></li>
		</ul>
	</div>
	<div id="content" class="home">
		<div class="left">
			<ul>
				<li><a href="http://www.dalalbroacha.com/sqlfiles/index.asp" target="_blank"><img src="images/txt_click_view_reports.gif" alt="Click here to View Reports" /></a></li>
				<li style="border:0px;"><img src="images/back_office_contacts.gif" alt="" border="0" usemap="#Map" />
					<map name="Map" id="Map">
						<area shape="rect" coords="33,87,205,104" href="mailto:info@dalalbroacha.com" />
					</map>
				</li>
			</ul>
		</div> 
		<div class="right">
			<ul id="slider">
				<li><img src="images/slider_04.jpg" alt="" /></li>
			</ul>
		</div>
	</div>
	<div id="footer">
		<p>SEBI Registration Nos<br />BSE Cash: INB010980633 | BSE Deri: INF010980633 | NSE Cash: INB230980634 | NSE Deri: INF230980634 | CDSL: IN – DP – CDSL – 17 – 99 | PMS: INP000001975</p>
		<p>
			<span class="blue">Disclaimer</span><br />
			GO TO: <a href="http://www.nseindia.com/" target="_blank">NSE</a> | <a href="http://www.bseindia.com/" target="_blank">BSE</a> | <a href="http://www.cdslindia.com/" target="_blank">CSDL</a><br />
			Dalal &amp; Broacha Stock Broking Pvt. Ltd. © 2010, All Rights Reseved.<br />
			Regd. Office: 506, Maker Chambers V, 221, Nariman Point, Mumbai - 400021. 
		</p>
	</div>
</div>
<p class="footer_txt"><span class="white">Website developed by</span> <span><a class="green" style="text-decoration: none;" href="http://www.colourcraftstudio.co.in" target="_blank">ColourCraft Studio</a></span></p>
</body>
</html>