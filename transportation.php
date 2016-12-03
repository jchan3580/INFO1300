<!DOCTYPE html>

<html lang = "en">

<head>
	<title>Apple Harvest Festival</title>
	<link rel="stylesheet" href="styles/style.css" type="text/css">
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
			<span class="navspan"><a href = "gallery.php"> Gallery </a></span>
			<span class="navspan">Transportation</span>
			<span class="navspan"><a href = "contact.php"> Contact Us </a></span>
		</div> <!-- end of navbar div -->
	</div> <!-- end of stickyheader div -->
	<div id = "main">
	<div id="map">
		<!-- credit for the map given to Google Maps -->
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5888.801242822939!2d-76.50103518900127!3d42.44049143139099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d0819c7e2b29ff%3A0x9a002546d78a1ced!2s171+E+State+St%2C+Ithaca%2C+NY+14850!5e0!3m2!1sen!2sus!4v1480481482106" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	
	</div> <!-- end of map div -->
        <div id = "tcat">
            <h2>Bus Routes via TCAT</h2>
            <!-- TCAT bus route info source: https://tcat.nextinsight.com/summary.php?stopid=1010 -->
            <figure> 
                <table>
                    <tr>
                        <th>To and From Commons</th>
                        <th>Route #s</th>
                    </tr>
                    <tr>
                        <td>Cornell</td>
                        <td>30, 31, 32, 36, 37, 40, 43, 51, 65, 70, 72, 90</td>
                    </tr>
                    <tr>
                        <td>Ithaca College</td>
                        <td>11, 65</td>
                    </tr>
                </table>
            </figure>
            
        </div> <!-- end of tcat div -->
    
        <div id= "Taxi Services">
           <h2>Ithaca Taxi Services</h2>
            <!-- Ithaca taxi services source: https://www.google.com/#q=ithaca+taxi+services -->
            <figure> 
                <table>
                    <tr>
                        <th>Company</th>
                        <th>Phone #</th>
                    </tr>
                    <tr>
                        <td>Collegetown Cab</td>
                        <td>(607) 588-8888</td>
                    </tr>
                    <tr>
                        <td>Ithaca Dispatch</td>
                        <td>(607) 277-7777</td>
                    </tr>
                    <tr>
                        <td>University Taxi</td>
                        <td>(607) 272-3333</td>
                    </tr>
                </table>
            </figure>
        </div> <!--end of Taxi Services div -->
	</div> <!-- end of main div -->
	<div id = "twitfeed">
	<a class="twitter-timeline" data-width="220" data-height="550" href="https://twitter.com/downtownithaca">Tweets by downtownithaca</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
	</div> <!-- end of twitfeed div -->
</body>
</html>