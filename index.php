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
        include ('student.php');
        
        $students = createStudents();
        
        /* Print all Students */
        foreach($students as $student)
        {
            echo $student->toString();
        }

        /* Creates Students and Sort by Key, then reutrns the array */
        function createStudents()
        {
            /* Create all students */
            $students = array();
            $students['j123'] = createFirstStudent();
            $students['a456'] = createSecondStudent();
            $students['y123'] = createThirdStudent();

            /* Sort the students */
            ksort($students); // one of the many sort functions
            
            return $students;
        }
 
        /* Create First Student */
        function createFirstStudent()
        {
            $first = new Student("Doe", "John");
            $first->add_email('Home', 'john@doe.com');
            $first->add_email('work', 'jdoe@mcdonalds.com');
            $grades = array(65, 75, 55);
            $first->add_grades($grades);
            
            return $first;
        }
        
        /* Create Second Student */
        function createSecondStudent()
        {
            $second = new Student("Einstein", "Albert");
            $second->add_email('home','albert@braniacs.com');
            $second->add_email('work1','a_einstein@bcit.ca');
            $second->add_email('work2','albert@physics.mit.edu');
            $grades2 = array(95, 80, 50);
            $second->add_grades($grades2);
            
            return $second;
        }
        
        /* Create third Student */
        function createThirdStudent()
        {  
            $third = new Student("Wang", "Yu-Hsin Sean");
            $third->add_email('home', 'katnapped@hotmail.com');
            $third->add_email('work1', 'swang182@my.bcit.ca');
            $grades3 = array(94, 91, 65, 76);
            $third->add_grades($grades3);
            
            return $third;
        }
        ?>
    </body>
</html>
