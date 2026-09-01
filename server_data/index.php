<?php $menu = "home"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dalal &amp; Broacha</title>
<link rel="stylesheet" type="text/css" href="css/reset.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery.innerfade.js"></script>
<script type="text/javascript">
	$(document).ready( function() {
		$("ul#menu > li > a").hover( function() {
			// alert($(this).attr("rel"));
			var rel = $(this).attr("rel");
			var href = $(this).find("img").attr("src");
			//alert(rel+" "+href);
			$(this).find("img").attr("src", rel);
			$(this).attr("rel", href);
		}, function () {
			var rel = $(this).attr("rel");
			var href = $(this).find("img").attr("src");
			//alert(rel+" "+href);
			$(this).find("img").attr("src", rel);
			$(this).attr("rel", href);
		});		
		
		
		$('ul#slider').innerfade({
			speed: 1000,
			timeout: 4000,
			type: 'sequence',
			containerheight: '315px'
		});

		
	});
</script>
</head>

<body>
<div id="main">
	<div id="header">
		<?php include("header.php"); ?>
	</div>
	<div id="content" class="home">
		<div class="left">
			<ul>
				<li><a href="http://www.dalalbroacha.com/" target="_blank"><img src="images/txt_equity_backoffice.gif" alt="equity backoffice" /></a></li>
				<li><a href="http://www.mf-dalal-broacha.com/" target="_blank"><img src="images/txt_mutual_funds.gif" alt="mutual funds backoffice" /></a></li>
				<li><a href="http://www.dalalbroachatrade.com/" target="_blank"><img src="images/txt_online_trading.gif" alt="ONLINE TRADING" /></a></li>
				<li style="border:0; padding:30px 0 0 15px;"><a href="Dalal & Brocha Corporate Profile.pdf" target="_blank"><img src="images/profile_pdf_.gif" alt="" style="vertical-align:bottom" /><img src="images/txt_corporate_profile.gif" style="vertical-align:top; margin:0px 0 0 6px;" alt="corporate profile" /></a></li>
			</ul>
		</div> 
		<div class="right">
			<ul id="slider">
				<li><img src="images/slider_01.jpg" alt="" /></li>
				<li><img src="images/slider_02.jpg" alt="" /></li>
				<li><img src="images/slider_03.jpg" alt="" /></li>
				<li><img src="images/slider_04.jpg" alt="" /></li>
				<li><img src="images/slider_05.jpg" alt="" /></li>
				<li><img src="images/slider_06.jpg" alt="" /></li>
				<li><img src="images/slider_07.jpg" alt="" /></li>
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