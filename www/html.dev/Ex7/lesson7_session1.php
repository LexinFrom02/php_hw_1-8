<?php
 // Инициируем сессию
 session_start();
 // Помещаем значение в сессию
 $_SESSION['phone'] = "89190000000";
 // Выводим ссылку на другую страницу
 echo "<a href='lesson7_session2.php'>Другая страница</a>";
?>