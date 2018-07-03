<?php

require_once('forme.php');

final class Carre extends Forme
{
	private $core;

	public function __construct($posX, $posY, $cote)
	{
		$this->cote = $cote;
		parent::__construct($posX, $posY);
	}

	public function aire()
	{
		return $this->cote * $this->cote; // pow($this->cote, 2)
	}

	public function perimetre()
	{
		return $this->cote * 4;
	}
}
