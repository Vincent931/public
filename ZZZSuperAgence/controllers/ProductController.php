<?php
require_once './repository/ProductRepository.php';
require_once './views/HomeView.php';
require_once './views/ProductView.php';
require_once './models/Product.php';

class ProductController {
    
    public function __construct()
    {
        $this->utils = new Utils();
    }
    //renvoie page listing produit  
   //renvoie page listing produit  
    public function showProducts(): void
    {
        $view = new ProductView();
        $roomslimit = "T1";
        if(!isset($_GET['page']) || !is_numeric($_GET['page']))
        {
            $view->setCurrentPage(1);
            $view->setPageDown(0);
            $view->setPageUp(2);
        } else {
            $view->setCurrentPage($_GET['page']);
            $view->setPageDown($_GET['page']-1);
            $view->setPageUp($_GET['page']+1);
            $roomslimit = $_GET['room'];
        }
         if(isset($_POST['rooms']))
        {
            $roomslimit = htmlspecialchars($_POST['rooms']);
            $view->setCurrentPage(1);
            $view->setPageDown(0);
            $view->setPageUp(2);
            $view->setRoom($roomslimit);
        }
        
        $repository = new ProductRepository();
        $results = $repository->fetchProd();
        
        $view->viewProducts($results, $roomslimit);
        die();
    }
    //renvoie page ajout de produit (formulaire)
    public function addProduct(): void
    {
        $viewHome = new HomeView();
        //validation admin
        $validate = $this->utils->validateAdmin();
        
        if(!$validate)
        {
            $error = ['error' => 'Quelquechose s\'est mal passé', 'href' => "./index.php?action=accueil", 'lien' => "Retourner à l'accueil"];
            $viewHome->showError($error);
            die();
        } else {
            //si admin ok
        $view = new ProductView();
        $view->viewAddProduct();
        }
    }
    //validation ajout de produit
    public function validateAddProduct(): void
    {
        $viewHome = new HomeView();
        
        if($_POST['csrf'] !== $_SESSION['csrf'])
        {
            $message = "Error Grave, contactez votre administrateur ...";
            $href = "./index.php?action=connect";
            $lien = "Rééssayer";
            $viewHome->showError($message, $href, $lien);
            die();
        }
        $validate = $this->utils->validateAdmin();
        
        if(!$validate)
        {
            $error = ['error' => 'Quelquechose s\'est mal passé', 'href' => "./index.php?action=accueil", 'lien' => "Retourner à l'accueil"];
            $viewHome->showError($error);
            die();
        } else {
            //validation admin
            $view = new ProductView();
            $validate = $this->utils->validateAdmin();
            $product = new Product();
             //si admin ok
            $product->setRef(htmlspecialchars($_POST['ref']));
            $product->setType(htmlspecialchars($_POST['type']));
            $product->setPieces(htmlspecialchars($_POST['pieces']));
            $product->setGarage(htmlspecialchars($_POST['garage']));
            $product->setSdB(htmlspecialchars($_POST['SdB']));
            $product->setPrix(htmlspecialchars($_POST['prix']));
            $product->setCharges(htmlspecialchars($_POST['charges']));
            $product->setNotaire(htmlspecialchars($_POST['notaire']));
            $product->setExplic(htmlspecialchars($_POST['explic']));
            $product->setImgP(htmlspecialchars($_POST['img_p']));
            $product->setImages(htmlspecialchars($_POST['img_1']), htmlspecialchars($_POST['img_2']), htmlspecialchars($_POST['img_3']), htmlspecialchars($_POST['img_4']));
            $product->setAdress1(htmlspecialchars($_POST['adress1']));
            $product->setAdress2(htmlspecialchars($_POST['adress2']));
            $product->setVille(htmlspecialchars($_POST['ville']));
            $product->setZip(htmlspecialchars($_POST['ZIP']));
            
            $repository = new ProductRepository();
            $data = $repository->insertProduct($product);
            
            if($data)
            {
                $success = ['message' => 'Insertion OK', 'href' => "./index.php?action=admin", 'lien' => "Retourner à l'admin"];
                $viewHome->showSuccess($success);
                die();
            } else{
                
                $error = ['error' => 'Quelquechose s\'est mal passé', 'href' => "./index.php?action=add-product", 'lien' => "Réessayer"];
                $viewHome->showError($error);
                die();
            }
        }
    }
    
