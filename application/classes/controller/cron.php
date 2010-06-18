<?php defined('SYSPATH') or die('No direct script access.');
//http://search.twitter.com/search.json?lang=en&phrase=%23mongouk
class Controller_Cron extends Controller {

	public static $twitter_endpoint = 'http://search.twitter.com/search.json?lang=en&phrase=%23mongouk';

	public function __construct(Kohana_Request $request)
	{
		parent::__construct($request);

		if (Kohana::$environment === Kohana::PRODUCTION and ! Kohana::$is_cli)
		{
			throw new Kohana_Exception('This can only be run in CLI mode');
		}
	}

	public function action_injest()
	{
		$tweets = Request::factory(Controller_Cron::$twitter_endpoint)
			->execute();
		var_dump(json_decode($tweets->body));
	}


}


