<?php

    class ProductsManager
    {
        private function dbConnect()
        {
            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=Tableau de Bord;charset=utf8', 'root', 'root');
                return $bdd;
            }
            catch (Exception $e)
            {
                die('Erreur : ' .$e->getMessage());
            }
        }
  
        public function getProducts()
        {
            $bdd = $this->dbConnect();
            $answer = $bdd->query('SELECT * FROM products');
            return $answer;
        } 

        public function postProduct($name, $price, $store, $kind, $actualStock, $minStock)
        {
            $bdd = $this->dbConnect();
            $answer = $bdd->prepare('INSERT INTO products(name, price, store, kind, actualStock, minStock)
            VALUES(:name, :price, :store, :kind, :actualStock, :minStock)');
            $affectedLines = $answer -> execute(array(
                'name'=>$name,
                'price'=>$price,
                'store'=>$store,
                'kind'=>$kind,
                'actualStock'=>$actualStock,
                'minStock'=>$minStock
            ));
            return $affectedLines;
        }

    }