<?php

namespace Observer;

class Messagerie extends Subjects
{
	public function envoyerMessage($message)
	{
		echo "Message envoyeé :" . $message . "</br>";
	}
}