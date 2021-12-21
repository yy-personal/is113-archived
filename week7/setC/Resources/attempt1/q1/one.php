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

if (isset($_POST['send'])){
   if(isset($_POST['gender'])){
      $gender_selected = $_POST['gender'];
   }
   else{
      $gender_selected = '';
   }
   var_dump($gender_selected);
   
   if(isset($_POST['pets'])){
      $pets_selected = $_POST['pets'];
   }
   else{
      $pets_selected = [];
   }
   
   if(isset($_POST['fruits'])){
      $fruits_selected = $_POST['fruits'];
   }
   else{
      $fruits_selected = [];
   }
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
   <!-- form -->
   <form action="one.php" method="post">
   <table border="1">
   <tr>
      <th>Gender</th>
      <?php
         foreach($gender_list as $g=>$value){
            echo 
            "
            <td>
            <label>
            <input type='radio' name='gender' value='$g'>$value
            </label>
            </td>
            ";
         }
      ?>
      
      <th rowspan="2">Pets</th>
      <td rowspan="2">
      <select multiple name="pets[]" id="pet-select">
      <?php
         foreach($pet_list as $pet){
            echo 
            "
            <label>
            <option value='$pet'>$pet</option>
            </label>
            ";
         }
      ?>
      </td>
   </tr>

   <tr>
   <th>Fruit</th>
   <td colspan="2">
      <?php
         foreach($fruit_list as $fruit){
            echo 
            "
            
            <label>
            <input type='checkbox' name='fruits[]' value='$fruit'>$fruit
            </label>
            
            ";
         }
      ?>
   </td>
   </tr>
   </table>
   <input type="submit" name = "send" value="Send">
   </form>
   
   <a href="./one.php"> Reset form</a>


   
   <?php
   
      if(isset($_POST['send'])){
         if($gender_selected == ""){
            echo "<h1>Errors</h1>";
            echo "<ul>";
            echo "<li>No gender</li>";
            echo "</ul>";
         }
         elseif($gender_selected == "m"){
            echo "<h1>Dear Sir</h1>";
         }
         elseif($gender_selected == "f"){
            echo "<h1>Dear Miss</h1>";
         }

         if($gender_selected!=""){

            echo "<h3>Pets</h3><br>";
            if(($pets_selected)!=[]){
               echo "<ol>";
               foreach($pets_selected as $pet_selected){
                  echo "<li>$pet_selected</li>";
                  }
               echo "</ol>";
               }

            else{
               echo "No Pets";
               }
            }

            echo "<br><br><h3>Fruits</h3><br>";
            if($fruits_selected!=[]){
               foreach($fruits_selected as $fruit_selected){
                  echo "<img src='./fruits/$fruit_selected.jpg'>";
               }
            
            }
            else{
               echo "<img src='./fruits/none.jpg'>";
            }
         }
         

   ?>


