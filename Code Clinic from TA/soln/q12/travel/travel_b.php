<!DOCTYPE html>
<html>
<body>
    <!-- /// PART B /// -->
    <form method="POST">
        <img src="img/maldives.jpg" height="200">
        <h1>Let's go on a vacation!</h1>
        Select the countries you want to travel to! <br>
        <select name="destinations[]" multiple>
            <?php 
                $destinations = ["bali", "japan", "korea", "malaysia", "hong kong"];
                foreach ($destinations as $destination) {
                    $ucDestination = ucfirst($destination);
                    echo "<option value='$destination'> $ucDestination </option>";
                }
            ?>
        </select>

        <br><br>
        Will you be going alone? <br>
        <?php
            $yesNo = ["yes", "no"];
            foreach ($yesNo as $option) {
                $ucOption = ucfirst($option);
                echo "<label><input type='radio' name='alone' value='$option'>$ucOption</label>";
            }
        ?>

        <br><br>
        What do you want to do in that country? <br>
        <?php
            $activities = ["eat", "shop", "relax", "sleep"];
            foreach ($activities as $activity) {
                $ucActivity = ucfirst($activity);
                echo "<label><input type='checkbox' name='activities[]' value='$activity'> $ucActivity </label>";
            }
        ?>

        <br><br>
        <input type="submit" name="submit" value="Let's fly!">
        <br><br>
    </form>
</body>
</html>