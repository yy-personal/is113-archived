<?php
    class ShopDAO{

        # Default constructor is created by default if no constructor is specified
        # Retrieve data from the database table - shop
    
        public function retrieveAll(){

            // retrieve all data from the database to create an array index of Shop objects
            // SQL statement : "Select * from shop"

            $result = [];
            
         
            return $result;
        }

        public function retrieveAllStoreName(){

            // retrieve all data from the database to return an array of shop name
            // SQL statement : "Select distinct shopname from shop"
            
            $result = [];
            return $result;
        }

        public function retrieveAllLocation(){

            // retrieve all data from the database to return an array of location
            // SQL statement : "Select distinct location from shop"
            
            $result = [];
            return $result;
        }

        public function retrieveLocationStorename($location1, $shopname1){

            // this function serve to check if the shop name exisit in the location. 
            // Possible SQL statement : SELECT * from shop where location = :location AND shopname = :shopname";
            
           
            return $result;
        }

        
    }
?>