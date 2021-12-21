<!DOCTYPE html>
<html>
<body>
    <!-- /// PART C /// -->
    <form method="POST">
        <img src="img/maldives.jpg" height="200">
        <h1>Let's go on a vacation!</h1>
        Select the countries you want to travel to! <br>
        <select name="destinations[]" multiple>
            <?php 
                $destinations = ["bali", "japan", "korea", "malaysia", "hong kong"];
                foreach ($destinations as $destination) {
                    // Checks for user's previous selected options
                    $selected = "";
                    if (isset($_POST["submit"]) && !empty($_POST["destinations"]) && in_array($destination, $_POST["destinations"])) {
                        $selected = "selected";
                    }

                    $ucDestination = ucfirst($destination);
                    echo "<option value='$destination' $selected> $ucDestination </option>";
                }
            ?>
        </select>

        <br><br>
        Will you be going alone? <br>
        <?php
            $yesNo = ["yes", "no"];
            foreach ($yesNo as $option) {
                $checked = "";
                if ( isset($_POST["submit"]) && isset($_POST["alone"]) && $_POST["alone"] == $option) {
                    $checked = "checked";
                }
                $ucOption = ucfirst($option);
                echo "<label><input type='radio' name='alone' value='$option' $checked>$ucOption</label>";
            }
        ?>

        <br><br>
        What do you want to do in that country? <br>
        <?php
            $activities = ["eat", "shop", "relax", "sleep"];
            foreach ($activities as $activity) {
                // Checks for user's previous selected options
                $checked = "";
                if ( isset($_POST["submit"]) && !empty($_POST["activities"]) && in_array($activity, $_POST["activities"]) ) {
                    $checked = "checked";
                }

                $ucActivity = ucfirst($activity);
                echo "<label><input type='checkbox' name='activities[]' value='$activity' $checked> $ucActivity </label>";
            }
        ?>

        <br><br>
        <input type="submit" name="submit" value="Let's fly!">
        <br><br>
    </form>

    <?php
        /// DO NOT MODIFY OR DELETE THE CODE - START ///
        $alone = [
            "yes" => "Aww, hope you find someone during your travels!",
            "no" => "Good for you!"
        ];

        $activities = [
            "eat" => "Watch your weight!",
            "shop" => "Don't overspend!",
            "relax" => "Enjoy your rest!",
            "sleep" => "You go overseas to sleep??!"
        ];
        /// DO NOT MODIFY OR DELETE THE CODE - END ///

        /// PART C ///
        $errors = [];

        if (isset($_POST["submit"])) {
            if (!isset($_POST["destinations"])) {
                $errors[] = "No countries selected.";
            }

            if (!isset($_POST["alone"])) {
                $errors[] = "Please indicate if you are going alone";
            }

            if (!isset($_POST["activities"]) || count($_POST["activities"]) < 2) {
                $errors[] = "Please select at least 2 acivities to do.";
            }

            if (!empty($errors)) {
                echo "
                <h3>Error messages: </h3>
                <ul>
                ";
                foreach($errors as $error) {
                    echo "<li>$error</li>";
                }
                echo "</ul>";
            } else {
        
                $destinations = $_POST["destinations"];
                $travel_partner = $_POST["alone"];
                $to_do_activities = $_POST["activities"];

                echo "
                <table border='1'>
                    <tr>
                        <th>Destination Country</th>
                        <th>Attraction Image</th>
                    </tr>
                ";

                foreach ($destinations as $country) {
                    $temp = ucfirst($country);
                    echo "<tr><td>$temp</td><td><img src='img/$country.jpg' width='200'></td></tr>";
                }

                echo "</table>";

            
                echo "<h3>$alone[$travel_partner]</h3>";

                echo "<ol>";
                foreach ($to_do_activities as $activity) {
                    echo "<li>$activities[$activity]</li>";
                }
                echo "</ol>";
            }
        }
        ///
    ?>
</body>
</html>