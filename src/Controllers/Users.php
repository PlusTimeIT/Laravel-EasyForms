<?php
namespace PlusTimeIT\EasyForms\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use PlusTimeIT\EasyForms\Models\User;

class Users extends Controller
{

    public static function find($id){
        $user = User::make()->all()->where( 'id' , $id );
        return $user->isEmpty() ? false : $user->first();
    }

    public static function deleteUser($id){
        User::make()->deleteUserById($id);
        return true;
    }

    public static function resetCache(){
        User::make()->resetCache();
        return true;
    }

    public static function updateUserStatus( $id , $status ){
        return User::make()->updateUserById($id , ['status' => $status]);
    }

    public static function getAllUsers(){
        return User::make()->all();
    }
}
