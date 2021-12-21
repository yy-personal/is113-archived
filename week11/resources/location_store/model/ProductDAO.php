<?php
    class ProductDAO{

        // The DAO retrieve data from Product table in the database.
        
        public function retrieveAll(){

            // retrieve all data from the database to create an array index of Product objects
            // SQL statement : "Select * from product"
            $result = [];
            
         
            return $result;
        }

        public function retrieveByShopName($shopname){
        
            // retrieve the data from the database to create an array index of Product objects that comes from the shop name 
            // SQL statement : "Select * from product where shopname = :shopname";
            $result = [];
           
            return $result;
        }

      
    }
?>