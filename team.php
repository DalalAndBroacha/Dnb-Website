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
				<li><a href="milestones.php"><img src="images/txt_milestone.gif" alt="milestone" /></a></li>
				<li><a href="team.php"><img src="images/txt_team1.gif" alt="team" /></a></li>
				<li style="border:0; padding:30px 0 0 15px;"><a href="Dalal & Brocha Corporate Profile.pdf" target="_blank"><img src="images/profile_pdf1.gif" alt="" style="vertical-align:bottom" /><img src="images/txt_corporate_profile.gif" style="vertical-align:top; margin:7px 0 0 6px;" alt="corporate profile" /></a></li>
			</ul>
		</div> 
		<div class="right">
			<div>
				<p><img src="images/img_team.jpg" style="margin:-2px 0 0 -20px;" alt="Team" /></p>
				<table cellpadding="0" cellspacing="0" class="teams" border="0">
					<tr>
						<td>
							<h3>Nailesh Dalal (Director)</h3>
							<p>A Bachelor of Commerce with a diploma in management, his strength lies in understanding people, whether employees or customers. With 25 years’ experience in the field, his people management skills are a definite advantage to the firm - and this shows in the firm’s successful management of a huge customer base. He handles the firm’s retail and financial functions.</p>
						</td>
						<td>
							<h3>Vipul Dalal (Director)</h3>
							<p>Dalal &amp; Broacha's strong institutional relationships, built over the last 20 years, are due to the efforts of this Bachelor of Commerce. The focus on institutional business increased after he joined the firm whose position amongst institutional buyers is owed largely to his efforts.</p>
						</td>
					</tr>
					<tr>
						<td>
							<h3>Hriday Dalal</h3>
							<p>A third-generation family member to join the business with a post-graduate qualification. He has spent the last 5 years working across various business verticals of the firm. Having gone through the rigours, he now focuses on business development and new businesses. He heads the firm's Corporate Treasury Desk.</p>
						</td>
						<td>
							<h3>Nilay Dalal</h3>
							<p>The second of the third-generation family member to join the business, this post graduate has worked for 2 years in various verticals of the business and now has set his focus on business development and new businesses.</p>
						</td>
					</tr>
					<tr>
						<td>
							<h3>Milind Karmarkar (Head - Research)</h3>
							<p>Dalal &amp; Broacha's research department, comprising a team of six, was set up by this Chartered Accountant. He joined the firm over fifteen years ago after having spent a few years in corporate planning and financial management.</p>
						</td>
						<td>
							<h3>Bhavesh Doshi (Head – Fixed Income &amp; Distribution)</h3>
							<p>With Dalal &amp; Broacha for over 15 years, this Cost Accountant was responsible for setting up the firm’s Fixed Income &amp; Distribution Desk, which he heads today. A go-getter, he is responsible for the firm's branch expansion along with new businesses.</p>
						</td>
					</tr>
					<tr>
						<td>
							<h3>Anil Chaudary (Head – Depository &amp; IT)</h3>
							<p>He is credited with having set up our Depository Desk. He is also responsible for providing a seamless integration of technology, giving Dalal &amp; Broacha a trouble-free platform to service its clients. He brings more than 15 years’ experience in office equipment and financial services to the business.</p>
						</td>
						<td>
							<h3>Hiren Shah (Head – HR &amp; Strategic Planning)</h3>
							<p>A capital market vetren, he brings with him 30 years of experience in various fields ranging from merchant banking to broking. With Dalal &amp; Broacha since 15 years, he manages the Human Resources and general administration as well as strategic planning.</p>
						</td>
					</tr>
				</table>
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