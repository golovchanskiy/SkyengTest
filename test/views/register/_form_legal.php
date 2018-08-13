<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $modelLegal app\models\RegisterLegalForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

<div id="site-register-legal">

    <?php $form = ActiveForm::begin([
        'id' => 'register-legal-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

    <?= Html::hiddenInput('type', 'legal') ?>

    <?= $form->field($modelLegal, 'email')->textInput(['autofocus' => true]) ?>
    <?= $form->field($modelLegal, 'name')->textInput() ?>
    <?= $form->field($modelLegal, 'itn')->textInput() ?>
    <?= $form->field($modelLegal, 'company_name')->textInput() ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Register', ['class' => 'btn btn-primary', 'name' => 'register-legal-button']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>