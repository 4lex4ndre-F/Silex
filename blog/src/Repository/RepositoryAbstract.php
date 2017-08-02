<?php

namespace Repository;

use Silex\Application;

abstract class RepositoryAbstract
{
    /**
     *
     * @var \doctrine\DBAL\Connection
     */
    protected $db;
    
    /**
     * 
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->db = $app['db'];
    }

}
