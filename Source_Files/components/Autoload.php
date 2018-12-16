<?php

function banshee_autoload($class_name)
{
// Lists all class directories in array
    $array_path = array('/models/', '/components/');

    foreach ($array_path as $path)
    {
        $path = ROOT. $path. $class_name. '.php';

        if(is_file($path))
        {
            include_once $path;
        }
    }
}
spl_autoload_register("banshee_autoload"); //__autoload didn`t work thus I have found in the internet this fix
?>