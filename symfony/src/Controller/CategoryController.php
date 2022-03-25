<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Category;
use App\Repository\CategoryRepository;
use App\Form\AddCategoryType;
use Doctrine\ORM\EntityManagerInterface;

class CategoryController extends AbstractController
{
    #[Route('/category', name: 'category_get')]
    public function index(CategoryRepository $repository): Response
    {
        $category = $repository->findAll();
        return $this->render('category/index.html.twig', [
            'category' => $category
        ]);
    }
    
    #[Route('/category/add', name: 'category_add')]
    public function add(Request $request, EntityManagerInterface $em): Response
    {
        $category = new Category();
        $form = $this->createForm(AddCategoryType::class, $category);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            //dd($em);
            $em->persist($category);
            $em->flush();

            return $this->redirectToRoute('app_home');
        }
        return $this->render('category/add/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
    
    #[Route('/category/list', name: 'category_list')]
    public function list(): Response
    {
        $categoryRepository = new CategoryRepository();
        $category = $categoryRepository->findAllCategory();
        dd($category);
        return $this->render('category/list/index.html.twig', [
            'category' => $category
        ]);
    }
}