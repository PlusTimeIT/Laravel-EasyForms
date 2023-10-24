<?php

namespace PlusTimeIT\EasyForms\Models;

use Faker\Factory;
use Illuminate\Support\Collection;

class User
{
    public $all = [];

    public function __construct()
    {
        if (! \Cache::has('userList')) {
            \Cache::store('file')->put('userList', self::initialUserList());
        }
        $this->all = \Cache::store('file')->get('userList');

        return $this;
    }

    public function all(): collection
    {
        return $this->all;
    }

    public static function createUsers(int $count = 1)
    {
        $faker = Factory::create();
        $users = [];
        for ($i = 0; $i <= ($count - 1); $i++) {
            $users[] = collect((object) [
                'id' => $i,
                'username' => $faker->lastName(),
                'password' => '12345',
                'email' => $faker->email(),
                'status' => $faker->randomElement(['active', 'inactive', 'banned']),
                'created_at' => $faker->iso8601(),
                'colour' => $faker->hexColor(),
            ]);
        }

        return collect($users);
    }

    public function deleteUserById($id): self
    {
        $this->all = $this->all->filter(fn ($user) => $user->get('id') == $id ? false : true);
        \Cache::store('file')->put('userList', $this->all);

        return $this;
    }

    public function getUserById($id)
    {
        return $this->all->where('id', $id);
    }

    public static function initialUserList()
    {
        return self::createUsers(5);
    }

    public static function make()
    {
        return new static();
    }

    public function resetCache()
    {
        \Cache::store('file')->put('userList', self::initialUserList());

        return $this;
    }

    public function updateUserById($id, $new_data): self
    {
        $this->all = $this->all->map(function ($user) use ($id, $new_data) {
            if ($user->get('id') == $id) {
                $user = collect($user)->map(function ($details, $named) use ($new_data) {
                    foreach ($new_data as $name => $value) {
                        if ($name == $named) {
                            return $value;
                        }
                    }

                    return $details;
                });
            }

            return $user;
        });

        \Cache::store('file')->put('userList', $this->all);

        return $this;
    }
}
