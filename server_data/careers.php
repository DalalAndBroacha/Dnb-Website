<?php $menu = "careers"; ?>
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
			<div class="common">
				<img src="images/txt_career_at_dnb.png" style="margin-top:5px;" alt="Careers" /><br />
				<div style="float:left; width:32px; padding-left:17px;">
					<img src="images/icon_phone.png" alt="Phone" /><br /><br /><img src="images/icon_mail.gif" style="margin-top:8px;"  alt="mail" />
				</div>
				<div style="float:left; width:200px;">
					<img src="images/img_contacts.png" alt="contacts" border="0" usemap="#Map" />
					<map name="Map" id="Map">
						<area shape="rect" coords="8,54,193,70" href="mailto:careers@dalal-broacha.com" target="_blank" />
					</map>
				</div>
			</div>
		</div> 
		<div class="right">
			<div><img src="images/img_careers.png" class="side_img" alt="Careers" style="float:right" />
				<p class="first"><strong style="font-size:16px;">OUR PEOPLE ARE OUR ASSETS</strong></p>
				<p>The quality of our people is and always will be the key factor in delivering excellence to our clients.</p>
				<p>At Dalal &amp; Broacha we strive to nurture only the best talent for each role and competency. Candidates are gauged not only by criteria such as educational qualification, experience and communication skills but, more importantly, by their values. Being an enterprise driven by ethics and excellence, Dalal &amp; Broacha looks for people who mirror and inculcate the same principles in their professional lives.</p>
				<p>The environment at Dalal &amp; Broacha is one of constructive competition as well as teamwork, traditional wisdom as well as creativity, personal motivation as well as common purpose. We encourage our people to think outside the box but always remain within the boundaries of ethics and morality. We are stakeholders in their financial and professional success.</p>
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