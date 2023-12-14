<?php
class Matematika {
    // Konstanta class
    const PHI = 3.14;
    
    // Static member variable
    public static $counter = 100;
    
    // Static member function
    public static function tambahkan($a, $b) {
        return $a + $b;
    }
    
    // Akses member variable dari dalam class
    public static function naikanCounter() {
        self::$counter++;
    }
    
    // Akses konstanta class
    public static function luaslingkaran($jari) {
        $luas = self::PHI * $jari * $jari;
        return $luas;
    }
}

?>
