<?php
function npl_echo($str){echo $str;} 
function npl_printf(...$args){ return printf(...$args);} 
function npl_split($x, $y){ return explode($x, $y);}
function npl_print_r($str){ return print_r($str);}

function npl_server(){return $_SERVER['PHP_SELF'];}
function npl_LINE(){return __LINE__;}
function nl_log(){ return npl_SERVER();}

function npl_dbg($str){
	npl_echo($str); exit;
}
