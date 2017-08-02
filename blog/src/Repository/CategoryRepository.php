<?php

// fait la relation avec la BDD

namespace Repository;

use Entity\Category;

class CategoryRepository extends RepositoryAbstract
{
    /**
     * 
     * @return array Un tableau d'objets Entity\Category
     */
    public function findAll()
    {
        $dbCategories = $this->db->fetchAll('SELECT * FROM category'); // tableau de tableau
        
        $categories = []; // on déclare un tableau pour récupérer les différentes catégories    
        foreach ($dbCategories as $dbCategory) {
            $category = new Category(); // on instancie un nouvel objet de classe Category à chaque itération
            
            $category // ici on utilise les setters de la classse Category
                ->setId($dbCategory['id'])
                ->setName($dbCategory['name'])
            ;
            
            $categories[] = $category;  // ajoute l'objet {'id', 'name'} au tableau $categories
        }
        
        return $categories; // retourne un tableau d'objet avec toutes les catégories
    }
    
    // renvoi une collection d'objets Category de la classe Category du namespace Entity
}
