<!DOCTYPE html>

<html lang = "en">

<head>
	<title>Apple Harvest Festival</title>
	<link rel="stylesheet" href="styles/style.css" type="text/css">
	<script src="js/imagecycle.js"></script>
    
    <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Montserrat">
    
    <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Open+Sans">
</head>

<body>
	<div id="sticky_header">
		<div id="banner">
        <!-- banner image source: http://static.wixstatic.com/media/d4038b_a5c0a6f2d48448ef8e11806e7476cbe7.jpg -->
			<h1>Apple Harvest Festival</h1>
            <h3>Sept 30-Oct 2, 2016</h3>
            <?php
			include 'includes/sm.php';
			?>
		</div> <!-- end of banner div -->
		<!-- temporary links for sm images:
		Facebook:http://downtownithaca.com/local/images/ad_fb.jpg
		Twitter:http://downtownithaca.com/local/images/ad_twitter.jpg
		Youtube:http://downtownithaca.com/local/images/ad_youtube.jpg-->
		<div id="nav_bar">
			<span class="navspan">Home</span>
			<span class="navspan"><a href = "vendors.php"> Vendors </a></span>
			<span class="navspan"><a href = "events.php"> Events </a></span>
			<span class="navspan"><a href = "gallery.php"> Gallery </a></span>
			<span class="navspan"><a href = "transportation.php"> Transportation </a></span>
			<span class="navspan"><a href = "contact.php"> Contact Us </a></span>
		</div> <!-- end of navbar div -->
	</div> <!-- end of stickyheader div -->
	<div id="main">
		<!--<div class="buttons">
			<button onclick="change(0);">Previous</button>
        	<button onclick="change(1);">Next</button>
		</div>-->
		<div id= "photo1">
			<img src="images/apple_fest.jpeg" alt="Apple Fest">
		</div>
		<div id="photo2">
            <img src="images/DSC_0510.JPG" alt="Maple Syrup">
            <img src="images/DSC_0687.JPG" alt="Apples">\
        </div>
		<div id="content">
			<h1>About</h1>
				<p>For 34 years, Ithaca, NY has hosted plenty of apples, local produce, fresh baked goods, fun entertainment and live performances on two stages. The Apple Harvest Festival is always a great introduction to the rich farm and artist community of Ithaca.</p> 
            
                <p>This year, at the <span>34th Annual Great Downtown Ithaca Apple Harvest festival</span>, first time visitors can witness a variety of wonderful local entertainment while also visiting the historical outdoor pedestrian shopping mall, The Ithaca Commons.  The pedestrian mall is the epicenter of the festival and the gateway to a nostalgic journey to harvest season fun.</p>
            
                <p>Over 100 vendors will be selling unique apple varieties, hot apple cider donuts, kettle corn, local farm fresh baked goods and a multitude of around the world specialties. Local farmers are on site selling everything from tasty apple beverages to local pumpkins and of course, apples, apples and more apples. Wineries and cideries have regional beverages available for tasting and purchase and 50 different handcrafting artisans along Cayuga Street will be offering one of a kind items for purchase. </p>
            
			<h1>Featured Events</h1>
				<h3>Free Events</h3>
					<p>Integer vitae faucibus dolor. Nullam sed libero fringilla, dapibus velit nec, consequat ex. Quisque consequat sapien neque, ut mollis metus viverra sed. In commodo risus lorem, in malesuada nisi euismod eu. Duis vel dolor non erat sodales molestie eget id risus. Integer rhoncus magna nec eleifend fermentum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean facilisis efficitur sollicitudin. Aliquam tristique nisi nec ullamcorper vehicula. Ut in lorem egestas, gravida erat at, facilisis est.</p>
				<h3>Main Stage</h3>
					<p>Integer vitae faucibus dolor. Nullam sed libero fringilla, dapibus velit nec, consequat ex. Quisque consequat sapien neque, ut mollis metus viverra sed. In commodo risus lorem, in malesuada nisi euismod eu. Duis vel dolor non erat sodales molestie eget id risus. Integer rhoncus magna nec eleifend fermentum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean facilisis efficitur sollicitudin. Aliquam tristique nisi nec ullamcorper vehicula. Ut in lorem egestas, gravida erat at, facilisis est.</p>
			<h1>Directions</h1>
				<p>Vestibulum facilisis eros a lacus commodo, sed facilisis erat malesuada. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus malesuada posuere eros, sed maximus leo tempus et. Sed at tempor nisl. Quisque nec ex in libero dapibus cursus ut in sapien. Phasellus ante velit, congue ac tortor sed, vehicula sodales elit. Suspendisse id nisi lorem. Fusce vitae neque dignissim, aliquam ex non, ultrices erat. Nulla elementum, nulla sit amet gravida malesuada, enim ipsum ullamcorper nunc, nec maximus leo quam quis nunc. Quisque fermentum felis in dignissim dignissim. In aliquet tristique massa. Quisque pretium suscipit mattis.</p>
		</div> <!-- end of content div -->
	</div> <!-- end of main div -->
	<div id = "twitfeed">
	<a class="twitter-timeline" data-width="220" data-height="800" href="https://twitter.com/downtownithaca">Tweets by downtownithaca</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
	</div> <!-- end of twitfeed div -->
</body>

</html>