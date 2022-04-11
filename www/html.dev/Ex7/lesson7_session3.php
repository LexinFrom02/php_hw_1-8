<?
 session_start();
 // Разрегистрировали переменную
 unset($_SESSION['phone']);
 // Разрушаем сессию
 session_destroy();
?>