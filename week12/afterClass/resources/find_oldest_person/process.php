<?php
    require_once "Person.php";
    session_start();
    if(isset($_POST["next"])){
        process_one_person();
        header("Location: input.php");
        exit;
    }
    else{
        find_oldest_and_reset();
    }


    function process_one_person(){
        $person = new Person($_POST['name'],$_POST['age']);
        if(!isset($_SESSION['person_arr'])){
            $_SESSION['person_arr'] = [];
        }
        $_SESSION['person_arr'][] = $person;
    }

    function find_oldest_and_reset(){
        $person_arr =  $_SESSION['person_arr'];
        $curr_age = 0;
        $old_ppl = [];
        foreach($person_arr as $person){

            $age_retrieved = $person->getAge();
            if($age_retrieved > $curr_age){
                $curr_age = $age_retrieved;
            }
            
        }
        foreach($person_arr as $person){
            if($person->getAge() == $curr_age){
                // $old_ppl[] = $person->toString();
                echo "{$person->toString()}<br>";
            }
            
        }

        
        unset($_SESSION['person_arr']);
        // session_destroy();
        echo "<a href='input.php'>Start Again</a>";
    }


    








        // $person = new Person($_POST['name'], $_POST['age']);
        // # Create a new Person object with "name" and "age" 
        // # passed from input.php
        // // $person_arr = [];
        // $person_arr = [];
        // $person_arr[] = $person;
        // if(!isset($_SESSION['person_arr'])){
        //     $_SESSION['person_arr'] = $person_arr;
        // }
        // # If $_SESSION["person_arr"] does not exists, 
        // # add the key-value pair "person_arr" => [] to $_SESSION
        // else{
        //     $_SESSION['person_arr'] [] = $person;
        //     }
        // # Append the new Person object into $_SESSION["person_arr"]
        

        # If no person entered into $_SESSION["person_arr"],
        # output "No one was input into the system"
        // if(!isset($_SESSION["person_arr"])){
        //     echo "No one was input into the system";
        // }
        // $person_array = $_SESSION["person_arr"];
        // $current_age = 0;
        // $oldest_per_list = [];
        // foreach($person_array as $person){
        //     if($person->getAge()>=$current_age){
        //         $current_age=$person->getAge();
        //     }
        // }
        // foreach($person_array as $person){
        //     if($person->getAge()==$current_age){
        //         $oldest_per_list[] = $person;
        //     }
        // }
        // if(count($oldest_per_list)==1){
        //     echo "{$oldest_per_list[0]->getName()}({$oldest_per_list[0]->getAge()})";
        // }
        // elseif(count($oldest_per_list)>1){
        //     foreach($oldest_per_list as $old_ppl){
        //         $display_name = $old_ppl->getName();
        //         $display_age = $old_ppl->getAge();
        //         echo "{$display_name}({$display_age})<br>";
        //     }
        // }
        // // var_dump($oldest_per_list);
        // unset($_SESSION['person_arr']);
?>