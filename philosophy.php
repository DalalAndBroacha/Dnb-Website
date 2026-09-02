<?php $menu = "about"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Philosophy &mdash; Dalal &amp; Broacha | Stock Broking &amp; Wealth Management</title>
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
<style>
.right p { line-height:32px; }
</style>
</head>

<body>
<div id="main">
	<div id="header">
		<?php include("header.php"); ?>
	</div>
	<div id="content" style="padding-bottom:10px">
		<div class="left">
			<ul>
				<li><a href="about_us.php"><img src="images/txt_corporate_profile2.gif" alt="corporate profile" /></a></li>
				<li><a href="philosophy.php"><img src="images/txt_philosophy1.gif" alt="philosophy" /></a></li>
				<li><a href="milestones.php"><img src="images/txt_milestone.gif" alt="milestone" /></a></li>
				<li><a href="team.php"><img src="images/txt_team.gif" alt="team" /></a></li>
				<li style="border:0; padding:30px 0 0px 15px;"><a href="Dalal & Brocha Corporate Profile.pdf" target="_blank" rel="noopener noreferrer"><img src="images/profile_pdf_.gif" alt="" style="vertical-align:bottom; margin-top:10px" /><img src="images/txt_corporate_profile.gif" style="vertical-align:top; margin:13px 0 0 6px;" alt="corporate profile" /></a></li>
			</ul>
		</div> 
		<div class="right">
			<div><img src="images/img_philosophy.jpg" class="side_img" alt="Corporate Profile" style="float:right" />
				<p style="line-height:20px;" class="first"><strong>At Dalal &amp; Broacha, we have preserved our core philosophy since our inception almost 50 years ago. It is embodied in the following principles:</strong></p>
				<p>► Long-term approach to investments </p>
				<p>► Avoiding any kind of speculative risk-taking </p>
				<p>► Protecting our clients' capital </p>
				<p>► Ensuring steady growth at every opportunity </p>
				<p>► Ensuring absolute transparency</p>
				<p>► Maintaining the trust of our clients </p>
				<p>► Nurturing long-term relationships</p>
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