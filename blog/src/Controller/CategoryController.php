<?php

namespace Controller;

class CategoryController extends ControllerAbstract
{
    public function listAction()
    {
        // appel à la méthode findAll() de la classe Repository\CategoryRepository
        // nécessite qu'elle ait été déclarée en service dans src/app.php
        $categories = $this->app['category.repository']->findAll();
        
        return $this->render(
            'category/liste.html.twig',
            [
                'categories' => $categories
            ]
        );
    }
}
