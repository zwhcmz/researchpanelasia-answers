<?php
namespace MyGreeter;

class Client
{

	public function getGreeting()
	{
		$now = date("H:i:s", time());
		if ((date("H:i:s", mktime(12, 0, 0)) > $now) && date("H:i:s", mktime(6, 0, 01)) < $now) {
			return "Good morning";
		}
		if ((date("H:i:s", mktime(18, 0, 0)) > $now) && date("H:i:s", mktime(12, 0, 01)) < $now) {
			return "Good afternoon";
		}		
		return "Good evening";

	}

}