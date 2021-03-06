<?php

/* Ce fichier va servir notament à définir toutes les routes */

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

//Request::setTrustedProxies(array('127.0.0.1'));

$app->get('/', function () use ($app) {
    return $app['twig']->render('index.html.twig', array(
        'nom' => 'Intro'
    ));
})
->bind('homepage')
;

// $app->get() crée une nouvelle route accessible en GET uniquement - est disponible après le point d'entrée /web/index.php ou /web/index_dev.php
$app->get('/test', function() use ($app) {
    return $app['twig']->render('test.html.twig');
})
->bind('route_de_test') // bind sert à donner un nom à la route
;

// $app->match() crée une nouvelle route accessible en GET et en POST
// $app->post() crée une nouvelle route accessible en POST uniquement
$app->match('/twig', function () use ($app) {
    return $app['twig']->render(
        'twig.html.twig', // nom de la vue à rendre
        // tableau des paramètres passés à la vue
        [
            'var' => 'Une variable',
            'now' => new DateTime()
        ]
    );
})
->bind('twig')
;
/*
 * on appelle la méthode helloWorldAction de la classe Controller\DemoController au lieu d'une fonction anonyme.
 * nécessite la déclaration de la classe en service dans app.php.
 */
$app
     // get(chemin, code executé)
    ->get('/helloworld', 'demo.controller:helloWorldAction')
    ->bind('hello_world')
;

/*
 *  route contenant une variable
 *  ici: name
 *  toutes les url en /hello/quelquechose vont matcher cette route
 */
$app
    ->get('/hello/{name}', 'demo.controller:helloAction')
    ->bind('hello')
;

$app
    ->get('/abonnes', 'bibliotheque.controller:abonnesAction')
    ->bind('abonnes')
;

// route détail abonné
$app
    ->get('/abonne/{id}', 'bibliotheque.controller:abonneDetailAction')
    // assert() -> restreindre le nom de la variable <=> type de la variable.
        // fonction routeur de Silex
    ->assert('id', '\d+') // la variable id dans l'URL doit être un nombre
    ->bind('abonne_detail')
;

// route ajout d'abonné
$app
    ->match('/abonne/ajout', 'bibliotheque.controller:abonneAjoutAction')
    ->bind('abonne_ajout')
;

// route modification d'abonné
$app
    ->match('/abonne/modif/{id}', 'bibliotheque.controller:abonneModifAction')
    // assert() -> restreindre le nom de la variable <=> type de la variable.
        // fonction routeur de Silex
    ->assert('id', '\d+') // la variable id dans l'URL doit être un nombre
    ->bind('abonne_modif')
;

// route supprimer
$app
    ->get('/abonne/supprimer/{id}', 'bibliotheque.controller:abonneSupprimerAction')
    // assert() -> restreindre le nom de la variable <=> type de la variable.
        // fonction routeur de Silex
    ->assert('id', '\d+') // la variable id dans l'URL doit être un nombre
    ->bind('abonne_suppression')
;


// route emprunt
$app
        ->get('/emprunts', 'bibliotheque.controller:bilanEmpruntAction')
        ->bind('emprunts')
;

// gestion des erreurs
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
    }
);
