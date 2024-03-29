<?php

class Time {

	/**
	 * Displays the timestamp's age in human readable format
	 *
	 * @param  int $timestamp
	 * @return string
	 */
	public static function age($timestamp)
	{
		$timestamp = (int) $timestamp;
		$difference = time() - $timestamp;
		$periods = array('secondes', 'minutes', 'heure', 'jour', 'semaine', 'mois', 'année', 'décénnie');
		$lengths = array('60','60','24','7','4.35','12','10');

		for($j = 0; $difference >= $lengths[$j]; $j++)
		{
			$difference /= $lengths[$j];
		}

		$difference = round($difference);

		if($difference != 1)
		{
			$periods[$j] .= 's';
		}

		return ' il y a ' . $difference . ' ' . $periods[$j] ;
	}
}