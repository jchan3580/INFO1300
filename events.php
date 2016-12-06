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
			<span class="navspan">Events</span>
			<span class="navspan"><a href = "gallery.php"> Gallery </a></span>
			<span class="navspan"><a href = "transportation.php"> Transportation </a></span>
			<span class="navspan"><a href = "contact.php"> Contact Us </a></span>
		</div> <!-- end of navbar div -->
	</div> <!-- end of stickyheader div -->
	
    <div id = "main">
        <div id ="events-content">
            <div id ="mainstage-content">
                <h2 id="mainstage">Bernie Milton Pavillion</h2>
                    <h4 class="saturday">Saturday 10/1</h4>
                        <ul>
                            <li>
                                <p>10am- Punk Hands</p>
                            </li>

                            <li>
                                <p>11am- Danza Romani</p>
                            </li>
                            
                            <li>
                                <p>12pm- Vitamin L</p>
                            </li>
                            
                            <li>
                                <p>1pm- Riley Owens (CU Student)</p>
                            </li>
                            
                            <li>
                                 <p>2pm- Sunny Weather</p>
                            </li>
                            
                            <li>
                                <p>5pm- Wailin' Brass Band</p>
                            </li>
                        </ul>
                <h4 class="sunday">Sunday 10/2</h4>
                       <ul>
                            <li>
                                <p>10am- IC Voicestream, Ithacapella, Premium Blend</p>
                            </li>

                            <li>
                                <p>11am- Sixteen Feathers</p>
                            </li>
                           
                            <li>
                                <p>12pm- June w/ Chandani</p>
                            </li>
                           
                            <li>
                                <p>2pm- Dapper Dan</p>
                            </li>
                           
                            <li>
                                <p>4:30pm- Mirage Belly Dancers</p>
                            </li>
                        </ul>
            </div> <!--end of mainstage-content div -->
            
            <div id ="otherstage-content">
                <h2 id="otherstage">West State Street</h2>
                    <h4 class="saturday">Saturday 10/1</h4>
                      <ul>
                            <li>
                                <p>12pm- Zajal the Sugarplum Fairy</p>
                            </li>

                            <li>
                                <p>1pm- The Next Jenneration</p>
                            </li>
                            
                            <li>
                                <p>3pm- The Strong Woman Show</p>
                            </li>
                            
                            <li>
                                <p>4:30- IC Circus</p>
                            </li>
                        </ul>
                    <h4 class="sunday">Sunday 10/2</h4>
                       <ul>
                            <li>
                                <p>12:30pm- Matan Presberg: Juggler</p>
                            </li>

                            <li>
                                <p>3pm- Hula Hut Polynesian Dance</p>
                            </li>
                        </ul>
            </div> <!--end of otherstage-content div -->
        </div> <!--end of events-content div -->
	</div> <!-- end of main div -->
    <!--events schedule information source: http://www.downtownithaca.com/ithaca-events/Apple%20Harvest%20Festival%20Presented%20by%20Tompkins%20Trust -->
		<?php
			include 'includes/twitterm.php';
		?>
	<div id = "twitfeed">
	<a class="twitter-timeline" data-width="220" data-height="800" href="https://twitter.com/downtownithaca">Tweets by downtownithaca</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
	</div> <!-- end of twitfeed div -->
</body>
</html>