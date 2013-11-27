<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('_getUserIp')) {
	function _getUserIp(){

		//si lo probas localmente esto que sigue comentalo y usa las variables de las lineas 22/23
		/*------------------------------*/
		if (!empty($_SERVER['HTTP_CLIENT_IP']))
		{
			$ipAddress = $_SERVER['HTTP_CLIENT_IP'];

		} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$ipAddress = $_SERVER['HTTP_X_FORWARDED_FOR'];

		}else{
			$ipAddress = $_SERVER['REMOTE_ADDR'];

		}

		return $ipAddress;
	}
}

if (! function_exists('getUserCountry')) {
	function getUserCountry() {

		$CI =& get_instance();

		if ($CI->geoip->InfoIP()) {
			return $CI->geoip->result_country_name();
		} else {
			echo '<strong>Unable to get IP</strong>';
		}
	}
}
