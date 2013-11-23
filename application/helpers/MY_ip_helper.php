<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function get_ip(){
    //para acceder a bd y otros recursos de codeigniter
	$CI =& get_instance();
	
	$CI->load->library('geoip_lib');	
	
	//si lo probas localmente esto que sigue comentalo y usa las variables de las lineas 22/23
	/*------------------------------*/
		if (!empty($_SERVER['HTTP_CLIENT_IP'])) 
			{
				$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
			}elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) 
					{
						$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
					}else{
							$ipaddress = $_SERVER['REMOTE_ADDR'];
						 }
		/*------------------------------*/				 
						 
	//$ipeaddress='201.213.255.255';//ip argentina
	//$ipaddress='201.213.255.255';	//ip españa				 
						 
	$CI->geoip_lib->InfoIP($ipaddress);
	$country_name = $CI->geoip_lib->result_country_name();

	if($country_name == 'Argentina')
		{
			
			 echo "<script>alert('arg');</script>";
		}else{
				echo "<script>alert('world');</script>";
			}
}
