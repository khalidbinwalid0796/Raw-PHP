//Type declearion with multiple data types
<?php

class Calculator{
    public function add( int|string $a,int|string $b): int|string
    {
        if( is_integer($a) && is_integer($b))
            return $a+$b;

        if( is_string($a) && is_string($b))
            return $a.$b;
    }
}


?>