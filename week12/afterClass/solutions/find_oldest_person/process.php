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
    
        # Create a new Person object with "name" and "age" 
        # passed from input.php
        $person = new Person ($_POST["name"],$_POST["age"]);

        # If $_SESSION["person_arr"] does not exists, 
        # add the key-value pair "person_arr" => [] to $_SESSION
        if (!isset($_SESSION["person_arr"])){
            $_SESSION["person_arr"] = [];
        }

        # Append the new Person object into $_SESSION["person_arr"]
        $_SESSION["person_arr"][] = $person;
    }

    function find_oldest_and_reset(){
        
        # If no person entered into $_SESSION["person_arr"],
        # output "No one was input into the system"
        if (!isset($_SESSION["person_arr"])){
            echo "No one was input into the system <br/>";
        }
        # Otherwise, do the following:
        else{
            # Retrieve the (indexed) array of Person objects in $_SESSION["person_arr"]
            $person_arr = $_SESSION["person_arr"];

            # Find the oldest persons (can be more than 1) in the array
            $oldest_so_far = [];
            foreach($person_arr as $person) {
                if(count($oldest_so_far)==0){
                    $oldest_so_far[] = $person;
                }
                else{
                    $oldest_age_so_far = $oldest_so_far[0]->getAge();
                    if($oldest_age_so_far < $person->getAge()){
                        $oldest_so_far = [$person]; # replace with new array
                    }
                    elseif($oldest_age_so_far == $person->getAge()){
                        $oldest_so_far[] = $person; # add new person with the same age
                    }
                }
            }

            # Display the oldest persons 
            # Use the toString method of Person 
            # See question for formatting details
            if(count($oldest_so_far)>1){
                echo "Oldest persons entered: <br/>";
            }else{
                echo "Oldest person entered: <br/>";
            }
            foreach($oldest_so_far as $person){
                echo $person->toString() . "<br/>";
            }

            # Remove "person_arr" from $_SESSION
            unset($_SESSION["person_arr"]);
        }
        
        echo "<a href='input.php'>Start Again</a>";
    }
?>