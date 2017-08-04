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

use Entity\Article;
use Entity\Category;


class ArticleRepository extends RepositoryAbstract
{
    protected function getTable(){
        return 'article';        
    }

    public function findAll()
    {
        $query = 'SELECT a.*, c.name FROM article a'
                . ' JOIN category c On a.category_id = c.id'
        ;
        
        /* syntaxe heredoc
        $query = <<<EOS
SELECT * FROM article a
JOIN category c ON a.category_id = c.id
EOS;
         */
        
        $dbArticles = $this->db->fetchAll($query);

        $articles = [];

        // boucle de remplissage du tableau $articles
        foreach ($dbArticles as $dbArticle) {
            $articles[] = $this->buildEntity($dbArticle);
        }
        
        return $articles; // /!\ Ne pas oublier de faire un return /!\
    }
    
    public function find($id)
    {
        $query = 'SELECT a.*, c.name FROM article a'
                . ' JOIN category c ON a.category_id = c.id'
                . ' WHERE a.id = :id'
        ;
        
        $dbArticle = $this->db->fetchAssoc(
            $query,
            [':id' => $id]
        );
        
        if(!empty($dbArticle)) {
            return $this->buildEntity($dbArticle);
        }
    }
    
    
    public function save(Article $article)
    {
        // les données à enregistrer en BDD
        $data = [
            'title' => $article->getTitle(),
            'header' => $article->getHeader(),
            'content' => $article->getContent(),
            'category_id' => $article->getCategoryId()
        ];
        
        // si la categorie a un id, on est en update
        // sinon en insert
        $where = !empty($article->getId())
            ? ['id' => $article->getId()]
            : NULL
        ;
        
        // appel à la méthode de RepositoryAbstract pour enregistrer
        $this->persist($data, $where);
        
        // on set l'id quand on est en insert uniquement
        if (empty($article->getId())) {
            $article->setId($this->db->lastInsertId());
        }
    }
    
    
    public function delete(Article $article)
    {
        $this->db->delete(
                'article',
                [
                    'id' => $article->getId()
                ]
        );
    }
    
    /**
     * 
     * @param array $data
     * @return Article
     */
    private function buildEntity(array $data)
    {
        $category = new Category();
        
        $category
            ->setId($data['category_id'])
            ->setName($data['name'])
        ;
        
        $article = new Article();
        
        $article
            ->setId($data['id'])
            ->setTitle($data['title'])
            ->setHeader($data['header'])
            ->setContent($data['content'])
            ->setCategory($category)
        ;
        
        return $article;
    }
}
