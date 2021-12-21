<?php

var_dump($_GET);

//===========================================
//========= DO NOT EDIT THIS ARRAY ==========
$persons_one = [
    'Angelina Jolie-Pitt:Female:Actor:800',
    'Brad Jolie-Pitt:Male:Actor:900',
    'Shiloh Nouvel Jolie-Pitt:Female:Student:10',
    'Vivienne Marcheline Jolie-Pitt:Female:Student:6',
    'Zahara Marley Jolie-Pitt:Female:Student:10',
    'Maddox Chivan Jolie-Pitt:Male:Student:50',
    'Pax Thien Jolie-Pitt:Male:Student:10',
    'Knox Leon Jolie-Pitt:Male:Student:6',
    'Kylie Kardashian:Female:Celebrity:300',
    'Khloe Kardashian:Female:Celebrity:250',
    'Kourtney Kardashian:Female:Celebrity:180',
    'Kendall Kardashian Jenner:Female:Celebrity:600',
    'Kris Kardashian Jenner:Female:Businessman:750',
    'Robert Kardashian Junior:Male:Celebrity:80',
    'Kimberly Kardashian West:Female:Businessman:800',
    'Paul Kevin Jonas Senior:Male:Businessman:50',
    'Priyanka Chopra Jonas:Female:Actor:400',
    'Kevin Jonas:Male:Singer:200',
    'Joe Jonas:Male:Singer:300',
    'Nick Jonas:Male:Singer:250',
    'Sophie Turner Jonas:Female:Celebrity:10',
    'Danielle Deleasa Jonas:Female:Celebrity:15',
    'Kimm Jong Un:Male:Leader:500',
    'Kimm Jong Il:Male:Leader:700',
    'Kimm Jong Nam:Male:Businessman:100',
    'Kimm Han Sol:Male:Student:20'
];

//========= DO NOT EDIT THIS ARRAY ==========
$persons_two = [
    'Angelina Jolie-Pitt (Female), Actor #800',
    'Brad Jolie-Pitt (Male), Actor #900',
    'Shiloh Nouvel Jolie-Pitt (Female), Student #10',
    'Vivienne Marcheline Jolie-Pitt (Female), Student #6',
    'Zahara Marley Jolie-Pitt (Female), Student #10',
    'Maddox Chivan Jolie-Pitt (Male), Student #50',
    'Pax Thien Jolie-Pitt (Male), Student #10',
    'Knox Leon Jolie-Pitt (Male), Student #6',
    'Kylie Kardashian (Female), Celebrity #300',
    'Khloe Kardashian (Female), Celebrity #250',
    'Kourtney Kardashian (Female), Celebrity #180',
    'Kendall Kardashian Jenner (Female), Celebrity #600',
    'Kris Kardashian Jenner (Female), Businessman #750',
    'Robert Kardashian Junior (Male), Celebrity #80',
    'Kimberly Kardashian West (Female), Businessman #800',
    'Paul Kevin Jonas Senior (Male), Businessman #50',
    'Priyanka Chopra Jonas (Female), Actor #400',
    'Kevin Jonas (Male), Singer #200',
    'Joe Jonas (Male), Singer #300',
    'Nick Jonas (Male), Singer #250',
    'Sophie Turner Jonas (Female), Celebrity #10',
    'Danielle Deleasa Jonas (Female), Celebrity #15',
    'Kimm Jong Un (Male), Leader #500',
    'Kimm Jong Il (Male), Leader #700',
    'Kimm Jong Nam (Male), Businessman #100',
    'Kimm Han Sol (Male), Student #20'
];



