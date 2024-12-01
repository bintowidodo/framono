<?php
	
	/* URL Functions */

	/*parse_url(string $url, int $component = -1)*/
	function npl_parse_url($url, $component){
		return parse_url($url, $component);
	}