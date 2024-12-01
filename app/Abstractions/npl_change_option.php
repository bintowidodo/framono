<?php

		

	function npl_ini($option,  $value){
		return ini_set($option,  $value);
	}

	/**
	The PHP errors which are normally returned can be quite helpful to a developer 
	who is trying to debug a script, indicating such things as the function or file 
	that failed, the PHP file it failed in, and the line number which the failure 
	occurred in. This is all information that can be exploited. It is not uncommon 
	for a php developer to use show_source(), highlight_string(), or highlight_file() 
	as a debugging measure, but in a live site, this can expose hidden variables, 
	unchecked syntax, and other dangerous information. Especially dangerous is running
	code from known sources with built-in debugging handlers, or using common debugging
	techniques. If the attacker can determine what general technique you are using,
	they may try to brute-force a page, by sending various common debugging strings:
	**/
	
	function npl_error($error_level = null){
		return error_reporting($error_level);
	}

	function npl_require($req){
		 require $req;
	}

	function npl_require_once($req){
		require_once $req;
	}