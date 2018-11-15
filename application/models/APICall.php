<?php

class APICall extends CI_Model
{
//Get the weather information from the api

	public function __construct()
	{
		log_message("INFO", __CLASS__ . "::" . __FUNCTION__);
	}

	/**
	 * Pull the top ten currencies as the main page.
	 * @return mixed
	 */
	function Topten()
	{
		$url = 'https://api.coinmarketcap.com/v2/ticker/?limit=100&sort=rank';

		$contents = file_get_contents($url);
		$results = json_decode($contents, true);

		return $results;
	}
}
