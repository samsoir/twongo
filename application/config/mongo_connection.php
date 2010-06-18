<?php
return array(
		'host'		=> 'localhost',
		'database'	=> Kohana::$environment === Kohana::PRODUCTION ? 'twongo_live' : 'twongo_test'
		);