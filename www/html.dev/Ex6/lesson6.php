<html>
        <head>
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />   
        </head>
        <body>
                <form action="" method="post">
                        <div>
                                <div><strong>Вопрос 1. Кто является президентом России?</strong></div>
                                <input type="radio" id="pr1" name="prezident" value="Буш"><label for="pr1">Буш</label><br>
                                <input type="radio" id="pr2" name="prezident" value="Путин"><label for="pr2">Путин</label><br>
                                <input type="radio" id="pr3" name="prezident" value="Медведев"><label for="pr3">Медведев</label>
                        </div>
                        <div>
                                <div><strong>Вопрос 2. Сколько дней в високосном году?</strong></div>
                                <input type="radio" id="year1" name="year" value="365"><label for="year1">365</label><br>
                                <input type="radio" id="year2" name="year" value="366"><label for="year2">366</label><br>
                                <input type="radio" id="year3" name="year" value="368"><label for="year3">368</label>
                        </div>
                        <input type="submit" name="send" value="Отправить">
                </form>
                <?php
                if (isset($_POST['send']))
                {
                     if (isset($_POST['prezident']))     
                     {
                             $pr = $_POST['prezident'];
                             printf("Кто является президентом России? <br>");
                             printf("Вы ответили - $pr, правильно - Путин ");
                     } 
                     if (isset($_POST['year']))     
                     {
                             $year = $_POST['year'];
                             printf("<br><br>Сколько дней в високосном году? <br>");
                             printf("Вы ответили - $year, правильно - 366 ");
                     }   
                }
                ?>
        </body>
</html>

<?php
function change($str){
   $str = "Hello world";
   return $str;
} 
       
