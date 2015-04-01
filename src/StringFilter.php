<?php

class StringFilter {

	const UNDERSCORE = "_";
	const SPACE = " ";

	const REGEX_UCFIRST = "/([A-Z][a-z0-9]+)/"


	public function camelCaseToUnderscore($string)
	{
		$matches = array();
		preg_match_all(self::REGEX_UCFIRST, $string, $matches);

		array_walk($matches, function(&$item, $key) {
			$item = strtolower($item);
		})

		return  implode(self::UNDERSCORE, $matches);
	}


	public function camelCaseToSpace($string, $toLower = false)
	{
		$matches = array();
		preg_match_all(self::REGEX_UCFIRST, $string, $matches);

		if ($toLower) {
			array_walk($matches, function(&$item, $key) {
				$item = strtolower($item);
			})
		}

		return  implode(self::UNDERSCORE, $matches);
	}

}
