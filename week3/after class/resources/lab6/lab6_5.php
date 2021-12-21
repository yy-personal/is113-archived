<!DOCTYPE html>
<html>
    <body>
        <?php
            if (empty($_GET["number"])){
                echo " <form>
                            Enter number: 
                            <input type='text' name='number'/>
                            <input type='submit'/>
                        </form>";
            }
            else{
                $decimal = $_GET["number"];
                echo "Input decimal number is " . $decimal . "<br/>";
                echo "Binary equivalent of $decimal is " . get_binary($decimal) . "<br/>";
                echo "Correct answer of $decimal is" . decbin($decimal);
            }
            
            function get_binary($decimal){
                # Write code here
                return "";
                # End of code
            }
        ?>
    </body>
</html>

