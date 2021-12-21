<!--
    Name: Lim Yin Yao
    Email: yinyao.lim.2020
-->
<!DOCTYPE html>
<html>
<head>
    <title>Q1</title>
</head>
<body>
 

<?php
$tracks = [];
   // Add Code Here
   
    if(isset($_GET['tracks'])){
        
        $tracks = $_GET['tracks'];
        $name = $_GET['name'];
        $email = $_GET['email'];
        
    }
    else{
        echo "No track selected";
    }
    
    

   
?>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Preferred Tracks</th>
    </tr>
    <tr>
        <td><?php echo "$name" ?></td>
        <td><?php echo "$email" ?></td>
        
        <td><?php
        echo "<ul>";
        foreach($tracks as $track){
            echo "<li>$track</li>";
        }
        echo "</ul>";
    
        ?>
        </td>
    </tr>
   
</table>


  
</body>
</html>