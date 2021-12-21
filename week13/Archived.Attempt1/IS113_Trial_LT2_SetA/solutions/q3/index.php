<!DOCTYPE html>
<html>
    <head>
        <style>
            .centralbox-noborder{
                text-align: center;
                width: 350px;
            }
            input{
                width:200px;
            }
            select{
                width:200px;
            }
        </style>
    </head>
    <body>
        <div class="centralbox-noborder">
            <img src="images/sis.png">
            <h1>Room Allocation System</h1>
            <br/>
            <form action="display.php" method="post">
                <input type="submit" name="operation" value="Show Sample Schedule"/>
                <br/>
                <br/>

                <select name="date">
                    <option>03/04/2019</option>
                    <option>04/04/2019</option>
                    <option>05/04/2019</option>
                    <option>06/04/2019</option>
                    <option>07/04/2019</option>
                </select>
                <br/>
                <input type="submit" name="operation" value="Show Schedule for a Date"/>
            </form>
        </div>
    </body>
</html>