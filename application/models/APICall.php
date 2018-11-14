<?php

class APICall extends CI_Model
{
//Get the weather information from the api

	public function __construct()
	{
		log_message("INFO", __CLASS__ . "::" . __FUNCTION__);
	}


	function Topten()
	{

		$url = 'https://api.coinmarketcap.com/v2/ticker/?limit=10&sort=rank';

		$contents = file_get_contents($url);
		$results = json_decode($contents, true);

		return $results;
	}

}
