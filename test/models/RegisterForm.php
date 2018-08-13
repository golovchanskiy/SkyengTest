<?php

namespace app\models;

use yii\base\Model;

class RegisterForm extends Model
{
    public $email;
    public $name;
    public $itn;

    public function rules()
    {
        return [
            [['email', 'name'], 'required'],
            ['email', 'email'],
        ];
    }
}