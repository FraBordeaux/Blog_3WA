<?php

require_once dirname(__DIR__, 2) . "/lib/Controller/AbstractController.php";
require_once dirname(__DIR__, 2) . "/src/Repository/ArticlesRepository.php";


class ArticlesController extends AbstractController
{
    
    /*
        @return string utilise la methode renderView() définie dans la classe abstrait parent abstractController 
     */
     
    public function index(): string
    {
        $articles = [];
        $articlesRepository= new ArticlesRepository();
        $articles = $articlesRepository->findAll();
     
        return $this->renderView("/template/articles_base.phtml", ["articles" => $articles]);
        
    }//end function index
    
    public function show(){
        
    }//end function show
}

