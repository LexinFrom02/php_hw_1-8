<?php
/*function foo(){
        function bar(){
        echo "Hello world";
        }
       } bar();*/
       function foo(){
        function bar(){
        echo "Hello world";
        }
       }
       foo();
       bar(); 

// Отработает второй вариант, т.к. для того, чтобы вызвать bar() нужно вызвать foo()