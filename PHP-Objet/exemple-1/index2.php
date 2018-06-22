<?php

class Math
{
	public static function sqrt($value)
	{
		return sqrt($value);
	}
}

// $objMath = new Math; // Non indixpensable quand la methode est en static
// echo $objMath->sqrt(64);

echo Math::sqrt(64);
echo '<br';
echo Math::PI;