<?php

if(!defined('__autoload'))
{
	function __autoload($className)
	{
		if(file_exists(CORE_DIR.DS.'controller'.DS.$className.'.php'))
		{
			require_once(CORE_DIR.DS.'controller'.DS.$className.'.php');
		}
		else if(file_exists(CORE_DIR.DS.'model'.DS.$className.'.php'))
		{
			require_once(CORE_DIR.DS.'model'.DS.$className.'.php');
		}
	}
}

