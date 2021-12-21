<?php
    # Enter code here
    require_once "Person.php";
    if(!isset($_GET["first_name_1"])){
        echo "  <form>
                    <h4>Person 1</h4>

                    First Name: 
                    <input type='text' name='first_name_1'/>
                    <br/>
                    
                    Last Name: 
                    <input type='text' name='last_name_1'/>
                    <br/>

                    Age:
                    <input type='text' name='age_1'/>
                    <br/>

                    <h4>Person 2</h4>
                    
                    First Name: 
                    <input type='text' name='first_name_2'/>
                    <br/>
                    
                    Last Name: 
                    <input type='text' name='last_name_2'/>
                    <br/>

                    Age:
                    <input type='text' name='age_2'/>
                    <br/><br/>

                    <input type='submit'/>
                </form>";
    }
    else{
        $person1 = new Person($_GET["first_name_1"], $_GET["last_name_1"], $_GET["age_1"]);
        $person2 = new Person($_GET["first_name_2"], $_GET["last_name_2"], $_GET["age_2"]);
        if($person1->isOlder($person2)){
            echo "The older person is {$person1->toString()}";
        }
        elseif($person2->isOlder($person1)){
            echo "The older person is {$person2->toString()}";
        }
        else{
            echo "Both person objects are of the same age";
        }       
    }
?>