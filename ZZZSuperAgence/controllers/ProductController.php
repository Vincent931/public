<?php 
class ProductController {
    
    public function __construct()
    {
        $this->utils = new Utils();
    }
    //renvoie page listing produit  
    public function showProducts(): void
    {
        $view = new ProductView();
        
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
        
        $repository = new ProductRepository();
        $results = $repository->fetchProd();
        
        $view->viewProducts($results);
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
            $error = "Quelquechose s'est mal passé";
            $href = "index.php?action=accueil";
            $lien = "Retourner à l'accueil";
            $viewHome->showError($error, $href, $lien);
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
            $error = "Quelquechose s'est mal passé";
            $href = "index.php?action=accueil";
            $lien = "Retourner à l'accueil";
            $viewHome->showError($error, $href, $lien);
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
            $product->setImg1(htmlspecialchars($_POST['img_1']));
            $product->setImg2(htmlspecialchars($_POST['img_2']));
            $product->setImg3(htmlspecialchars($_POST['img_3']));
            $product->setImg4(htmlspecialchars($_POST['img_4']));
            $product->setAdress1(htmlspecialchars($_POST['adress1']));
            $product->setAdress2(htmlspecialchars($_POST['adress2']));
            $product->setVille(htmlspecialchars($_POST['ville']));
            $product->setZip(htmlspecialchars($_POST['ZIP']));
            
            $repository = new ProductRepository();
            $data = $repository->insertProduct($product);
            
            if($data)
            {
            	$error = "Insertion OK";
                $href = "index.php?action=admin";
                $lien = "Retourner à l'admin";
                $viewHome->showSuccess($error, $href, $lien);
            } else{
                $error = "Quelquechose s'est mal passé";
                $href = "index.php?action=add-product";
                $lien = "Réessayer";
                $viewHome->showError($error, $href, $lien);;
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
            $error = "Quelquechose s'est mal passé";
            $href = "index.php?action=accueil";
            $lien = "Retourner à l'accueil";
            $viewHome->showError($error, $href, $lien);
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
            $message = "Error Grave, contactez votre administrateur ...";
            $href = "./index.php?action=erase-update-product";
            $lien = "Rééssayer";
            $viewHome->showError($message, $href, $lien);
            die();
        }
        $validate = $this->utils->validateAdmin();
        
        if(!$validate)
        {
            $error = "Quelquechose s'est mal passé";
            $href = "index.php?action=accueil";
            $lien = "Retourner à l'accueil";
            $viewHome->showError($error, $href, $lien);
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
            $error = "Quelquechose s'est mal passé";
            $href = "index.php?action=accueil";
            $lien = "Retourner à l'accueil";
            $viewHome->showError($error, $href, $lien);
            die();
        } else {
            
            $results = $repository->deleteProd(htmlspecialchars($_POST['idToErase']));
            
            if(!$results)
            {
                $message = "Error Grave, contactez votre administrateur ...";
                $href = "./index.php?action=erase-update-product";
                $lien = "Rééssayer";
                $viewHome->showError($message, $href, $lien);
                die();
            }
            else{
                
                $message = "Opération OK";
                $href = "./index.php?action=admin";
                $lien = "Retourner à l'admin";
                $viewHome->showSuccess($message, $href, $lien);
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
            $message = "Error Grave, contactez votre administrateur ...";
            $href = "./index.php?action=erase-update-product";
            $lien = "Rééssayer";
            $viewHome->showError($message, $href, $lien);
            die();
        }
        
        $validate = $this->utils->validateAdmin();
        
        if(!$validate)
        {
            $error = "Quelquechose s'est mal passé";
            $href = "index.php?action=accueil";
            $lien = "Retourner à l'accueil";
            $viewHome->showError($error, $href, $lien);
            die();
        } else {
            if(isset($_POST['idToUpdate']))
            {
            $data = $repository->fetchOneProd(htmlspecialchars($_POST['idToUpdate']));
            }
        $view->viewUpdateProduct($data);
        }
    }
}
