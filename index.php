<!DOCTYPE html>

<html lang = "en">

<head>
	<title>Apple Harvest Festival</title>
	<link rel="stylesheet" href="styles/style.css" type="text/css">
	<script src="js/imagecycle.js"></script>
</head>

<body>
	<div id="sticky_header">
		<div id="banner">
        <!-- banner image source: http://static.wixstatic.com/media/d4038b_a5c0a6f2d48448ef8e11806e7476cbe7.jpg -->
			<h1>Apple Harvest Festival</h1>
            <h3>Sept 30-Oct 2, 2016</h3>
		</div> <!-- end of banner div -->
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
		<div class="buttons">
			<button onclick="change(0);">Previous</button>
        	<button onclick="change(1);">Next</button>
		</div>
		<div id="photos">
			<img id="main_img" src="images/apple_fest.jpeg" alt="Apple Fest">
		</div>
		<div id="content">
			<h1>About</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris risus enim, aliquam quis pretium ut, fringilla eget sapien. Fusce porta neque non justo porta ultrices. Sed pulvinar libero in finibus porta. Pellentesque a purus tellus. Duis risus lorem, iaculis eget bibendum sit amet, feugiat eget neque. Integer luctus leo sed urna vestibulum, et luctus ex volutpat. Ut vulputate sed enim eu maximus. Pellentesque tincidunt tincidunt nisi nec euismod. Nullam ut mollis arcu. Aenean consequat, tellus sed cursus convallis, ante ligula vehicula tellus, in egestas augue ipsum at orci. Aenean sit amet vestibulum nulla, nec posuere diam. Nam efficitur lorem egestas augue luctus, sed consectetur enim lacinia. Nunc rhoncus pulvinar risus vitae dignissim. Aenean lobortis sed urna quis tempus. Aenean consequat augue arcu, non suscipit est suscipit ut. Morbi malesuada enim sed elit placerat, eget vulputate lectus tincidunt.</p>
			<h1>Featured Events</h1>
				<h3>Free Events</h3>
					<p>Integer vitae faucibus dolor. Nullam sed libero fringilla, dapibus velit nec, consequat ex. Quisque consequat sapien neque, ut mollis metus viverra sed. In commodo risus lorem, in malesuada nisi euismod eu. Duis vel dolor non erat sodales molestie eget id risus. Integer rhoncus magna nec eleifend fermentum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean facilisis efficitur sollicitudin. Aliquam tristique nisi nec ullamcorper vehicula. Ut in lorem egestas, gravida erat at, facilisis est.</p>
				<h3>Main Stage</h3>
					<p>Integer vitae faucibus dolor. Nullam sed libero fringilla, dapibus velit nec, consequat ex. Quisque consequat sapien neque, ut mollis metus viverra sed. In commodo risus lorem, in malesuada nisi euismod eu. Duis vel dolor non erat sodales molestie eget id risus. Integer rhoncus magna nec eleifend fermentum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean facilisis efficitur sollicitudin. Aliquam tristique nisi nec ullamcorper vehicula. Ut in lorem egestas, gravida erat at, facilisis est.</p>
			<h1>Directions</h1>
				<p>Vestibulum facilisis eros a lacus commodo, sed facilisis erat malesuada. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus malesuada posuere eros, sed maximus leo tempus et. Sed at tempor nisl. Quisque nec ex in libero dapibus cursus ut in sapien. Phasellus ante velit, congue ac tortor sed, vehicula sodales elit. Suspendisse id nisi lorem. Fusce vitae neque dignissim, aliquam ex non, ultrices erat. Nulla elementum, nulla sit amet gravida malesuada, enim ipsum ullamcorper nunc, nec maximus leo quam quis nunc. Quisque fermentum felis in dignissim dignissim. In aliquet tristique massa. Quisque pretium suscipit mattis.</p>
		</div> <!-- end of content div -->
	</div> <!-- end of main div -->
	<?php
	include 'includes/sm.php';
	?>
    <!-- temporary links for footer images:
	Facebook:http://downtownithaca.com/local/images/ad_fb.jpg
	Twitter:http://downtownithaca.com/local/images/ad_twitter.jpg
	Youtube:http://downtownithaca.com/local/images/ad_youtube.jpg-->
</body>

</html>