<ul>
	<?php
	foreach ($tweets as $tweet) {
	
		print '<li>' . $tweet->body . '</li>';
		
	}
	?>
</ul>