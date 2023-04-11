<?php
     class Product{
        public function add($title, $description, $price, $in_stock, $categorie){
            if(
            isset($title) && !empty($title) && 
            isset($description) && !empty($description) && 
            isset($price) && !empty($price) && 
            isset($categorie) && !empty($categorie) && 
            isset($in_stock) && !empty($in_stock)){

                if($password==$confirm_password){
                    require_once('app/core/database/models.php');
                    $database = new Model();
                    $table = 'product';
                    $fields = 'title, description, price, owner, in_stock, categorie';
                    $value = '?, ?, ?, ?, ?, ?';
                    $data = array($title, $description, $price, $in_stock, $categorie, $owner );

                    $database ->add($table, $fields, $value, $data);
                    echo '<script> alert ("Succès! votre produit a été ajouter") </script>';
                }
            }
        }  
    }


?>