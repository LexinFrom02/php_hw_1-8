<?php
class Student
{
   private $name;
   private $age;
   private $group;


 public function setName($name){
   $this->name = $name;
   
 }

 public function getName(){
     return $this->name;
 }

 public function setAge($age){
   $this->age = $age;
 }

 public function getAge(){
    return $this->age;
 }

 public function setGroup($group){
   $this->group = $group;
 }

 public function getGroup(){
    return $this->group;
 }


}
?> 