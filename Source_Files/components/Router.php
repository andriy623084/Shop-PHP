<?php

class Router
{

    private $routes;

    public function __construct()
    {
        $routerPath = ROOT.'/config/routes.php';
        $this->routes = include($routerPath);

        //Returns requested url
    }

    private function getURI()
    {
        if(!empty($_SERVER['REQUEST_URI']))
        {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
        //get requested url
        $uri = $this->getURI();

        //check existing of requested url in routes.php
        foreach ($this->routes as $uriPattern => $path)
        {
            //comparing requested url with existing routes
            if(preg_match("~$uriPattern~",$uri))
            {
                //get inner path from outside path according to rule
                $internalRout = preg_replace("~$uriPattern~",$path,$uri); //- gives to excessive elements to array

                //check which controller and action working with request
                $segments = explode('/', $internalRout);

                $controllerName = array_shift($segments).'Controller';

                $controllerName = ucfirst($controllerName);
                $actionName = 'action'.ucfirst(array_shift($segments));

                $parameters = $segments;


                //connect file class-controller
                $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';

                if(file_exists($controllerFile))
                {
                    include_once ($controllerFile);
                }
                //create object and call method
                $controllerObject = new $controllerName;
                $result = call_user_func_array(array($controllerObject,$actionName),$parameters);
                if($result != NULL)
                {
                    break;
                }
            }
        }
    }
}

?>