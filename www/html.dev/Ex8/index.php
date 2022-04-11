<?php
include(__DIR__ . "/Student.php");
include(__DIR__ . "/Worker.php");

$student1 = new Student;
$student1->setAge(21);
$student1->setGroup('U1001');

$student2 = new Student();
$student2->setName('Вася');
$student2->setAge(20);
$student2->setGroup('U1002');

echo 'Студенты:';
echo '<br>';
echo 'Группа Ивана: ' . $student1->getGroup() ;
echo '<br>';
echo 'Группа Васи: ' . $student2->getGroup();
echo '<br>';
$summ = $student1->getAge() + $student2->getAge();
echo 'Суммарный возраст: ' . $summ ;




$worker1 = new Worker;
$worker1->setName('Иван');
$worker1->setAge(25);
$worker1->setSalary(1000);

$worker2 = new Worker;
$worker2->setName('Вася');
$worker2->setAge(26);
$worker2->setSalary(2000);

echo '<br>';
echo '<br>';
echo 'Рабочие:';
echo '<br>';
$summ = $worker1->getSalary() + $worker2->getSalary();
echo 'Суммарная зп: ' . $summ ;