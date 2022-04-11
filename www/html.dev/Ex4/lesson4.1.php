<?php
$str = "Теперь пора всем хорошим людям прийти на помощь стране";
$array = explode(" ", $str);
//Пора теперь стране прийти на помощь всем хорошим людям
printf(mb_ucfirst($array[1]) . " " . mb_strtolower($array[0]) . " " . $array[8] . " " . $array[5] . " " . $array[6]
 . " " . $array[7] . " " . $array[2] . " " . $array[3] . " " . $array[4] );

// ucfirst получилось вызвать через библиотеку, для strtoupper пришлось написать небольшую функцию
function mb_ucfirst($string, $enc = 'UTF-8')
 {
  return mb_strtoupper(mb_substr($string, 0, 1, $enc), $enc) . 
         mb_substr($string, 1, mb_strlen($string, $enc), $enc);
 }