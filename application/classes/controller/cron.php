<?php defined('SYSPATH') or die('No direct script access.');
//http://search.twitter.com/search.json?lang=en&phrase=%23mongouk
class Controller_Cron extends Controller {

	public static $twitter_endpoint = 'http://search.twitter.com/search.json?lang=en&phrase=%23mongouk&since_id=%d';

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
			$tweets = Request::factory(sprintf(Controller_Cron::$twitter_endpoint, tweet::last_id())
				->execute();

			$i = 0;

			if ($tweets->status === 200)
			{
				$tweets = json_decode($tweets->body);

				foreach ($tweets->results as $tweet)
				{
					tweet::create($tweet);
					$i++;
				}

			}
			echo 'Completed successfully, inserted '.$i,' records';
		}
		catch (Kohana_Request_Exception $e)
		{
			// Die gracefully
			'Yo, twitter is so not working!';
		}
		catch (Exception $e)
		{
			throw $e;
		}
	}
}