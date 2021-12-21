<?php
/*
    Test program to test generatePairs() and sortPairs_addGroup() in q3.php
    Place this file in the same folder as q3.php and run it in the browser
*/
// import q3.php
require "q3.php";

// test data to test generatePairs() and sortPairs_addGroup()
$ratings = [
    'w1' => 9,
    'w2' => 6.5,
    'w3' => 7.5,
    'w4' => 10,
    'm1' => 9.5,
    'm2' => 9,
    'm3' => 8.5
]; 

$groups1 = [
    "g1" => ['w1', 'm1'],
    "g2" => ['w2', 'w3'],
];

$groups2 = [
    "g1" => ['w1', 'm1', 'm2'],
    "g2" => ['w2', 'w3', 'm3']
]; 

$groups3 = [
    "g1" => ['m2'],
    "g2" => ['m3'],
    "g3" => ['w4']
]; 

$groups4 = [
    "g1" => ['w1', 'm1', 'm2'],
    "g2" => ['m3'],
    "g3" => ['w4']
];  

$groups5 = [
    "g1" => ['w1', 'm1', 'm2'],
    "g2" => ['w2', 'w3', 'm3'],
    "g3" => ['w4'] 
]; 



// evaluate Part A
echo "<br><br>################# PART A ###############################<br>";
$partA_sol_TC1 = [ ['m1', 'w2'], ['m1', 'w3'] ];
$partA_sol_TC2 = [ ['m3', 'w1'], ['m1', 'w2'], ['m1', 'w3'],
                                ['m2', 'w2'], ['m2', 'w3'] ];
$partA_sol_TC3 = [ ['m2', 'w4'], ['m3', 'w4'] ];
$partA_sol_TC4 = [ ['m3', 'w1'], ['m1', 'w4'], ['m2', 'w4'],
                                                ['m3', 'w4'] ];
$partA_sol_TC5 = [ ['m3', 'w1'], ['m1', 'w2'], ['m1', 'w3'],
                        ['m2', 'w2'], ['m2', 'w3'], ['m1', 'w4'],
                        ['m2', 'w4'], ['m3', 'w4'] ];
 
$partA_student_TC1 = generatePairs($groups1);
$partA_student_TC2 = generatePairs($groups2);
$partA_student_TC3 = generatePairs($groups3);
$partA_student_TC4 = generatePairs($groups4);
$partA_student_TC5 = generatePairs($groups5);

// If correctly implemented, browser displays pass!
if(evaluatePartA($partA_sol_TC1, $partA_student_TC1)) {
    echo "<br>Part A - TC1: Pass!";
} else {
    echo "<br>Part A - TC1: Fail!";
}

if(evaluatePartA($partA_sol_TC2, $partA_student_TC2)) {
    echo "<br>Part A - TC2: Pass!";
} else {
    echo "<br>Part A - TC2: Fail!";
}

if(evaluatePartA($partA_sol_TC3, $partA_student_TC3)) {
    echo "<br>Part A - TC3: Pass!";
} else {
    echo "<br>Part A - TC3: Fail!";
}

if(evaluatePartA($partA_sol_TC4, $partA_student_TC4)) {
    echo "<br>Part A - TC4: Pass!";
} else {
    echo "<br>Part A - TC4: Fail!";
}

if(evaluatePartA($partA_sol_TC5, $partA_student_TC5)) {
    echo "<br>Part A - TC5: Pass!";
} else {
    echo "<br>Part A - TC5: Fail!";
}


// evaluate Part B
echo "<br><br>################# PART B ###############################<br>";
$partB_sol_TC1 = [  ['g1/m1', 'g2/w3'], ['g1/m1', 'g2/w2'] ];
$partB_sol_TC2 = [  ['g2/m3', 'g1/w1'],['g1/m1', 'g2/w3'],['g1/m2', 'g2/w3'],
                                    ['g1/m1', 'g2/w2'],['g1/m2', 'g2/w2'] ];
$partB_sol_TC3 = [ ['g1/m2', 'g3/w4'], ['g2/m3', 'g3/w4'] ];
$partB_sol_TC4 = [ ['g1/m1', 'g3/w4'], ['g1/m2', 'g3/w4'], ['g2/m3', 'g3/w4'], 
                                        ['g2/m3', 'g1/w1'] ];
$partB_sol_TC5 = [ ['g1/m1', 'g3/w4'], ['g1/m2', 'g3/w4'], ['g2/m3', 'g3/w4'], ['g2/m3', 'g1/w1'],
                ['g1/m1', 'g2/w3'], ['g1/m2', 'g2/w3'], ['g1/m1', 'g2/w2'], ['g1/m2', 'g2/w2'] ];
 

$partB_student_TC1 = sortPairs_addGroup($partA_sol_TC1, $groups1, $ratings);
$partB_student_TC2 = sortPairs_addGroup($partA_sol_TC2, $groups2, $ratings);
$partB_student_TC3 = sortPairs_addGroup($partA_sol_TC3, $groups3, $ratings);
$partB_student_TC4 = sortPairs_addGroup($partA_sol_TC4, $groups4, $ratings);
$partB_student_TC5 = sortPairs_addGroup($partA_sol_TC5, $groups5, $ratings);

if(evaluatePartB($partB_sol_TC1, $partB_student_TC1)) {
    echo "<br>Part B - TC1: Pass!";
} else {
    echo "<br>Part B - TC1: Fail!";
}

if(evaluatePartB($partB_sol_TC2, $partB_student_TC2)) {
    echo "<br>Part B - TC2: Pass!";
} else {
    echo "<br>Part B - TC2: Fail!";
}

if(evaluatePartB($partB_sol_TC3, $partB_student_TC3)) {
    echo "<br>Part B - TC3: Pass!";
} else {
    echo "<br>Part B - TC3: Fail!";
}

if(evaluatePartB($partB_sol_TC4, $partB_student_TC4)) {
    echo "<br>Part B - TC4: Pass!";
} else {
    echo "<br>Part B - TC4: Fail!";
}

if(evaluatePartB($partB_sol_TC5, $partB_student_TC5)) {
    echo "<br>Part B - TC5: Pass!";
} else {
    echo "<br>Part B - TC5: Fail!";
}


########################## Evaluation Functions ###########################
function evaluatePartA($tester, $student) {
    // number of pairs must be the same
    if (count($tester) != count($student)) {
        return false;
    }

    // since the order of elements does not matter,
    // use a loop to check if every element in tester is also in student
    foreach($tester as $element) {
        if (!in_array($element, $student)) {
            return false;
        }
    }
    // also check if student contains additional elements
    foreach($student as $element) {
        if (!in_array($element, $tester)) {
            return false;
        }
    }

    return true;
}

function evaluatePartB($tester, $student) {
    if (count($tester) != count($student)) {
        return false;
    }

    $num = count($tester);
    for($i=0; $i<$num; $i++) {
        // check equality for every pair in the same index
        $tester_element = $tester[$i];
        $student_element = $student[$i];
        $result = array_diff_assoc($tester_element, $student_element);
        if(!empty($result)) {
            return false;
        }
    }
    return true;
}

?>