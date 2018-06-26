<?php

class Article
{
	public function __construct()
	{
		echo "Object Article créée <hr>";
	}

	public function __destruct()
	{
		echo "Object Article détruit <hr>";
	}
}