<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

//Request::setTrustedProxies(array('127.0.0.1'));

/* FRONT */
$app
    ->get('/', 'index.controller:indexAction')
    ->bind('homepage')
;

$app
    ->get('/rubrique/liste', 'category.controller:listAction')
    ->bind('category_list')
;


/* BACK */

/* groupe de routes spécifiques admin */
$admin = $app['controllers_factory']; // service de l'appli

// toutes les routes définies par $admin auront une URL commencant par /admin 
// sans avoir à l'ajouter dans chaque route
$app->mount('/admin', $admin); // préfixe dans l'URL, $admin

// l'URL de cette route est /admin/rubriques
$admin
    ->get('/rubriques', 'admin.category.controller:listAction')
    ->bind('admin_categories')
;




$app->error(function (\Exception $e, Request $request, $code) use ($app) {
    if ($app['debug']) {
        return;
    }

    // 404.html, or 40x.html, or 4xx.html, or error.html
    $templates = array(
        'errors/'.$code.'.html.twig',
        'errors/'.substr($code, 0, 2).'x.html.twig',
        'errors/'.substr($code, 0, 1).'xx.html.twig',
        'errors/default.html.twig',
    );

    return new Response($app['twig']->resolveTemplate($templates)->render(array('code' => $code)), $code);
});
