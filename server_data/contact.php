<?php 
$menu = "contact";

require_once("functions.php");
$ie = ae_detect_ie();
$city = "";
if(isset($_GET["city"])) {
	$city = $_GET["city"];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dalal &amp; Broacha</title>
<link rel="stylesheet" type="text/css" href="css/reset.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery.pngFix.pack.js"></script>
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
		
		$("#submitBtn").click(function() {
			$name = $("#Name").val();
			$email = $("#Email").val();
			$msg = $("#Message").val();
			$(".errorMsg").hide();
			if($name=="") {
				$("#Name").next().html("Please enter your name").show();
				$("#Name").focus();
				return false;
			} else if($email=="") {
				$("#Email").next().html("Please enter your email").show();
				$("#Email").focus();
				return false;
			} else if(!IsValidEmail($email)) {
				$("#Email").next().html("Please enter valid email").show();
				$("#Email").focus();
				return false;
			} else if($msg=="") {
				$("#Message").next().html("Please enter your message").show();
				$("#Message").focus();
				return false;
			} else {
				$.post('contact_submit.php', $("#contact").serialize(), function(data) {
					$("#contact").hide();
				  	$('.result').html(data).fadeIn(800);
					return false;
				});
			}
			return false;
		});
		
		$("#Name").blur(function() {
			$(".errorMsg").hide();
			if($("#Name").val()=="") {
				$("#Name").next().html("Please enter your name").show();
				return false;
			}
		});
		
		$("#Email").blur(function() {
			$(".errorMsg").hide();
			if($("#Email").val()=="") {
				$("#Email").next().html("Please enter your email").show();
				return false;
			} else if(!IsValidEmail($("#Email").val())) {
				$("#Email").next().html("Please enter valid email").show();
				return false;
			}
		});
		
		$("#Message").blur(function() {
			$(".errorMsg").hide();
			if($("#Message").val()=="") {
				$("#Message").next().html("Please enter your message").show();
				return false;
			}
		});
		
		function IsValidEmail(email) {
			var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;			
			return filter.test(email);
		}		
	});
	


