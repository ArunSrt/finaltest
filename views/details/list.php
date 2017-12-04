
<?php
use yii\widgets\ListView;
?>
<?= 
ListView::widget([
    'dataProvider' => $listDataProvider,
    'filterModel' => $searchModel,

    'columns' => [
           ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            'email:email',
            'mobile',
            'gender',
             'age',
              ],

]); 
?>