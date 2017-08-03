<?php
/*
 *  Créer la partie admin pour les articles :
 * - Créer le contrôleur Admin\ArticleController qui hérite de ControllerAbstract
 * - Le définir en service dans src/app.php
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

namespace Controller\Admin;

use Controller\ControllerAbstract;

class ArticleController extends ControllerAbstract
{
    public function listAction()
    {        
        $articles = $this->app['article.repository']->findAll();
        
        // rend une vue
        return $this->render(
            'admin/article/list.html.twig',
            [
                'articles' => $articles
            ]
        );
    }
}
