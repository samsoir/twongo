<?php defined('SYSPATH') or die('No direct script access.'); ?>

2010-06-18 15:00:49 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ SYSPATH/classes/kohana/request.php [ 1117 ]
2010-06-18 15:02:16 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 729 ]
2010-06-18 15:02:26 --- ERROR: ReflectionException [ 0 ]: Method action_injest does not exist ~ SYSPATH/classes/kohana/request.php [ 1091 ]
2010-06-18 15:02:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: twitter_endpoint ~ APPPATH/classes/controller/cron.php [ 19 ]
2010-06-18 15:03:37 --- ERROR: Kohana_Request_Exception [ 0 ]: Kohana_Request::_external_execute unable to complete external request with message : Error fetching remote http://search.twitter.com/search.json?lang=en&amp;amp;phrase=%23mongouk [ status 0 ]  ~ SYSPATH/classes/kohana/request.php [ 1294 ]
2010-06-18 15:09:56 --- ERROR: ErrorException [ 1 ]: Class 'mongo_connection' not found ~ APPPATH/classes/tweet.php [ 5 ]
2010-06-18 15:10:43 --- ERROR: ErrorException [ 1 ]: Class 'mongo_connection' not found ~ APPPATH/classes/tweet.php [ 5 ]
2010-06-18 15:10:55 --- ERROR: ErrorException [ 1 ]: Class 'Mongo' not found ~ APPPATH/classes/mongoconnection.php [ 9 ]
2010-06-18 15:12:35 --- ERROR: ErrorException [ 1 ]: Class 'Mongo' not found ~ APPPATH/classes/mongoconnection.php [ 9 ]
2010-06-18 15:16:59 --- ERROR: ErrorException [ 2 ]: MongoCollection::insert() expects parameter 1 to be an array or object ~ APPPATH/classes/tweet.php [ 6 ]
2010-06-18 15:17:59 --- ERROR: Kohana_Request_Exception [ 0 ]: Kohana_Request::_external_execute unable to complete external request with message : Error fetching remote http://search.twitter.com/search.json?lang=en&amp;amp;phrase=%23mongouk [ status 0 ]  ~ SYSPATH/classes/kohana/request.php [ 1294 ]