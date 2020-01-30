<?php
namespace Controllers;

use Models\User;

class Users
{

    public static function getUser()
    {
        $users = User::query()
            ->select('login', 'password')
            ->get();

        //return json_decode($users, true);
        return $users;
    }

    public static function addUser($id, $login, $password)
    {
        try {
            $add_user = User::updateOrCreate(
                ['id' => $id],
                [
                    'login' => $login,
                    'password' => md5($password),
                ]
            );


        } catch (\Exception $ex) {
            echo $ex->getMessage();
        }
        return $add_user;
    }
}