<?php $menu = "products"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Products &mdash; Dalal &amp; Broacha | Stock Broking &amp; Wealth Management</title>
<link rel="stylesheet" type="text/css" href="css/reset.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/a11y.css" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/switchcontent.js" ></script>
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
				<li><a href="products.php"><img src="images/txt_service_suite.gif" alt="service suite" /></a></li>
				<li style="border:0; padding:30px 0 0 15px;"><a href="Dalal & Brocha Corporate Profile.pdf" target="_blank" rel="noopener noreferrer"><img src="images/profile_pdf1.gif" alt="" style="vertical-align:bottom" /><img src="images/txt_product_brochure.gif" style="vertical-align:top; margin:7px 0 0 6px;" alt="corporate profile" /></a></li>
			</ul>
		</div> 
		<div class="right">
			<div><img src="images/img_products.jpg" class="side_img" width="294" height="420" alt="Products" style="float:right" />
				<p class="first" style="padding-bottom:15px;">Dalal &amp; Broacha offers its clientele an integrate platform to satisfy any financial service requirement. Our extensive service suite includes the following services:</p>
				<div style="color: black;" class="handcursor" id="bobcontent1-title">
					<span class="status"></span>
					<div class="title">Institutional Equities Desk</div>
				</div>
				<div style="display: none;" id="bobcontent1" class="switchgroup1">
				Since it was set up nearly two decades ago, our
				Institutional Equity Desk has grown exponentially.
				Today, we are doing business with each and every
				major financial institution, bank and mutual fund in
				India, along with a large number of Foreign Institutional
				Investors (FIIs).
				Our Institutional Equities Desk comprises two
				functions – namely, Sales and Dealing. The Sales team,
				whose primary responsibility is client servicing and
				business acquisition, acts as a liaison between the
				Dealing team, our Research desk and the Client. The
				Dealing team is responsible for the accurate execution
				of orders placed by our institutional clients and for
				providing the latter with real-time market inputs.
				The Institutional Equities Desk coordinates with the
				Research Department to provide world-class services
				to this very demanding group of customers.
				</div>
				
				<div style="color: black;" id="bobcontent2-title" class="handcursor">
					<span class="status"></span>
					<div class="title">Retail Equities Desk</div>
				</div>
				<div style="display: none;" id="bobcontent2" class="switchgroup1">
				Our Retail business is the backbone of our company
				and owes its success largely to the emphasis laid on
				building steady, long-term relationships – some of
				which have lasted longer than three decades. The
				firm currently services over 20,000 registered clients
				throughout India with the help of 15 branches and
				several associates.
				</div>
				
				<div style="color: black;" id="bobcontent3-title" class="handcursor">
					<span class="status"></span>
					<div class="title">Portfolio Management Services</div>
				</div>
				<div style="display: block;" id="bobcontent3" class="switchgroup1">
				A recent addition to our bouquet of products, our
				portfolio management service is designed keeping in
				mind the needs of our High Net Worth customers.
				The service offers a complete end-to-end solution for
				customers who are looking at maximizing their
				returns through expert fund management.
				</div>
				
				<div style="color: black;" id="bobcontent4-title" class="handcursor">
					<span class="status"></span>
					<div class="title">NRI Desk</div>
				</div>
				<div style="display: none;" id="bobcontent4" class="switchgroup1">
				This dedicated desk addresses the various needs of
				our many NRI clients settled all across the globe. We
				believe that most clients settled abroad need special
				attention for the many compliance and tax related
				regulations enforced in India. We strive to provide
				comprehensive solutions to their many needs through
				expert empirical advice and perspectives drawn from
				20 years of experience in handling this class of
				customers.
				</div>
				
				<div style="color: black;" id="bobcontent5-title" class="handcursor">
					<span class="status"></span>
					<div class="title">Corporate Treasury Desk</div>
				</div>
				<div style="display: none;" id="bobcontent5" class="switchgroup1">
				With a team comprising resourceful and highly
				qualified experts, this desk helps many leading Indian
				corporate houses and banks better manage their
				treasury functions in order to maximize their returns.
				The firm enjoys an excellent reputation with this
				group, as well as sound, long-standing relationships
				which it strives to enhance – while establishing new
				ones – through excellent service and expert advice.
				</div>
				
				<div style="color: black;" id="bobcontent6-title" class="handcursor">
					<span class="status"></span>
					<div class="title">Depository Services</div>
				</div>
				<div style="display: none;" id="bobcontent6" class="switchgroup1">
					Through its depository services the firm offers its
					customers smooth, seamless, efficient and paperless
					settlement of all trades and transactions undertaken
					by them.
				</div>
				
				<div style="color: black;" id="bobcontent7-title" class="handcursor">
					<span class="status"></span>
					<div class="title">Distribution Desk</div>
				</div>
				<div style="display: none;" id="bobcontent7" class="switchgroup1">
				The distribution business of the firm mainly deals with
				distribution of many third party investment products,
				namely mutual funds, IPOs, and saving instruments.
				The firm enjoys a sizeable amount of Assets under
				Management with all leading mutual funds in India
				and is a preferred distributor for most of them. The
				desk also has a mutual fund-specific research team,
				which tracks and analyses in detail, performances of
				different funds in different categories. The team also
				consists of a highly competent sales staff that
				methodically studies each client's requirement and
				offers him an ideally suited solution.
				</div>
				
				<div style="color: black;" id="bobcontent8-title" class="handcursor">
					<span class="status"></span>
					<div class="title">Fixed Income Desk</div>
				</div>
				<div style="display: none;" id="bobcontent8" class="switchgroup1">
				This division of the firm deals mainly in debt
				instruments such as government securities, corporate
				bonds, state government bonds, etc. The desk deals
				with mainly provident funds, gratuity funds, pension
				funds, trusts, banks, and Primary Dealers. The firm is
				also a member of the WDM segment of the NSE and
				caters to many Institutional clients such as banks and
				Primary Dealers.
				</div>
				
				<div style="color: black;" id="bobcontent9-title" class="handcursor">
					<span class="status"></span>
					<div class="title">Commodities</div>
				</div>
				<div style="display: none;" id="bobcontent9" class="switchgroup1">
					The company is a member of the Multi Commodity
					Exchange and offers its customers a trading
					opportunity in all different commodity classes.
				</div>
				
				<div style="color: black;" id="bobcontent10-title" class="handcursor">
					<span class="status"></span>
					<div class="title">Research</div>
				</div>
				<div style="display: none;" id="bobcontent10" class="switchgroup1">
					We do not claim to be the premier equity research
					house in the country, but we pride ourselves in being
					an idea based research outfit with a “bottoms up”
					approach - and the best in the league. Our Research
					caters to both Institutional and Retail Clients. Our
					brief is simple: identify good businesses with decent
					management at a reasonable price.
					The process involves identifying good businesses,
					meeting the management, analyzing the balance
					sheet and recommending the idea to a client. In the
					past year we have met about 200 companies across
					the country. Though we follow a bottoms up
					approach, we have a team of six analysts, each
					specialising in different sectors.
				</div>					
				
				<script type="text/javascript">
				// MAIN FUNCTION: new switchcontent("class name", "[optional_element_type_to_scan_for]") REQUIRED
				// Call Instance.init() at the very end. REQUIRED
				
				var bobexample=new switchcontent("switchgroup1", "div") //Limit scanning of switch contents to just "div" elements
				bobexample.setStatus('<div align="right" style="float:right"><img src="images/icon_open.gif" /></div> ', '<div align="right" style="float:right"><img src="images/icon_close.gif" /></div> ')
				bobexample.setColor('black', 'black')
				bobexample.setPersist(true)
				bobexample.collapsePrevious(true) //Only one content open at any given time
				bobexample.init()
				</script>
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