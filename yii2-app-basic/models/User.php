<?php

namespace app\models;

use yii\base\Model;

class User extends Model{
    public $id;
    public $name;
    public $age;

    public static function getData(){       
        return [
            new self(['id' => 1, 'name' => 'Вася', 'age' => 12]),
            new self(['id' => 2, 'name' => 'Дима', 'age' => 13]),
            new self(['id' => 3, 'name' => 'Саша', 'age' => 14]),
        ];
    }

    public static function updateAge($id, $newAge){
        $users = self::getData();

        foreach($users as $user){
            if($user->id == $id){
                $user->age = $newAge;
            }
        }
        return $users;
    }
}

?>
