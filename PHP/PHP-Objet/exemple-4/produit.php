<?php

require_once('supprimable.php');

class Produit extends Entity implements Supprimable
{
	public function supprimer()
	{
		echo "Suppression du produit";
	}
}