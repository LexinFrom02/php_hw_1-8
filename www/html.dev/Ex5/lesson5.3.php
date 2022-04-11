<html>
        <head>
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />   
        </head>
        <body>
                <form action="" type="get">
                        <input type="text" name="str">
                        <input type="submit" value="Отправить">
                </form>
                <?php
                if (isset($_GET['str']))
                {
                        echo change($_GET['str']);            
                }
                ?>
        </body>
</html>

<?php
function change($str){
   $str = "Hello world";
   return $str;
} 
       
