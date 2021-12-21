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
echo "<h1>Major Requirements</h1>";
echo "<form action = 'module_tracking.php' method = 'POST'>";
echo "Major: <select name='majors'>";
foreach ($majors as $key => $value){
    echo "<option value='$key'>$value</option>";
}
echo "</select>";
echo "<input type='submit' value='Submit'><br/>";
echo "</form>";

?>