<?php

require_once('produit.php');

final class Livre extends Produit
{
	private $isbn;

	public function __construct($prix, $poids, $isbn)
	{
		$this->setIsbn($isbn);
	}

	public function getIsbn()
	{
		return $this->isbn;
	}

	public function setIsbn($isbn)
	{
		$this->isbn = $isbn;

		return $this;
	}
}