<?php
// ici on déclare les services qui vont être utilisés par l'application

use Controller\BibliothequeController;
use Controller\DemoController;
use Silex\Application;
use Silex\Provider\AssetServiceProvider;
use Silex\Provider\DoctrineServiceProvider;
use Silex\Provider\HttpFragmentServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\TwigServiceProvider;

$app = new Application();
$app->register(new ServiceControllerServiceProvider());
$app->register(new AssetServiceProvider());
$app->register(new TwigServiceProvider());
$app->register(new HttpFragmentServiceProvider());
$app['twig'] = $app->extend('twig', function ($twig, $app) {
    // add custom globals, filters, tags, ...

    return $twig;
});

/* connexion à la BDD via :
 * DOCTRINE ->
 *  -> DBAL : couche de base doctrine ~PDO - Data Base Abstraction Layer
 *  -> ORM : Objet Relation Mapping (on ne va pas s'en servir ici)
 * 
 * ===> Ajout doctrine DBAL ($app['db'] dans $app
 * 
 * nécéssite l'installation par composer:
 *      composer require doctrine/dbal: ~2.2
 *      en ligne de commande dans le reperetoire de l'application
 * 
 * /!\ créer le controller
 */
$app->register(
    new DoctrineServiceProvider(),
    [
        /* conventions de nomage */
        'db.options' => [
            'driver' => 'pdo_mysql',
            'host' => 'localhost',
            'dbname' => 'wf3_bibliotheque',
            'user' => 'root',
            'password' => '',
            'charset' => 'utf8'
        ]
    ]
);

/* Ajout du controlleur au conteneur de service. */
$app['demo.controller'] = function () {
    return new DemoController();
};

/* Ajout du controlleur de la bdd aux services $app */
$app['bibliotheque.controller'] = function () {
    return new BibliothequeController();
};


return $app;
