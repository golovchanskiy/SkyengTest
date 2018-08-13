<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model app\models\RegisterForm */

/* @var $modelLegal app\models\RegisterLegalForm */

use yii\helpers\Html;

$this->title = 'Registration';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>

<ul class="nav nav-tabs">
    <li <?= $type != 'legal' ? 'class="active"' : '' ?>><a data-toggle="tab" href="#individual">Individual</a></li>
    <li <?= $type == 'legal' ? 'class="active"' : '' ?>><a data-toggle="tab" href="#legal">Company</a></li>
</ul>

<div class="tab-content">
    <div id="individual" class="tab-pane fade <?= $type != 'legal' ? 'in active' : '' ?>">
        <h3></h3>
        <?= $this->render('_form', [
            'model' => $model,
        ]); ?>
    </div>
    <div id="legal" class="tab-pane fade <?= $type == 'legal' ? 'in active' : '' ?>">
        <h3></h3>
        <?= $this->render('_form_legal', [
            'modelLegal' => $modelLegal,
        ]); ?>
    </div>
</div>