<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
          include('Student1.php');
          $students = array();
          $first = new Student1();
        $first->surname = "Doe";
$first->first_name = "John";
$first->status = "Junior";
$first->add_email('home','john@doe.com');
$first->add_email('work','jdoe@mcdonalds.com');
$first->add_grade(65);
$first->add_grade(75);
$first->add_grade(55);
$students['j123'] = $first;

$second = new Student1();
$second->surname = "Einstein";
$second->first_name = "Albert";
$second->status = "Senior";
$second->add_email('home','albert@braniacs.com');
$second->add_email('work1','a_einstein@bcit.ca');
$second->add_email('work2','albert@physics.mit.edu');
$second->add_grade(95);
$second->add_grade(80);
$second->add_grade(50);
$students['a456'] = $second;

$third = new Student1();
$third->surname = "Li";
$third->first_name = "Ziming";
$third->add_email('home','2601182984@qq.com');
$third->add_email('work1','A01160012@bcit.ca');
$third->status = "Freshman";
$third->add_grade(95);
$third->add_grade(95);
$third->add_grade(50);
$students['z666'] = $third;

$fourth = new Student1();
$fourth->surname = "Stephen";
$fourth->first_name = "Curry";
$fourth->add_email('home','1233212222@qq.com');
$fourth->status = "Freshman";
$fourth->add_grade(30);
$fourth->add_grade(45);
$fourth->add_grade(55);
$students['c279'] = $fourth;
          foreach($students as $student)
          echo $student->toString();
        
        
        
?>
    </body>
</html>
