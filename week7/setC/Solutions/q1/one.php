<?php
// Do NOT change: start
$gender_list = [
   'm' => 'Male',
   'f' => 'Female',
];

$pet_list = [ "cat", "dog", "fish", "other" ];

$fruit_list = [ 'apple', 'orange', 'pear'];
// Do NOT change: end


// Form Processing
//var_dump($_POST);

if( isset($_POST['submit_send']) ) {
   if( isset($_POST['gender']) ) {
      $gender = $_POST['gender'];
   }
   else {
      $gender = '';
   }

   if( isset($_POST['fruits']) ) {
      $fruits = $_POST['fruits'];
   }

   if( isset($_POST['pets']) ) {
      $pets = $_POST['pets'];
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
   <form action='one.php' method='POST'>

      <table border='1'>

         <tr>
            <th>Gender</th>
            <?php
               foreach($gender_list as $value=>$text) {

                  $is_checked = '';
                  if( isset($gender) && ($value == $gender) ) {
                     $is_checked = 'checked';
                  }

                  echo "
                  <td>
                     <input type='radio' name='gender' value='$value' $is_checked> $text
                  </td>
                  ";
               }
            ?>

            <th rowspan='2'>Pets</th>
            <th rowspan='2'>
               <select name='pets[]' multiple>
               <?php
                  foreach($pet_list as $pet) {

                     $is_selected = '';
                     if( isset($pets) && in_array($pet, $pets) ) {
                        $is_selected = 'selected';
                     }

                     echo "
                     <option value='$pet' $is_selected>$pet</option>
                     ";
                  }
               ?>
               </select>
            </th>

         </tr>

         <tr>
            <th>Fruits</th>
            <td colspan='2'>
            <?php
               foreach($fruit_list as $fruit) {

                  $is_checked = '';
                  if( isset($fruits) && in_array($fruit, $fruits) ) {
                     $is_checked = 'checked';
                  }

                  echo "
                  <input type='checkbox' name='fruits[]' value='$fruit' $is_checked> $fruit
                  ";
               }
            ?>
            </td>
         </tr>

      </table>

      <input type='submit' name='submit_send' value='Send'>

   </form>

   <p>
      <a href='one.php'>Reset form</a>
   </p>

   <?php
      if( isset($gender) ) {
         if( $gender == '' ) {
            echo "
               <h1>Errors</h1>
               <ul>
                  <li>No gender</li>
               </ul>
            ";
         }
         else {

            // Dear Sir/Miss
            $prefix = 'Sir';
            if( $gender == 'f' ) {
               $prefix = 'Miss';
            }
            echo "
               <h1>Dear $prefix</h1>";

            // Pets
            echo "
               <h3>Pets</h3>";
            if( !isset($pets) ) {
               echo "
                  No pets";
            }
            else {
               echo "
               <ol>";

               foreach($pets as $pet) {
                  echo "
                     <li>$pet</li>
                  ";
               }

               echo "
               </ol>";
            }

            // Fruits
            echo "
            <h3>Fruits</h3>";
            if( !isset($fruits) ) {
               echo "
                  <img src='fruits/none.jpg'>";
            }
            else {
               foreach($fruits as $fruit) {
                  echo "
                  <img src='fruits/$fruit.jpg'>";
               }
            }

         }
      }
   ?>

               
</body>
</html>