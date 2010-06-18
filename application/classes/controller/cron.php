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
		try
		{
			$tweets = Request::factory(Controller_Cron::$twitter_endpoint)
				->execute();

			if ($tweets->status === 200)
			{
				$tweets = json_decode($tweets->body);

				foreach ($tweets->results as $tweet)
				{
					tweet::create($tweet);
				}
			}

		}
		catch (Request_Exception $e)
		{
			// Die gracefully
		}
		catch (Exception $e)
		{
			throw $e;
		}
	}
}