function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
</head>
<body>
<div id="main">
	<div id="header">
		<?php include("header.php"); ?>
	</div>
	<div id="content" class="contact">
		<div class="left">
			<div style="padding-left:11px;"><img src="images/txt_locate.gif" alt="Locate a Branch" /></div>
			<br />
			<img src="images/txt_contact_us_online.gif" alt="Contact us online" /><br />
			<div>
				<div class="result"></div><br />
				<form name="contact" id="contact" method="post">
					<div>
						<div style="float:left; padding:4px 27px 0px 13px;"> Name: </div>
						<div>
							<input name="Name" type="text" id="Name" style="border:solid; border-color: #C0C0C0; border-width:2px; width:175px;" />
							<div class="errorMsg"></div>
						</div>
					</div>
					<br />
					<div>
						<div style="float:left; padding:4px 30px 0px 13px;"> Email: </div>
						<div>
							<input name="Email" type="text" id="Email" style="border:solid; border-color: #C0C0C0; border-width:2px; width:175px;" />
							<div class="errorMsg"></div>
						</div>
					</div>
					<br />
					<div>
						<div style="float:left; padding:4px 45px 0px 13px;"> Tel: </div>
						<div>
							<input name="Phone" type="text" id="Phone" style="border:solid; border-color: #C0C0C0; border-width:2px; width:175px;" />
						</div>
					</div>
					<br />
					<div>
						<div style="float:left; padding:4px 10px 0px 13px;"> Message: </div>
						<div>
							<textarea name="Message" rows="3" id="Message" style="overflow:hidden; border:solid; border-color: #C0C0C0; width:175px; border-width:2px;"></textarea>
							<div class="errorMsg"></div>
						</div>
					</div>
					<br />
					<div style="padding-left:201px;">
						<input name="Submit" type="image" id="submitBtn" src="images/send.gif" alt="Send" width="56" height="32" />
					</div>
				</form>
				<br />
				<br />
			</div>
			<div style="font-family:Arial; font-size:12px; padding-left:13px; float:left; width:250px; padding-right:5px; line-height:16px;">
				<?php
				/*	if(isset($confirm)) {
						echo "<strong>" . $confirm . "</strong>";
						echo "<br /><br /><br />";
					}*/
				?>
				For any investor grievances or complaints, kindly contact:<br />
				<span style="font-weight:bold">compliance.officer@dalal-broacha.com</span><br />
			</div>
		</div>
		<div class="right">
			<div>
				<div class="contact_right"><img src="images/img_map.png" alt="Map" width="358" height="420" border="0" usemap="#Map" /></div>
				<div class="contact_left">
					<div align="left">
						<form name="form" id="form">
							<select name="jumpMenu" style="width:275px; border:2px solid #C0C0C0; font-size:14px; margin-top:8px;" id="jumpMenu" onChange="MM_jumpMenu('parent',this,0)">
								<option value="contact.php?city=Mumbai">Select a City</option>
								<option value="contact.php?city=Anand" <?php sticky_menu("Anand", $city); ?>>Anand</option>
								<option value="contact.php?city=Badlapur" <?php sticky_menu("Badlapur", $city); ?>>Badlapur</option>
								<option value="contact.php?city=Bhubaneswar" <?php sticky_menu("Bhubaneswar", $city); ?>>Bhubaneswar</option>
								<option value="contact.php?city=Chennai" <?php sticky_menu("Chennai", $city); ?>>Chennai</option>
								<option value="contact.php?city=Delhi" <?php sticky_menu("Delhi", $city); ?>>Delhi</option>
								<option value="contact.php?city=Faridabad" <?php sticky_menu("Faridabad", $city); ?>>Faridabad</option>
								<option value="contact.php?city=Junagarh" <?php sticky_menu("Junagarh", $city); ?>>Junagarh</option>
								<option value="contact.php?city=Kolkata" <?php sticky_menu("Kolkata", $city); ?>>Kolkata</option>
								<option value="contact.php?city=Mumbai" <?php sticky_menu("Mumbai", $city); ?>>Mumbai</option>
								<option value="contact.php?city=Pune" <?php sticky_menu("Pune", $city); ?>>Pune</option>
								<option value="contact.php?city=Vadodara" <?php sticky_menu("Vadodara", $city); ?>>Vadodara</option>
							</select>
						</form>
					</div>
					<div style="font-size:12px; line-height:16px;"><br />
						<?php
						if ($city == "") {
						   location();
						}
						else {
						   location($city);	
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<div id="footer">
		<?php include("footer.php"); ?>
	</div>
</div>
<p class="footer_txt"><span class="white">Website developed by</span> <span><a class="green" style="text-decoration: none;" href="http://www.colourcraftstudio.co.in" target="_blank">ColourCraft Studio</a></span></p>
<map name="Map">
<area shape="rect" coords="160,227,222,237" href="contact.php?city=Bhubaneswar">
<area shape="rect" coords="109,333,146,343" href="contact.php?city=Chennai">
<area shape="rect" coords="79,257,103,267" href="contact.php?city=Pune">
<area shape="rect" coords="82,232,123,242" href="contact.php?city=Mumbai">
<area shape="rect" coords="88,220,134,228" href="contact.php?city=Badlapur">
<area shape="rect" coords="93,202,137,215" href="contact.php?city=Vadodara">
<area shape="rect" coords="56,192,82,200" href="contact.php?city=Anand">
<area shape="rect" coords="31,230,70,239" href="contact.php?city=Junagarh">
<area shape="rect" coords="139,124,166,134" href="contact.php?city=Delhi">
<area shape="rect" coords="138,153,183,163" href="contact.php?city=Faridabad">
<area shape="rect" coords="211,200,244,210" href="contact.php?city=Kolkata">
</map>
</body>
</html>