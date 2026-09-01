<?php $menu = "about"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dalal &amp; Broacha</title>
<link rel="stylesheet" type="text/css" href="css/reset.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
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
				<li><a href="about_us.php"><img src="images/txt_corporate_profile2.gif" alt="corporate profile" /></a></li>
				<li><a href="philosophy.php"><img src="images/txt_philosophy.gif" alt="philosophy" /></a></li>
				<li><a href="milestones.php"><img src="images/txt_milestone1.gif" alt="milestone" /></a></li>
				<li><a href="team.php"><img src="images/txt_team.gif" alt="team" /></a></li>
				<li style="border:0; padding:30px 0 0 15px;"><a href="Dalal & Brocha Corporate Profile.pdf" target="_blank"><img src="images/profile_pdf1.gif" alt="" style="vertical-align:bottom" /><img src="images/txt_corporate_profile.gif" style="vertical-align:top; margin:7px 0 0 6px;" alt="corporate profile" /></a></li>
			</ul>
		</div> 
		<div class="right">
			<div>
				Dalal &amp; Broacha has always followed a path of consistent and sustainable growth, adding milestones <br />that realize value for the customer and strengthen our market presence.<br />
				<img src="images/img_milestone.gif" style="margin:0 0 0 -1px;" alt="" />
			</div>
		</div>
	</div>
	<div id="footer">
		<?php include("footer.php"); ?>
	</div>
</div>
<p class="footer_txt"><span class="white">Website developed by</span> <span><a class="green" style="text-decoration: none;" href="http://www.colourcraftstudio.co.in" target="_blank">ColourCraft Studio</a></span></p>
</body>
</html>