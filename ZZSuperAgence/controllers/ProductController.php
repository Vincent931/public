<?php 
//include "./models/User.php";
//include "./views/HomeView.php";
//include "./repository/ProductRepository.php";


class ProductController {

    //renvoie page listing produit  
    public function showProducts() :void{
        
        $repository = new ProductRepository();
        $results = $repository->fetchProd();
        
        $view = new HomeView();
        $view->viewProducts($results);
        die();
    }
}
