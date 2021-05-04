<?php
namespace PlusTimeIT\EasyForms\Models;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class User
{
    public function __construct()
    {
        if (!\Cache::has('userList')) {
            \Cache::store('file')->put('userList' , self::initialUserList() );
        }
        $this->all = \Cache::store('file')->get('userList');
        return $this;
    }

    public function resetCache()
    {
        \Cache::store('file')->put('userList' , self::initialUserList() );
        return $this;
    }

    public static function make()
    {
        return new static();
    }

    public function updateUserById($id , $new_data) : self
    {
        $this->all = $this->all->map(function($user) use($id, $new_data){
            if( $user->get('id') == $id ){
                $user = collect($user)->map(function($details, $named) use($id, $new_data){
                    foreach( $new_data as $name => $value ){
                        if( $name == $named ){
                            return $value;
                        }
                    }
                    return $details;
                });
            }
            return $user;
        });

        \Cache::store('file')->put('userList' , $this->all );
        return $this;
    }

    public function deleteUserById($id) : self
    {
        $this->all = $this->all->filter(function($user) use($id){
                return $user->get('id') == $id ? false : true;
        });

        \Cache::store('file')->put('userList' , $this->all );
        return $this;
    }

    public function getUserById($id)
    {
        return $this->all->where( 'id' , $id );
    }

    public function all() : collection
    {
        return $this->all;
    }

    public static function initialUserList()
    {
        return collect([
            collect( (object) [ 'id' => 0 , 'username' => 'user_1', 'password' => '12345' , 'email' => 'testing@12345.com', 'status' => 'active', 'created_at' => '2021-05-01T01:00:00.000Z' ] ),
            collect( (object) [ 'id' => 1 , 'username' => 'user_2', 'password' => '23456' , 'email' => 'testing@23456.com', 'status' => 'active', 'created_at' => '2021-05-02T01:00:00.000Z' ] ),
            collect( (object) [ 'id' => 2 , 'username' => 'user_3', 'password' => '34567' , 'email' => 'testing@34567.com', 'status' => 'inactive', 'created_at' => '2021-05-03T01:00:00.000Z' ] ),
            collect( (object) [ 'id' => 3 , 'username' => 'user_4', 'password' => '45678' , 'email' => 'testing@45678.com', 'status' => 'inactive', 'created_at' => '2021-05-04T01:00:00.000Z' ] ),
            collect( (object) [ 'id' => 4 , 'username' => 'user_5', 'password' => '56789' , 'email' => 'testing@12345.com', 'status' => 'banned', 'created_at' => '2021-05-05T01:00:00.000Z' ] ),
        ]);
    }

    public $all = [];
}
