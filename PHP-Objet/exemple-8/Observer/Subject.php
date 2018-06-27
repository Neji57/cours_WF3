<?php

namespace Observer;

class Subject implements \SplSubject
{
	private $observers = [];

	/* Méthodes */
	public function attach (\SplObserver $observer)
	{
		$this -> observers[] = $observer;
	}
	public function detach (\SplObserver $observer)
	{
		foreach ($this -> observers as $key => $value) {
			if($value == $observer)
			{
				unset($this -> observers[$key]);
			}
		}
	}
	public function notify ()
	{

	}
}