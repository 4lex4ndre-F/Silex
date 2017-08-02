<?php


namespace Controller;

use Silex\Application;

abstract class ControllerAbstract
{
    
    /**
     *
     * @var Application // attribut $app de la classe Application 
     */
    protected $app;
    
    /**
     *
     * @var \Twig_environment // point d'entrée de Twig
     */
    protected $twig;
    
    /**
     * 
     * @param Application $app
     */
    public function __construct(Application $app) 
    {
        $this->app = $app;
        $this->twig = $app['twig'];
    }
    
    /**
     * 
     * @param string $view
     * @param array $parameters
     * @return string
     */
    public function render($view, array $parameters =[])// $parameter à une valeur par défaut vide
    {        
       return $this->twig->render($view, $parameters);
    }
}