//========= DO NOT EDIT THIS ARRAY ==========
$persons_three = [
    'Angelina Jolie-Pitt' => ['Female', 'Actor', 800],
    'Brad Jolie-Pitt' => ['Male', 'Actor', 900],
    'Shiloh Nouvel Jolie-Pitt' => ['Female', 'Student', 10],
    'Vivienne Marcheline Jolie-Pitt' => ['Female', 'Student', 6],
    'Zahara Marley Jolie-Pitt' => ['Female', 'Student', 10],
    'Maddox Chivan Jolie-Pitt' => ['Male', 'Student', 50],
    'Pax Thien Jolie-Pitt' => ['Male', 'Student', 10],
    'Knox Leon Jolie-Pitt' => ['Male', 'Student', 6],
    'Kylie Kardashian' => ['Female', 'Celebrity', 300],
    'Khloe Kardashian' => ['Female', 'Celebrity', 250],
    'Kourtney Kardashian' => ['Female', 'Celebrity', 180],
    'Kendall Kardashian Jenner' => ['Female', 'Celebrity', 600],
    'Kris Kardashian Jenner' => ['Female', 'Businessman', 750],
    'Robert Kardashian Junior' => ['Male', 'Celebrity', 80],
    'Kimberly Kardashian West' => ['Female', 'Businessman', 800],
    'Paul Kevin Jonas Senior' => ['Male', 'Businessman', 50],
    'Priyanka Chopra Jonas' => ['Female', 'Actor', 400],
    'Kevin Jonas' => ['Male', 'Singer', 200],
    'Joe Jonas' => ['Male', 'Singer', 300],
    'Nick Jonas' => ['Male', 'Singer', 250],
    'Sophie Turner Jonas' => ['Female', 'Celebrity', 10],
    'Danielle Deleasa Jonas' => ['Female', 'Celebrity', 15],
    'Kimm Jong Un' => ['Male', 'Leader', 500],
    'Kimm Jong Il' => ['Male', 'Leader', 700],
    'Kimm Jong Nam' => ['Male', 'Businessman', 100],
    'Kimm Han Sol' => ['Male', 'Student', 20]
];

//========= DO NOT EDIT THIS ARRAY ==========
$persons_four = [
    'Angelina Jolie-Pitt' => [
                                'job'       => 'Actor',
                                'gender'    => 'Female',
                                'networth'  => 800],
    'Brad Jolie-Pitt' => [
                                'job'       => 'Actor', 
                                'gender'    => 'Male', 
                                'networth'  => 900],
    'Shiloh Nouvel Jolie-Pitt'  => [
                                        'job'       => 'Student', 
                                        'gender'    => 'Female',
                                        'networth'  => 10],
    'Vivienne Marcheline Jolie-Pitt' => [
                                            'job'       => 'Student', 
                                            'gender'    => 'Female', 
                                            'networth'  => 6],
    'Zahara Marley Jolie-Pitt' => [
                                        'job'      => 'Student', 
                                        'gender'   => 'Female', 
                                        'networth' => 10],
    'Maddox Chivan Jolie-Pitt' => [
                                        'job'      => 'Student', 
                                        'gender'   => 'Male', 
                                        'networth' => 50],
    'Pax Thien Jolie-Pitt' => [
                                        'job'      => 'Student', 
                                    'gender'   => 'Male',    
                                    'networth' => 10],
    'Knox Leon Jolie-Pitt' => [
                                    'job'      => 'Student', 
                                    'gender'   => 'Male',    
                                    'networth' => 6],
    'Kylie Kardashian' => [
                                'job'      => 'Celebrity', 
                                'gender'   => 'Female', 
                                'networth' => 300],
    'Khloe Kardashian' => [
                                 'job'      => 'Celebrity', 
                                'gender'   => 'Female', 
                                'networth' => 250],
    'Kourtney Kardashian' => [
                                'job'      => 'Celebrity', 
                                'gender'   => 'Female', 
                                'networth' => 180],
    'Kendall Kardashian Jenner' => [
                                        'job'      => 'Celebrity', 
                                        'gender'   => 'Female',      
                                        'networth' => 600],
    'Kris Kardashian Jenner' => [
                                    'job'      => 'Businessman', 
                                    'gender'   => 'Female', 
                                    'networth' => 750],
    'Robert Kardashian Junior' => [
                                        'job'      => 'Celebrity', 
                                        'gender'   => 'Male', 
                                        'networth' => 80],
    'Kimberly Kardashian West' => [
                                        'job'      => 'Businessman', 
                                        'gender'   => 'Female', 
                                        'networth' => 800],
    'Paul Kevin Jonas Senior' => [
                                    'job'      => 'Businessman', 
                                    'gender'   => 'Male', 
                                    'networth' => 50],
    'Priyanka Chopra Jonas' => [
                                    'job'      => 'Actor', 
                                    'gender'   => 'Female', 
                                    'networth' => 400],
    'Kevin Jonas' => [
                            'job'      => 'Singer', 
                            'gender'   => 'Male', 
                            'networth' => 200],
    'Joe Jonas' => [
                        'job'      => 'Singer', 
                        'gender'   => 'Male', 
                        'networth' => 300],
    'Nick Jonas' => [
                        'job'      => 'Singer', 
                        'gender'   => 'Male', 
                        'networth' => 250],
    'Sophie Turner Jonas' => [
                                'job'      => 'Celebrity', 
                                'gender'   => 'Female', 
                                'networth' => 10],
    'Danielle Deleasa Jonas' => [
                                    'job'      => 'Celebrity', 
                                    'gender'   => 'Female', 
                                    'networth' => 15],
    'Kimm Jong Un'   => [
                            'job'      => 'Leader', 
                            'gender'   => 'Male', 
                            'networth' => 500],
    'Kimm Jong Il'   => [
                                'job'      => 'Leader', 
                                'gender'   => 'Male', 
                                'networth' => 700],
    'Kimm Jong Nam'   => [
                                'job'      => 'Businessman', 
                                'gender'   => 'Male', 
                                'networth' => 100],
    'Kimm Han Sol'   => [
                                'job'      => 'Student', 
                                'gender'   => 'Male', 
                                'networth' => 20]
];

