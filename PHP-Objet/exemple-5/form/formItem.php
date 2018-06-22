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

	public abstract function createView();
	
	protected function startView()
	{
		$html = '<div class="form-group">
		<label></label>';

		return $html;
	}

	protected function endView()
	{
		$html = '<div>';
		
		return $html;
	}
}