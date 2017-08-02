<?php

namespace Controller\Admin;

use Controller\ControllerAbstract;

class CategoryController extends ControllerAbstract
{
    public function listAction()
    {
        $categories = $this->app['category.repository']->findAll();
        
        // rend une vue
        return $this->render(
            'admin/category/list.html.twig',
            [
                'categories' => $categories
            ]
        );
    }
}
