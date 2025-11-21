<?php

namespace app\models;
use yii\base\Model;

class Feedback extends Model
{
    public $name;
    public $email;
    public $message;

    public function rules()
    {
        return [
            [['name', 'message', 'email'], 'required'],
            ['email', 'email']
        ];
    }
}
?>