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

// La route match( à la fois /rubrique/edition et rubrique/edition/id
$admin
    ->match('/rubrique/edition/{id}', 'admin.category.controller:editAction')
    ->value('id', null) // valeur par défaut pour l'id
    ->bind('admin_category_edit') // service admin.category.controller 
                                        //déjà déclaré dans app.php
;

$admin
    ->get('/rubrique/suppression/{id}', 'admin.category.controller:deleteAction')
    ->assert('id', '\d+') // id doit être un nombre
    ->bind('admin_category_delete')
;

$admin
        ->get('/articles', 'admin.article.controller:listAction')
        ->bind('admin_articles')
;

/*
 *  Créer la partie admin pour les articles :
 * - Créer le contrôleur Admin\ArticleController qui hérite de ControllerAbstract
 * - Le définir en servcie dans src/app.php
 * - y ajouter la méthode listAction() qui va rendre la vue admin/article/list.html.twig
 * - créer la vue
 * - créer la route qui pointe sur l'action
 * - ajouter un lien vers cette route dans la navbar admin
 * - créer l'entity Article et le repository ArticleRepository qui hérite de RepositoryAbstract
 * - déclarer le repository en service dans src/app.php
 * - remplir la méthode listAction() en utilisant ArticleRepository
 * - faire l'affichage en tableau HTML dans la vue
 * - terminer les fonctionnalités avec création / modification / suppression
 * 
 */

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
