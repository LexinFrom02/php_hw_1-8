<?php
$i = 0;

while (++$i ) {
    switch ($i) {
        case 5:
            echo "Итерация 5 ";
            continue 2;
        case 10:
            echo "Итерация 10";
            break 2;
            // Останавливаем иетрацию на 2 уровне, т.е. while 
    } 
} 