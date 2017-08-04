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
use Entity\Article;
use Entity\Category;

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
    
    public function editAction($id = null)
    {
        
        if (!is_null ($id)) {
            // on va chercher l'article en bdd -> modification
            $article = $this->app['article.repository']->find($id);
            
            if(!$article instanceof Article) {
                $this->app->abort(404);
            }
        } else{
            // nouvel article
            $article = new Article();
            $article->setCategory(new Category()); // on en a besoin pour set une 
            //catégorie lors de la création d'un article
        }
        
        // on a besoin de la liste des rubriques pour construire le select dans le formulaire
        $categories = $this->app['category.repository']->findAll();
        
        $errors = [];
        
        if(!empty($_POST)) {
            $article
                ->setTitle($_POST['title'])
                ->setHeader($_POST['header'])
                ->setContent($_POST['content'])
            ;
            $article->getCategory()->setId($_POST['category']);
            
            if(empty($_POST['title'])) {
                $error['title'] = 'Le titre est obligatoire';
            } elseif (strlen($_POST['title']) > 100) {
                $error['title'] = 'Le titre ne doit pas dépasser 100 caractères';
            }
            
            if(empty($_POST['header'])) {
                $error['header'] = 'Le résumé est obligatoire';
            }
            
            if(empty($_POST['content'])) {
                $error['content'] = 'Le contenu est obligatoire';
            }
            
            if(empty($_POST['category'])) {
                $error['category'] = 'La rubrique est obligatoire';
            }
            
            if(empty($error)){
                $this->app['article.repository']->save($article);
                $this->addFlashMessage("L'article est enregistré");
                return $this->redirectRoute('admin_articles');
            } else {
                $message = '<strong>Le formulaire contient des erreurs.</strong>';
                $message .= '<br>' . implode('<br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        }

        
        
        return $this->render(
            'admin/article/edit.html.twig',
            [
                'article' => $article, // pour passer l'article à la vue
                'categories' => $categories
            ]
        );
    }
    
    public function deleteAction($id)
    {
        $article = $this->app['article.repository']->find($id);
        
        if(empty($article)){
            $this->app->abort(404);
        }
        
        $this->app['article.repository']->delete($article);
        $this->addFlashMessage("L'article est supprimé");
        
        return $this->redirectRoute('admin_articles');
    }
}
