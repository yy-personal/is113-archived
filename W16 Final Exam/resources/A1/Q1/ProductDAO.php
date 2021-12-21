<?php

class ProductDAO {

    public function retrieveAll() {
        $connMgr = new ConnectionManager();
        $pdo = $connMgr->getConnection();

        $sql = "SELECT * 
                FROM product
        ";
        $stmt = $pdo->prepare($sql);

        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        
        // Query products first
        $products = [];
        while( $row = $stmt->fetch() ) {
            $products[] = new Product(
                            $row['id'], 
                            $row['name'],
                            $row['price'],
                            null
                        );
        }
        
        // Populate $stock for each Product object
        foreach($products as $product) {
            $id = $product->getID();

            $sql = "SELECT size, stock 
                    FROM inventory
                    WHERE product_id = :id
            ";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();

            // fetch one or more inventory items for this Product
            $stock = [];
            while( $row = $stmt->fetch() ) {
                $stock[$row['size']] = $row['stock'];
            }

            // Set $stock property for this Product
            $product->setStock($stock);

            $stmt = null;
        }

        $pdo = null;

        return $products;
    }

    public function reduceInventory($product_id, $size) {
        // Reduce inventory size by 1

        $connMgr = new ConnectionManager();
        $pdo = $connMgr->getConnection();

        $sql = "UPDATE inventory
                SET stock = (stock - 1)
                WHERE
                    product_id = :product_id
                    AND
                    size = :size
        ";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);
        $stmt->bindParam(':size', $size, PDO::PARAM_STR);

        $status = $stmt->execute();
        
        $stmt = null;
        $pdo = null;

        return $status;
    }
}

?>