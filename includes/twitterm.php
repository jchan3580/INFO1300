<?php
	echo '
	<div id="twitterm">
		<div style="display:none;" id="feed">
			<a class="twitter-timeline" data-width="220" data-height="400" href="https://twitter.com/downtownithaca">Tweets by downtownithaca</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
		</div>
		<div style="display:none;" id="show">
			<a href = "#" onclick = "document.getElementById(\'feed\').style.display=\'block\'; 
									 document.getElementById(\'show\').style.display=\'none\';
									 document.getElementById(\'hide\').style.display=\'block\'; return false;">Click here for tweets from Downtown Ithaca!</a>
		</div>
		<div style="display:none;" id="hide">
			<a href = "#" onclick = "document.getElementById(\'feed\').style.display=\'none\'; 
									 document.getElementById(\'show\').style.display=\'block\';
									 document.getElementById(\'hide\').style.display=\'none\'; return false;">Click here to hide tweets from Downtown Ithaca!</a>
		</div>
	</div>
	';
?>