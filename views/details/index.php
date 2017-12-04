<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DetailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customers';
$this->params['breadcrumbs'][] = $this->title;
?>

<!--css styles--> 
<style>
.btn-success{
    float: right;
}
</style>


<div class="details-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add Customers ', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
           ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            'email:email',
            'mobile',
            'gender',
             'age',
            //'status',
            // 'insdt',
            // 'moddt',

           ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
