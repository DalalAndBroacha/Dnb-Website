
		<div id="logo"><img src="images/logo.gif" alt="Dalal &amp; Broacha" /></div>
		<ul id="menu" aria-label="Main navigation menu">
		<?php if($menu=="home") { ?>
			<li><a href="index.php" rel="images/menu_home1.gif" aria-current="page"><img src="images/menu_home1.gif"  alt="Home" /></a></li>
		<?php } else { ?>
			<li><a href="index.php" rel="images/menu_home1.gif"><img src="images/menu_home.gif"  alt="Home" /></a></li>
		<?php } if($menu=="about") { ?>
			<li><a href="about_us.php" rel="images/menu_about1.gif"><img src="images/menu_about1.gif" alt="About Us" /></a></li>
		<?php } else { ?>
			<li><a href="about_us.php" rel="images/menu_about1.gif"><img src="images/menu_about.gif" alt="About Us" /></a></li>
		<?php } if($menu=="products") { ?>
			<li><a href="products.php" rel="images/menu_products1.gif"><img src="images/menu_products1.gif" alt="Products" /></a></li>
		<?php } else { ?>
			<li><a href="products.php" rel="images/menu_products1.gif"><img src="images/menu_products.gif" alt="Products" /></a></li>
		<?php } if($menu=="careers") { ?>
			<li><a href="careers.php" rel="images/menu_careers1.gif"><img src="images/menu_careers1.gif" alt="Careers" /></a></li>
		<?php } else { ?>
			<li><a href="careers.php" rel="images/menu_careers1.gif"><img src="images/menu_careers.gif" alt="Careers" /></a></li>
		<?php } if($menu=="contact") { ?>
			<li><a href="contact.php" rel="images/menu_conact1.gif"><img src="images/menu_conact1.gif" alt="Contact Us" /></a></li>
		<?php } else { ?>
			<li><a href="contact.php" rel="images/menu_conact1.gif"><img src="images/menu_conact.gif" alt="Contact Us" /></a></li>
		<?php } ?>
		</ul>