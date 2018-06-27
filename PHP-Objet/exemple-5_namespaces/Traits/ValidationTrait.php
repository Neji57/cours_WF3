<?php

namespace Traits;

trait Validationtrait
{
	private function isMail($email)
	{
		return (filter_var(strtolower($email), FILTER_VALIDATE_EMAIL));
	}

	private function isStringLength(string $string, $min, $max)
	{
		if(strlen($string) < $min)
		{
			return false;
		}
		if(strlen($string) > $max)
		{
			return false;
		}
		return true;
		// return strlen($string) > $min && strlen($string) > $max;
	}
}