<html>
    <body>
    <?php
        if (count($_GET) == 0) {
            echo "  <form>
                        Sales amount:
                        <input type='text' name='sales_amt'/>
                        <input type='submit'/>
                    </form>";
        }
        else{
            $sales_amt = $_GET["sales_amt"];
            # Write code here

            # End of code
        }
    ?>
    </body>
</html>