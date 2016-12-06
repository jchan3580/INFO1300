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
		<div id= "photo1">
			<a href="gallery.php">
			<img src="images/apple_fest.jpeg" alt="Apple Fest">
			<!--Photo from: http://www.downtownithaca.com/ithaca-events/Apple%20Harvest%20Festival%20Presented%20by%20Tompkins%20Trust-->
			</a>
		</div>
		<div id="photo2">
			<a href="gallery.php">
            <img src="images/DSC_0510.JPG" alt="Maple Syrup">
            <!-- Photo taken by Amy Zhong-->
            </a>
            <a href="gallery.php">
            <img src="images/DSC_0687.JPG" alt="Apples">
            <!-- Photo taken by Amy Zhong -->
            </a>
        </div>
        <div id="photo3">
        	<a href="gallery.php">
        	<img src="images/IMG_3882.jpg" alt="Ithaca Commons">
        	<!-- Photo taken by Mariel Terr -->
        	</a>
        </div>
		<div id="content">
			<h1>About</h1>
            <!-- about information sources: http://www.downtownithaca.com/ithaca-events/Apple%20Harvest%20Festival%20Presented%20by%20Tompkins%20Trust, https://www.facebook.com/events/625283334301662/ -->
				<p>For 34 years, Ithaca, NY has hosted plenty of apples, local produce, fresh baked goods, fun entertainment and live performances on two stages. The Apple Harvest Festival is always a great introduction to the rich farm and artist community of Ithaca.</p> 
            
                <p>This year, at the <span>34th Annual Great Downtown Ithaca Apple Harvest festival</span>, first time visitors can witness a variety of wonderful local entertainment while also visiting the historical outdoor pedestrian shopping mall, The Ithaca Commons.  The pedestrian mall is the epicenter of the festival and the gateway to a nostalgic journey to harvest season fun.</p>
            
                <p>Over 100 vendors will be selling unique apple varieties, hot apple cider donuts, kettle corn, local farm fresh baked goods and a multitude of around the world specialties. Local farmers are on site selling everything from tasty apple beverages to local pumpkins and of course, apples, apples and more apples. Wineries and cideries have regional beverages available for tasting and purchase and 50 different handcrafting artisans along Cayuga Street will be offering one of a kind items for purchase. </p>
            
			<h1>Featured Free Events</h1>
				    <ul>
                        <li>
                            <p>92 WICB will be MC'ing and giving away fun prizes @ main stage</p>
                        </li>

                        <li>
                            <p>The Fun Zone: free crafts and games available in the Center Ithaca Lobby while supplies last each day</p>
                        </li>
                        
                        <li>
                            <p>SATURDAY 1:45-2pm: GIVEAWAYS @ main stage</p>
                        </li>
                 
                        <li>
                            <p>SATURDAY 1:00-1:45PM: Riley Owens (Acoustic Pop) @ main stage</p>
                        </li>

                        <li>
                            <p>SUNDAY 10:00-10:45AM: IC Voicestream, Ithacapella, Premium Blend @ main stage</p>
                        </li>
                    </ul>
			<h1>Directions</h1>
                <p>Take a TCAT public bus, an Ithaca cab service, or walk from your campus to the Ithaca Commons!</p>
                <p>Visit our <a href="transportation.php">Transportation</a> page for more detailed transportation information to the festival.</p>
		</div> <!-- end of content div -->
		<?php
			include 'includes/sm.php';
		?>
	</div> <!-- end of main div -->
	<div id = "twitfeed">
	<a class="twitter-timeline" data-width="220" data-height="1100" href="https://twitter.com/downtownithaca">Tweets by downtownithaca</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
	</div> <!-- end of twitfeed div -->
</body>

</html>