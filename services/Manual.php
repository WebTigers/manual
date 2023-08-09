<?php

class Manual_Service_Manual
{
	public function __construct() {
	}
	
	public static function getDocLang()
	{
		$config = Zend_Registry::get('Zend_Config');
		
		if(!defined('LANG'))
		{
			define('LANG', 'en');
		}
		
		if(!in_array(LANG, $config->manual->translate->languages))
		{
			return $config->manual->translate->default_language;
		}
		
		return LANG;
	}
	
}
