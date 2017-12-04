<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\reg */

$this->title = 'Update Reg: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Regs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->reg_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reg-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
