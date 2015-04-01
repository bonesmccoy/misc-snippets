<?php


function camelCaseToUnderscore($word) 
{
	$re = "/([A-Z][a-z0-9]+)/"; 
	$matches = array(); 
	preg_match_all($re, $word, $matches);

	array_walk($matches, function(&$item, $key) {
		$item = strtolower($item);
	})	

	return  implode("_", $matches);
}
