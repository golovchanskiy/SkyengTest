<?php

namespace app\controllers;

use app\models\RegisterForm;
use app\models\RegisterLegalForm;
use yii\helpers\Url;
use yii\web\Controller;

class RegisterController extends Controller
{

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays registration page.
     *
     * @return string
     */
    public function actionIndex()
    {
        $type = \Yii::$app->request->post('type', '');

        $model = new RegisterForm();
        $modelLegal = new RegisterLegalForm();

        switch ($type) {
            case 'legal':
                if ($modelLegal->load(\Yii::$app->request->post()) && $modelLegal->validate()) {
                    return $this->redirect(Url::toRoute('register/thank'));
                }
                break;
            default:
                if ($model->load(\Yii::$app->request->post()) && $model->validate()) {
                    return $this->redirect(Url::toRoute('register/thank'));
                }
                break;
        }

        return $this->render('index', [
            'model' => $model,
            'modelLegal' => $modelLegal,
            'type' => $type,
        ]);
    }

    /**
     * @return string
     */
    public function actionThank()
    {
        return $this->render('thank');
    }

}