    //renvoie sur la vue erase produit
    public function eraseUpdateProduct(): void
    {
        $repository = new ProductRepository();
        $view = new ProductView();
        $viewHome = new HomeView();

        if(!isset($_GET['page']) || !is_numeric($_GET['page']))
        {
            $view->setCurrentPage(1);
            $view->setPageDown(0);
            $view->setPageUp(2);
        } else {
            
            $view->setCurrentPage($_GET['page']);
            $view->setPageDown($_GET['page']-1);
            $view->setPageUp($_GET['page']+1);
        }

        $validate = $this->utils->validateAdmin();
        
        if(!$validate)
        {
            $error = ['error' => 'Quelquechose s\'est mal passé', 'href' => "./index.php?action=accueil", 'lien' => "Retourner à l'accueil"];
            $viewHome->showError($error);
            die();
        } else {
            
        $results = $repository->fetchProd();
        $view->viewEraseUpdateProduct($results);
        }
    }
    
    //renvoie la vue de confirmation erase produit
    public function confirmEraseProduct(): void
    {
        $viewHome = new HomeView();
        
        if($_POST['csrf'] !== $_SESSION['csrf'])
        {
            $error = ['error' => 'Error Grave, contactez votre administrateur ...', 'href' => "./index.php?action=erase-update-product", 'lien' => "Rééssayer"];
            $viewHome->showError($error);
            die();
        }
        $validate = $this->utils->validateAdmin();
        
        if(!$validate)
        {
            $error = ['error' => 'Quelquechose s\'est mal passé', 'href' => "./index.php?action=accueil", 'lien' => "Retourner à l'accueil"];
            $viewHome->showError($error);
            die();
        } else {
            
        if(isset($_POST['idToErase']))
        {
            $repository = new ProductRepository();
            $data = $repository->fetchOneProd(htmlspecialchars($_POST['idToErase']));
        }
        $view = new ProductView();
        $view->viewConfirmEraseProduct($data);
        }
    }
    
    //renvoie la validation d'effacement de produit
    public function validateEraseProduct(): void
    {
        $repository = new ProductRepository();
        $view = new ProductView();
        $viewHome = new HomeView();
        
        if($_POST['csrf'] !== $_SESSION['csrf'])
        {
            $message = "Error Grave, contactez votre administrateur ...";
            $href = "./index.php?action=erase-update-product";
            $lien = "Rééssayer";
            $viewHome->showError($message, $href, $lien);
            die();
        }
        
        $validate = $this->utils->validateAdmin();
        
        if(!$validate)
        {
            
            $error = ['error' => 'Quelquechose s\'est mal passé', 'href' => "./index.php?action=accueil", 'lien' => "Retourner à l'accueil"];
            $viewHome->showError($error);
            die();
        } else {
            
            $results = $repository->deleteProd(htmlspecialchars($_POST['idToErase']));
            
            if(!$results)
            {
                $error = ['error' => 'Error Grave, contactez votre administrateur ...', 'href' => "./index.php?action=erase-update-product", 'lien' => "Rééssayer"];
                $viewHome->showError($error);
                die();
            } else {
                
                $success = ['message' => 'Opération OK', 'href' => "./index.php?action=admin", 'lien' => "Retourner à l'admin"];
                $viewHome->showSuccess($success);
                die();
            }
        }
    }
    
