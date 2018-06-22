<?php

abstract class FormItem
{
	private $name;

	public function __construct($name)
	{
		$this->satName();
	}
	
	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;

		return $this;
	}
}