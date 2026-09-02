<?php $menu = "about"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>About_Us &mdash; Dalal &amp; Broacha | Stock Broking &amp; Wealth Management</title>
<link rel="stylesheet" type="text/css" href="css/reset.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/a11y.css" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
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
	});
</script>
</head>

<body>
<div id="main">
	<div id="header">
		<?php include("header.php"); ?>
	</div>
	<div id="content">
		<div class="left">
			<ul>
				<li><a href="about_us.php"><img src="images/txt_corporate_profile1.gif" alt="corporate profile" /></a></li>
				<li><a href="philosophy.php"><img src="images/txt_philosophy.gif" alt="philosophy" /></a></li>
				<li><a href="milestones.php"><img src="images/txt_milestone.gif" alt="milestone" /></a></li>
				<li><a href="team.php"><img src="images/txt_team.gif" alt="team" /></a></li>
				<li style="border:0; padding:30px 0 0 15px;"><a href="Dalal & Brocha Corporate Profile.pdf" target="_blank" rel="noopener noreferrer"><img src="images/profile_pdf1.gif" alt="" style="vertical-align:bottom" /><img src="images/txt_corporate_profile.gif" style="vertical-align:top; margin:7px 0 0 6px;" alt="corporate profile" /></a></li>
			</ul>
		</div> 
		<div class="right">
			<div><img src="images/img_about.gif" class="side_img" alt="Corporate Profile" style="float:right" />
				<p class="first">The firm traces its beginnings to 1961, when Priyakant Dalal joined forces with Shapur Broacha to establish Dalal & Broacha. The company has steadily evolved and matured through four decades, consolidating its managerial strengths to handle corporate growth, while expanding its service portfolio to answer changing investor needs.</p>
				<p>Today, the firm is an integrated financial services player offering an extensive range of financial solutions and services to a wide spectrum of customers with varied needs ranging from equities to mutual funds to commodities to depository services.</p>
				<p>The firm is a member of Bombay Stock Exchange, as well as the National Stock Exchange in the Cash as well as the F&O segments. It is also a member of the Multi Commodity Exchange and is a Depository Participant with CDSL.</p>
				<p>Other services provided by the company include distribution of Mutual Funds, IPOs, and Portfolio Management Services, with the firm currently handling over 20,000 retail clients, NRIs, corporates, banks, mutual funds, and FIIs.</p>
			</div>
		</div>
	</div>
	<div id="footer">
		<?php include("footer.php"); ?>
	</div>
</div>
<p class="footer_txt"><span class="white">Website developed by</span> <span><a class="green" style="text-decoration: none;" href="http://www.colourcraftstudio.co.in" target="_blank" rel="noopener noreferrer">ColourCraft Studio</a></span></p>
</body>
</html>