//===========================================
?>
<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
</head>
<body>
    <h1>Search Results (Version 1)</h1>


    <hr>
    <!-- Task 1
        1) Using $persons_one (Indexed Array)
        2) Show search results as an un-ordered list

        For example, if search surname == 'jonas', display:

            Paul Kevin Jonas Senior:Male:Businessman:50
            Priyanka Chopra Jonas:Female:Actor:400
            Kevin Jonas:Male:Singer:200
            (... and so forth...)

        HINT: PHP functions
            strpos()
            strtolower()
        PHP Manual:
            https://www.php.net/manual/en/function.strpos.php
            https://www.php.net/manual/en/function.strtolower.php
    -->
    <h2>Task 1 (Unordered List using $persons_one)</h2>
    <?php
        // Your Code Goes Here
        // $surname = $_GET["surname"];
        // for($i=0; $i < count($persons_one); $i++ ){
        //     if(strpos(strtolower($persons_one[$i]), $surname)==TRUE){
        //         echo "$persons_one[$i]";
        //     }
        // }
        //Model Solution Below
        $surname = $_GET["surname"];
        echo "<ul>";
        foreach($persons_one as $person){
            $found = FALSE;
            $person_lower = strtolower($person);

            if(strpos($person_lower,$surname)!== false){
                echo "<li> $person </li>";
            }

        }
        echo "</ul>";



    ?>



    <hr>
    <!-- Task 2
        1) Using $persons_one (Indexed Array)
        2) Show family members in an HTML table 

        For example:
            ------------------------------------------------------------------
            |    Name     |  Gender  |    Job     |  Net Worth (USD Million) |
            |-----------------------------------------------------------------
            |  Joe Jonas  |   Male   |   Singer   |          300             |
            |-----------------------------------------------------------------
            |   ..... and so forth...                                        |
            |-----------------------------------------------------------------
        
        HINT: PHP explode() function
        Ref: https://www.php.net/manual/en/function.explode.php
    -->
    <h2>Task 2 (Table using $persons_one)</h2>
    <table border='1'>
        <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Job</th>
            <th>Net Worth (USD Million)</th>
        </tr>

        <?php
        // Your Code Goes Here
        foreach($persons_one as $person){
            if (strpos(strtolower($person), $surname)!==FALSE){
                $person_array = explode(":",$person);
                echo "
                <tr>
                <td>$person_array[0]</td>
                <td>$person_array[1]</td>
                <td>$person_array[2]</td>  
                <td>$person_array[3]</td>
                </tr>
                ";
            }
        }


        ?>
    </table>



    <hr>
    <!-- Task 3
        1) Using $persons_two (Indexed Array)
        2) Show search results as an un-ordered list

        For example, if search surname == 'jonas', display:

            Paul Kevin Jonas Senior (Male), Businessman #50
            Priyanka Chopra Jonas (Female), Actor #400
            Kevin Jonas (Male), Singer #200
            (... and so forth...)

        HINT: PHP functions
            strpos()
            strtolower()
        PHP Manual:
            https://www.php.net/manual/en/function.strpos.php
            https://www.php.net/manual/en/function.strtolower.php
    -->
    <h2>Task 3 (Unordered List using $persons_two)</h2>
    <?php
        // Your Code Goes Here
        echo "<ul>";
        foreach($persons_two as $person2){
            if(strpos(strtolower($person2), $surname)!==false){
                echo "<li>$person2</li>";
            }
        }
        echo "</ul>"


    ?>



    <hr>
    <!-- Task 4
        1) Using $persons_two (Indexed Array)
        2) Show search results in an HTML table

        For example:
            ------------------------------------------------------------------
            |    Name     |  Gender  |    Job     |  Net Worth (USD Million) |
            |-----------------------------------------------------------------
            |  Joe Jonas  |   Male   |   Singer   |          300             |
            |-----------------------------------------------------------------
            |   ..... and so forth...                                        |
            |-----------------------------------------------------------------
        
        HINT: PHP explode() function
        Ref: https://www.php.net/manual/en/function.explode.php
    -->
    <h2>Task 4 (Table using $persons_two)</h2>
    <table border='1'>
        <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Job</th>
            <th>Net Worth (USD Million)</th>
        </tr>

        <?php
        // Your Code Goes Here
        foreach($persons_two as $person){
            if(strpos(strtolower($person), $surname)!==false){
                $tmp = explode("(", $person);
                $name = rtrim($tmp[0]); //removal of white space at the end of name.
                $tmp2 = explode("), ", $tmp[1]);
                // var_dump($tmp2);
                $gender = $tmp2[0];
                // var_dump($gender);
                $tmp3 = explode(" #", $tmp2[1]);
                // var_dump($tmp3);
                $job = $tmp3[0];
                $networth = $tmp3[1];

                echo "
                <tr>
                    <td>$name</td>
                    <td>$gender</td>
                    <td>$job</td>
                    <td>$networth</td>
                </tr>
                ";
            }
        }

        
        ?>
    </table>



    <hr>
    <!-- Task 5
        1) Using $persons_three (Associative Array)
        2) Show search results (names) as an un-ordered list

        For example, if search surname == 'jonas', display:

            Paul Kevin Jonas Senior
            Priyanka Chopra Jonas
            Kevin Jonas
            (... and so forth...)

        HINT: PHP functions
            strpos()
            strtolower()
        PHP Manual:
            https://www.php.net/manual/en/function.strpos.php
            https://www.php.net/manual/en/function.strtolower.php
    -->
    <h2>Task 5 (Unordered List using $persons_three)</h2>
    <?php
        // Your Code Goes Here
        



    ?>



    <hr>
    <!-- Task 6
        1) Using $persons_three (Associative Array)
        2) Show search results in an HTML table

        For example:
            ------------------------------------------------------------------
            |    Name     |  Gender  |    Job     |  Net Worth (USD Million) |
            |-----------------------------------------------------------------
            |  Joe Jonas  |   Male   |   Singer   |          300             |
            |-----------------------------------------------------------------
            |   ..... and so forth...                                        |
            |-----------------------------------------------------------------
    -->
    <h2>Task 6 (Table using $persons_three)</h2>
    <table border='1'>
        <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Job</th>
            <th>Net Worth (USD Million)</th>
        </tr>

        <?php
        // Your Code Goes Here
        


        
        ?>
    </table>



    <hr>
    <!-- Task 7
        1) Using $persons_four (Associative Array)
        2) Show search results (names) as an un-ordered list

        For example, if search surname == 'jonas', display:

            Paul Kevin Jonas Senior
            Priyanka Chopra Jonas
            Kevin Jonas
            (... and so forth...)

        HINT: PHP functions
            strpos()
            strtolower()
        PHP Manual:
            https://www.php.net/manual/en/function.strpos.php
            https://www.php.net/manual/en/function.strtolower.php
    -->
    <h2>Task 7 (Unordered List using $persons_four)</h2>
    <?php
        // Your Code Goes Here
        



    ?>



    <hr>
    <!-- Task 8
        1) Using $persons_four (Associative Array)
        2) Show search results in an HTML table

        For example:
            ------------------------------------------------------------------
            |    Name     |  Gender  |    Job     |  Net Worth (USD Million) |
            |-----------------------------------------------------------------
            |  Joe Jonas  |   Male   |   Singer   |          300             |
            |-----------------------------------------------------------------
            |   ..... and so forth...                                        |
            |-----------------------------------------------------------------
    -->
    <h2>Task 8 (Table using $persons_four)</h2>
    <table border='1'>
        <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Job</th>
            <th>Net Worth (USD Million)</th>
        </tr>

        <?php
        // Your Code Goes Here
        
        
        
        ?>
    </table>

    <hr>
    Back to <a href='search1.html'>Search Page (Version 1)</a>

</body>
</html>