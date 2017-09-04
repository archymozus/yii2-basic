<?php
namespace app\controllers;
?>
<div class="row">
    <div class="col-sm-2">
        <?php
        
        SidebarController::Viewsidebar();
        ?>
    </div>
    <div class="col-sm-offset-2">        
    </div>
    <div class="col-sm-8">

        <h1>Extensions</h1>
        
            <?php 
            use yii\helpers\Html;
            use yii\widgets\LinkPager;
            use app\models\Extensions;
            use yii\grid\GridView;
            use yii\data\ActiveDataProvider;

$dataProvider = new ActiveDataProvider([
    'query' => Extensions::find(),
    'pagination' => [
        'pageSize' => 20,
    ],
]);
echo GridView::widget([
    'dataProvider' => $dataProvider,
]);
?>
            
        

        <?= LinkPager::widget(['pagination' => $pagination]) ?>
    </div>
</div>