<?php

namespace app\models;

use yii\base\Model;

class RegisterLegalForm extends Model
{
    public $email;
    public $name;
    public $company_name;
    public $itn;

    public function rules()
    {
        return [
            [['email', 'name', 'company_name', 'itn'], 'required'],
            ['email', 'email'],
        ];
    }
}