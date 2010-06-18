<ul>
	<?php
	foreach ($tweets as $tweet) {
//		var_dump($tweet);
		print '<li>' . $tweet['text'] . '</li>';
		
	}
	?>
</ul>