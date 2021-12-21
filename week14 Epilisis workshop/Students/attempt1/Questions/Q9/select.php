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
<html lang="en">
<body>
        <strong>Major Requirements</strong> <br> <br>
        <form action="module_tracking.php" method="POST">
        Major: 
        <select name='major'>
        <?php
        foreach($majors as $initial=>$fullname){
                echo "<option value='$initial'>$fullname</option>";
        }
        ?>
        </select>
        <input type="submit" value = 'Submit'>
        </form>
        
        
        
        
</body>
</html>
