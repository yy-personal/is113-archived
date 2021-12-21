<?php
    class FoodDAO{

        # Default constructor is created by default if no constructor is specified

        // Retrieve ALL data from the table and sorted by the SKU
        // Return an indexed array of Food objects
        // SQL statement - SELECT * from food ORDER BY sku

        public function retrieveAll(){
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();
           

            // Add your codes here


            return $result;
        }

        // Retrieve data for a specific sku indicated by the user. 
        // This function can also be used to check if a sku exists.
        // Return a Food object.  If not found, return false.
        // SQL statement - SELECT * from food where sku = <value from user>"
        public function getFoodbyID($sku){
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();
            

            // YOUR CODE GOES HERE

            return $result;
        }

        // Add a new food item into the database. 
        // Note that the primary key is sku.
        // Return a status
        // SQL statement - INSERT into food (sku, fooddesc, category, price) 
        //                      values (sku, food description,the category, the price)
        public function addFood($sku, $foodDesc, $category, $price) {
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();
            
            // YOUR CODE GOES HERE


            return $isOk;
        }


        // Updates a record in the database. The statement updates all fields to keep it simple.
        // Return a status
        // SQL statement - UPDATE food SET fooddesc = food description, category = the category, 
        //                 price =  the price WHERE sku = sku;
        public function UpdateFood($sku, $foodDesc, $category, $price){
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();
            
            
        // YOUR CODE GOES HERE



            return $isOk;
        }

        // Delete a record in the database
        // Return a status
        // SQL statement - DELETE from food WHERE sku = sku

        public function DeleteFood($sku){
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();
            

            // YOUR CODE GOES HERE

            return $isOk;
        }

    }


?>