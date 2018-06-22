<?php

require_once('supprimable.php');

class Produit implements Supprimable
{
	public function supprimer()
	{
		echo "Suppression du produit";
	}
}