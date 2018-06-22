<?php 

class Form
{
	private $name;
	private $method;
	private $action;
	private $attr;

	/**
	 * Get the value of name
	 */ 
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Set the value of name
	 *
	 * @return  self
	 */ 
	public function setName($name)
	{
		$this->name = $name;

		return $this;
	}

	/**
	 * Get the value of method
	 */ 
	public function getMethod()
	{
		return $this->method;
	}

	/**
	 * Set the value of method
	 *
	 * @return  self
	 */ 
	public function setMethod($method)
	{
		$this->method = $method;

		return $this;
	}

	/**
	 * Get the value of action
	 */ 
	public function getAction()
	{
		return $this->action;
	}

	/**
	 * Set the value of action
	 *
	 * @return  self
	 */ 
	public function setAction($action)
	{
		$this->action = $action;

		return $this;
	}

	/**
	 * Get the value of attr
	 */ 
	public function getAttr()
	{
		return $this->attr;
	}

	/**
	 * Set the value of attr
	 *
	 * @return  self
	 */ 
	public function setAttr($attr)
	{
		$this->attr = $attr;

		return $this;
	}
}