<?php

abstract class AdminBase
{
    public static function checkAdmin()
    {
        //check is it user logged
        $userId = User::checkLogged();

        //info about user
        $user = User::getUserById($userId);

        //check role
        if($user['role'] == 'admin')
        {
            return true;
        }

        //if user is not admin , kill process
        die("Access denied");
    }
}

?>