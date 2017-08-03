<?php

// fait la relation avec la BDD

namespace Repository;

use Entity\Category;

class CategoryRepository extends RepositoryAbstract
{
    protected function getTable()
    {
        return 'category';
    }

    
    /**
     * 
     * @return array Un tableau d'objets Entity\Category
     */
    public function findAll()
    {
        $dbCategories = $this->db->fetchAll('SELECT * FROM category'); // tableau de tableau
        
        $categories = []; // on déclare un tableau pour récupérer les différentes catégories    
        
        /*ce code est passé dans la méthode buildEntity()
         * 
        $category = new Category();

        $category // on set les attributs de l'objet crée
            ->setId($dbCategory['id'])
            ->setName($dbCategory['name'])
        ;
         */
        
        foreach ($dbCategories as $dbCategory) {
            
            $category = $this->buildEntity($dbCategory);
            
            $categories[] = $category;  // ajoute l'objet {'id', 'name'} au tableau $categories
        }
        
        return $categories; // retourne un tableau d'objet avec toutes les catégories
    }  // renvoi une collection d'objets Category de la classe Category du namespace Entity
    
    /**
     * 
     * @param int $id
     * @return Category
     */
    public function find($id)
    {
        $dbCategory = $this->db->fetchAssoc(
            'SELECT * FROM category WHERE id = :id',
            [
                ':id' => $id
            ]
        );
        
        if(!empty($dbCategory)){
            return $this->buildEntity($dbCategory);
        }
    }
    
    public function save(Category $category)
    {
        // les données à enregistrer en BDD
        $data = ['name' => $category->getName()];
        
        // si la categorie a un id, on est en update
        // sinon en insert
        $where = !empty($category->getId())
            ? ['id' => $category->getId()]
            : NULL
        ;
        
        // appel à la méthode de RepositoryAbstract pour enregistrer
        $this->persist($data, $where);
        
        // on set l'id quand on est en insert uniquement
        if (empty($category->getId())) {
            $category->setId($this->db->lastInsertId());
        }
    }
    
    public function delete(Category $category) // attend une entité catégorie
    {
        $this->db->delete(
                'category',
                ['id' => $category->getId()]
        );
    }
    
    

    /**
     * Crée un objet Entity\Category
     * à partir d'un tableau de données venant de la bdd
     * 
     * @param array $data
     * @return Category
     */
    private function buildEntity(array $data)
    {
        $category = new Category();

        $category // on set les attributs de l'objet crée
            ->setId($data['id'])
            ->setName($data['name'])
        ;

        return $category;
    }

}
