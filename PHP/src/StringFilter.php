<?php

class StringFilter {

	const UNDERSCORE = "_";
	const SPACE = " ";

	const REGEX_UCFIRST = "/([A-Z][a-z0-9]+)/";


	public function camelCaseToUnderscore($string)
	{
		$matches = array();
		preg_match_all(self::REGEX_UCFIRST, $string, $matches);

		if (empty($matches)) return $string;

		array_walk($matches[0], function(&$item, $key) {
			$item = strtolower($item);
		});

		return  implode(self::UNDERSCORE, $matches[0]);
	}


	public function camelCaseToSpace($string, $toLower = false)
	{
		$matches = array();
		preg_match_all(self::REGEX_UCFIRST, $string, $matches);

		if (empty($matches)) return $string;

		if ($toLower) {
			array_walk($matches[0], function(&$item, $key) {
				$item = strtolower($item);
			});
		}

		return  implode(self::SPACE, $matches[0]);
	}

}
