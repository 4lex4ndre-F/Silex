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

namespace Repository;


class ArticleRepository extends RepositoryAbstract
{
    protected function getTable(){
        return 'article';        
    }

    /*
     *  
     */
    public function findAll()
    {
        $dbArticles = $this->db->fetchAll('SELECT * FROM article');

        $articles = [];

        // boucle de remplissage du tableau $articles
        foreach ($dbArticles as $dbArticle) {

            // on instancie un objet de la classe Article
            $article = new \Entity\Article;

            $article // on set les attributs de l'objet crée
                ->setId($dbArticle['id'])
                ->setTitle($dbArticle['title'])
                ->setHeader($dbArticle['header'])
                ->setContent($dbArticle['content'])
            ;

            $articles[] = $article;  // ajoute l'objet au tableau $categories
        }
        
        return $articles; // /!\ Ne pas oublier de faire un return /!\
    }

}
