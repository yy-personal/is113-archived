<?php
#List of majors in SIS

$majors = [
        "SD" => "Software Development",
        "DBS" => "Digital Business Solutioning", 
        "BA" => "Business Analytics",
        "AI" => "Artificial Intelligence",
        "CS" => 'Cyber Security',
        "FT" => "Fintech"
];

# Write your code here
# Do not hardcore
?>
<!DOCTYPE html>
<html lang="en">
<body>
        <form action="module_tracking.php" method='POST'>
                <h1>Major Requirements</h1>
                Major: <select name='major'>
                <?php
                foreach($majors as $initials=>$major_name){
                        echo "
                        <option value='$initials'>$major_name</option>
                        ";
                        }       
                ?>
                <input type="submit" value='Submit'>
        </form>
</body>
</html>
