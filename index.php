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
        include('Student.php');
        $students = array();

        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home', 'john@doe.com');
        $first->add_email('work', 'jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $first->add_status('Freshman');
        $students['j123'] = $first;

        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home', 'albert@braniacs.com');
        $second->add_email('work1', 'a_einstein@bcit.ca');
        $second->add_email('work2', 'albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $second->add_status('Junior ');
        $students['a456'] = $second;


        $third = new Student();
        $third->surname = "Minyi";
        $third->first_name = "Tan";
        $third->add_email('home', 'slakdfla@kaf.com');
        $third->add_grade(95);
        $third->add_grade(80);
        $third->add_grade(50);
        $third->add_status('Senior ');
        $students['b46'] = $third;

        $four = new Student();
        $four->surname = "asdfa";
        $four->first_name = "adfsa";
        $four->add_email('home', 'sfdaffsd@adfad.com');
        $four->add_grade(95);
        $four->add_grade(80);
        $four->add_grade(50);
        $four->add_status('Senior ');
        $students['e46'] = $four;
        ksort($students);
        foreach ($students as $student)
            echo $student->toString();
        ?>

    </body>
</html>