    //renvoie la vue update this produit
    public function showFormUpdateProduct(): void
    {
        $repository = new ProductRepository();
        $view = new ProductView();
        $viewHome = new HomeView();
        
        if($_POST['csrf'] !== $_SESSION['csrf'])
        {
            $error = ['error' => 'Error Grave, contactez votre administrateur ...', 'href' => "./index.php?action=erase-update-product", 'lien' => "Rééssayer"];
            $viewHome->showError($error);
            die();
        }
        
        $validate = $this->utils->validateAdmin();
        
        if(!$validate)
        {
            $error = ['error' => 'Quelquechose s\'est mal passé', 'href' => "./index.php?action=accueil", 'lien' => "Retourner à l'accueil"];
            $viewHome->showError($error);
            die();
        } else {
            if(isset($_POST['idToUpdate']))
            {
            $data = $repository->fetchOneProd(htmlspecialchars($_POST['idToUpdate']));
            }
        $view->viewUpdateProduct($data);
        }
    }
    
    public function validateUpdateProduct(): void
    {
        $repository = new ProductRepository();
        $product = new Product();
        $viewHome = new HomeView();
        
        if($_POST['csrf'] !== $_SESSION['csrf'])
        {
            $error = ['error' => 'Error Grave, contactez votre administrateur ...', 'href' => "./index.php?action=erase-update-product", 'lien' => "Rééssayer"];
            $viewHome->showError($error);
            die();
        }
        
        $validate = $this->utils->validateAdmin();
        
        if(!$validate)
        {
            $error = ['error' => 'Quelquechose s\'est mal passé', 'href' => "./index.php?action=accueil", 'lien' => "Retourner à l'accueil"];
            $viewHome->showError($error);
            die();
        } else {
            
            $product->setRef(htmlspecialchars($_POST['ref']));
            $product->setType(htmlspecialchars($_POST['type']));
            $product->setPieces(htmlspecialchars($_POST['pieces']));
            $product->setGarage(htmlspecialchars($_POST['garage']));
            $product->setSdB(htmlspecialchars($_POST['SdB']));
            $product->setPrix(htmlspecialchars($_POST['prix']));
            $product->setCharges(htmlspecialchars($_POST['charges']));
            $product->setNotaire(htmlspecialchars($_POST['notaire']));
            $product->setExplic(htmlspecialchars($_POST['explic']));
            $product->setImgP(htmlspecialchars($_POST['img_p']));
            $product->setImages(htmlspecialchars($_POST['img_1']), htmlspecialchars($_POST['img_2']), htmlspecialchars($_POST['img_3']), htmlspecialchars($_POST['img_4']));
            $product->setAdress1(htmlspecialchars($_POST['adress1']));
            $product->setAdress2(htmlspecialchars($_POST['adress2']));
            $product->setVille(htmlspecialchars($_POST['ville']));
            $product->setZIP(htmlspecialchars($_POST['ZIP']));
            $data = $repository->updateOneProd(htmlspecialchars($_POST['idToUpdate']), $product);
            
            if($data){
            
                $success = ['message' => 'Update OK', 'href' => "./index.php?action=admin", 'lien' => "Retourner à l'admin"];
                $viewHome->showSuccess($success);
                die();
            } else {
                $error = ['error' => 'Error Grave, contactez votre administrateur ...', 'href' => "./index.php?action=admin", 'lien' => "Rééssayer"];
                $viewHome->showError($error);
                die();
            }
        }
    }
    
    public function oneProduct(): void
    {
        $view = new ProductView();
        $viewHome = new HomeView();
        
        if(isset($_GET['secureid']) && is_numeric($_GET['secureid']))
        {
            $id = htmlspecialchars($_GET['secureid']);
        } else {
            
            $error = ['error' => 'Error Grave, contactez votre administrateur ...', 'href' => "./index.php?action=accueil", 'lien' => "Accueil"];
            $viewHome->showError($error);
            die();
        }
        $url = $_SERVER['HTTP_REFERER'];
        $repository = new ProductRepository();
        $results = $repository->fetchOneProd($id);
        $view->viewOneProduct($results, $url);
        die();
    }
    
    public function giveJsonProduct(): string
    {
        $repository = new ProductRepository();
        $result = $repository->fetchProdJson();
        var_dump($result); die();
        return $result;
    }
    
    public function favoris(){
        echo 'favoris';
    }
}
