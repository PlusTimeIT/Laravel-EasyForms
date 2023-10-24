<?php

namespace PlusTimeIT\EasyForms\Controllers;

use Illuminate\Routing\Controller;
use PlusTimeIT\EasyForms\Models\User;

class Users extends Controller
{
    public static function deleteUser($id)
    {
        User::make()->deleteUserById($id);

        return true;
    }

    public static function find($id)
    {
        $user = User::make()->all()->where('id', $id);

        return $user->isEmpty() ? false : $user->first();
    }

    public static function getAllUsers()
    {
        return User::make()->all();
    }

    public static function resetCache()
    {
        User::make()->resetCache();

        return true;
    }

    public static function updateUser($id, $args)
    {
        return User::make()->updateUserById($id, $args);
    }

    public static function updateUserStatus($id, $status)
    {
        return User::make()->updateUserById($id, ['status' => $status]);
    }
}
