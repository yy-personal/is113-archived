<?php
// Do NOT change: start
$gender_list = [
   'm' => 'Male',
   'f' => 'Female',
];

$pet_list = [ "cat", "dog", "fish", "other" ];

$fruit_list = [ 'apple', 'orange', 'pear'];
// Do NOT change: end
var_dump($_POST);

if(isset($_POST['send'])){
   if(isset($_POST['gender'])){
      $gender_submitted = $_POST['gender'];

      if(isset($_POST['pets'])){
      $pet_submitted = $_POST['pets'];
      }
      else{
         $pet_submitted ='';
      }

      if(isset($_POST['fruits'])){
      $fruit_submitted = $_POST['fruits'];
      var_dump($fruit_submitted);

      }
      else{
         $fruit_submitted ='';
      }
   }
   else{
      $gender_submitted = "";
   }

   var_dump($gender_submitted);
}
?>

<html>
<head>
   <style>
      td {
         padding: 5px;
      }
   </style>
</head>
<body>
<form action="one.php" method="POST">
   <table border="1">
      <tr>
         <th>Gender</th> 
         
         <?php
            foreach($gender_list as $key=>$gender){
               echo "<td>";
               echo "<label><input type='radio' name='gender' value='$gender'>$gender</label>";
               echo "</td>";
            }   

         ?>

         <th rowspan="2">Pets</th>
         
         <td rowspan="2">
         <select name='pets[]' multiple>
         <?php 
            foreach($pet_list as $pet){
               $Cpet=ucfirst($pet);
               echo" 
               <option value='$pet'>$Cpet</option>
               ";
               
            }
         ?></td>

      </tr>
         
      <tr>
         <th>Fruits</th>
         <td colspan="2">
         <?php
         foreach($fruit_list as $fruit){
            $Cfruit=ucfirst($fruit);
            echo "
            <input type='checkbox' name='fruits[]' value = '$fruit'>$Cfruit
            ";
            
         }
         ?>
         </td>
      </tr>
         
   </table>

   <input type="submit" value="send" name="send">
   <br>
   <br>
   <a href="./one.php">Reset Form</a>
</form>
<?php
   
   if(isset($_POST['send'])){
      if($gender_submitted == ""){
         echo "<h1>Errors</h1>";
         echo "
         <ul>
            <li>No gender</li>
         </ul>
         ";
      }
      else{

         if($gender_submitted=="Male"){
            echo '<h1>Dear Sir</h1>';
         }
         elseif($gender_submitted=="Female"){
            echo '<h1>Dear Miss</h1>';
         }

         echo "<h3>Pets</h3>";
            if($pet_submitted!=""){
               echo "<ol>";

               foreach($pet_submitted as $pet){
               echo "<li>$pet</li>";
               }

               echo "</ol>";
            }
               
            else{
               echo "No pets";
            }
         echo "<h3>Fruits</h3>";
            if($fruit_submitted!=""){
               var_dump($fruit_submitted);
               foreach($fruit_submitted as $fruit){
               echo "<img src='./fruits/$fruit.jpg'>";
               }
            }
            else{
               echo "<img src='./fruits/none.jpg' >";
            }
      }

      

   }


?>
</body>
</html>