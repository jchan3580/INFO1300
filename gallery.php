<!DOCTYPE html>

<html lang = "en">

<head>
	<title>Apple Harvest Festival</title>
	<link rel="stylesheet" href="styles/style.css" type="text/css">
	<link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Montserrat">
    
    <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Open+Sans">
</head>

<body>
	<div id="sticky_header">
		<div id="banner">
			<h1>Apple Harvest Festival</h1>
            <h3>Sept 30-Oct 2, 2016</h3>
			<?php
			include 'includes/sm.php';
			?>
		</div> <!-- end of banner div -->
		<div id="nav_bar">
			<span class="navspan"><a href = "index.php"> Home </a></span>
			<span class="navspan"><a href = "vendors.php"> Vendors </a></span>
			<span class="navspan"><a href = "events.php"> Events </a></span>
			<span class="navspan">Gallery</span>
			<span class="navspan"><a href = "transportation.php"> Transportation </a></span>
			<span class="navspan"><a href = "contact.php"> Contact Us </a></span>
		</div> <!-- end of navbar div -->
	</div> <!-- end of stickyheader div -->
	<div id = "main">
		<h1>Gallery</h1>
		<div id = "galleryphotos">
		<img src="images/apple_fest(1).jpeg" alt="Apple Fest">
		<!--Photo from: http://www.downtownithaca.com/ithaca-events/Apple%20Harvest%20Festival%20Presented%20by%20Tompkins%20Trust-->
		<img src="images/DSC_0510(1).JPG" alt="Maple Syrup">
		<!-- Photo taken by Amy Zhong -->
		<img src="images/DSC_0687(1).JPG" alt="Apples">
		<!-- Photo taken by Amy Zhong -->
		<img src="images/IMG_1334.jpg" alt="Food Stand">
		<img src="images/IMG_1345.jpg" alt="Maple Syrup Stand">
		<img src="images/IMG_1348.jpg" alt="Food Stand">
		<img src="images/IMG_1353.jpg" alt="Lemonade Stand">
		<img src="images/IMG_1359.jpg" alt="Corn Stand">
		<img src="images/IMG_1361.jpg" alt="Berry Stand">
		<!---Photos IMG_1334.jpg, IMG_1345.jpg, IMG_1348.jpg, IMG_1353.jpg, IMG_1359.jpg, IMG_1361.jpg taken by Mariel Terr-->
		<img src="images/band.jpg" alt="Band Playing">
		<!--Photo from: http://www.ithaca.edu/depts/gallery_img/16036_full.jpg -->
		<img src="images/candied_apples.jpg" alt="Candied Apples">
		<!--Photo from: https://lh5.googleusercontent.com/-jGN4HC9EYKY/UGBcmmXuioI/AAAAAAAAAtg/ZUw80PyCnE4/w427-h283-n-k/apples.jpg-->
		<img src="images/apple_crisp.jpg" alt="Apple Crisp Sign">
		<!--Photo from http://www.gannett-cdn.com/-mm-/46aae64637c9c2f5358eb0aee3759b353ca261d6/r=880/http/bcdownload.gannett.edgesuite.net/bie/37906157001/201609/3534/37906157001_5149944761001_5149936928001-vs.jpg -->
		<img src="images/apple_bags.jpg" alt="Apples In Bags">
		<!--Photo from: http://www.news.cornell.edu/sites/chronicle.cornell/files/1014_11_003.jpg -->
		<img src="images/friends.jpg" alt="Friends Together">
		<!--Photo from: http://66.media.tumblr.com/17f0ebd6be0a0d35cd8cf102edaa9fe6/tumblr_nvr2k9Ives1s17hwuo1_1280.jpg -->
		<img src="images/apples_in_baskets.jpg" alt="Apple Baskets">
		<!--Photo from: http://www.eventcrazy.com/event/photos/352755_1_51_091611_115330.jpg -->
		</div> <!-- end of galleryphotos div-->
		<?php
			include 'includes/twitterm.php';
		?>
	</div> <!-- end of main div -->
	<div id = "twitfeed">
	<a class="twitter-timeline" data-width="220" data-height="1300" href="https://twitter.com/downtownithaca">Tweets by downtownithaca</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
	</div> <!-- end of twitfeed div -->
</body>
</html>