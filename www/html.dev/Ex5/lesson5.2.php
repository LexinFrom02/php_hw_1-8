<?php
function secret($n){
        if($n > 0)
        return $n * secret($n-1);
        return 1;
       } 
//в данном случае: 5 * 4 * 3 * 2 * 1 = 120
echo secret(5);