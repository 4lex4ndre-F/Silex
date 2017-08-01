<?php

namespace Controller;

use Silex\Application;

class BibliothequeController 
{
    public function abonnesAction(Application $app)
    {
        /* grace à DBAL, on peut faire la requete + le fetch en une seule commande "simple" */
        $abonnes = $app['db']->fetchAll('SELECT * FROM abonne');
        
        return $app['twig']->render( /* nom de la vue à partir du repertoire template */
            'bibliotheque/abonnes.html.twig',
            [
                'abonnes' => $abonnes
            ]
        );
    }
    
    public function abonneDetailAction(Application $app, $id) 
    {   
        $abonne = $app['db']->fetchAssoc(
            'SELECT * FROM abonne WHERE id_abonne = :id',
            [':id' => $id] // ~bindParam
        );
        
        // Affichage de la vue
        return $app['twig']->render( /* nom de la vue à partir du repertoire template */
            'bibliotheque/abonne.html.twig',
            [
                /* nom variable dans la bibliotheque twig' => 'resultat requete + fetchAssoc() */
                'abonne' => $abonne
            ]
        );
    }
    
    public function abonneAjoutAction(Application $app) 
    {
        if (!empty($_POST)) {
            // instertion doctrine/dbal
            $app['db']->insert(
                'abonne', // nom de la table
                [
                    'prenom' => $_POST['prenom']
                ] // tableau des valeurs à insérer (les clés sont les noms des champs en bdd)
            );
            
            return $app->redirect(
                    $app['url_generator']->generate('abonnes')
            ); // redirection vers la route abonnes            
        }
        
        return $app['twig']->render( /* nom de la vue à partir du repertoire template */
            'bibliotheque/abonne_ajout.html.twig'
        );
    }
    
    public function abonneModifAction(Application $app, $id)
    {
        $abonne = $app['db']->fetchAssoc(
            'SELECT * FROM abonne WHERE id_abonne = :id',
            [':id' => $id] // ~bindParam
        );
        
        if (empty($abonne)){
            // pour jeter une 404
            $app->abort(404, "Aucun abonné avec l'id $id");
        }
        
        if (!empty($_POST)){
            // update() doctirne/dbal
            $app['db']->update(
                'abonne', // nom de la table
                [
                    'prenom' => $_POST['prenom']
                ], // tableau des valeurs à modifier (les clés sont les noms des champs en bdd)
                [
                    'id_abonne' => $id
                ] // tableau pour la lcause where (ici WHERE id_abonne = $id)
            );                        
            return $app->redirect(
                    $app['url_generator']->generate('abonnes')
            ); // redirection vers la route abonnes
        }        
        
        return $app['twig']->render(
            'bibliotheque/abonne_modif.html.twig',
            [
                'abonne' => $abonne
            ]
        );
    }
    
    public function abonneSupprimerAction(Application $app, $id)
    {               
        // on supprime et redirige vers la liste
        $app['db']->delete(
                'abonne', // nom de la table
                [
                    'id_abonne' => $id
                ] // clause WHERE
        );
        return $app->redirect(
                $app['url_generator']->generate('abonnes')
        ); // redirection vers la route abonnes
    }

    // créer une page qui liste les emprunts avec :
    // -id de l'emprunt
    // -prénom de l'abonné
    // -auteur et titre du livre
    // -date sortie et rendu au format francais
    // -si non rendu : case vide
    public function bilanEmpruntAction(Application $app)
    {
        $emprunt = $app['db']->fetchAll(
            /*'SELECT emprunt.id_emprunt, abonne.prenom, livre.auteur, livre.titre, emprunt.date_sortie, emprunt.date_rendu                 FROM abonne, emprunt, livre
            WHERE emprunt.id_abonne = abonne.id_abonne
            AND emprunt.id_livre = livre.id_livre
            ORDER BY emprunt.id_emprunt'*/
            'SELECT * 
                FROM emprunt
                LEFT JOIN abonne
                ON emprunt.id_abonne = abonne.id_abonne
                LEFT JOIN livre
                ON emprunt.id_livre = livre.id_livre'
            );
        
        return $app['twig']->render(
            'bibliotheque/emprunt.html.twig',
            [
                'emprunt' => $emprunt
            ]
        );       
    }
}
