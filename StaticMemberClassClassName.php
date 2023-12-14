<?php

class Matematika
{
    public static $counter = 100;

    public static function tambahkan($a, $b)
    {
        return $a + $b;
    }
}

Matematika::$counter++;
echo 'Counter Sekarang : ' . Matematika::$counter;
$x = Matematika::tambahkan(5, 4);
echo " 5 + 4 = " . $x;
