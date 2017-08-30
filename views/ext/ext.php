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
        
        <h1>Ext: <?php echo $extension[0]['name']."(".$extension[0]['number'].")" ?></h1>
        <ul>
            <?php
            use yii\helpers\Html;
            use yii\widgets\LinkPager;
            use app\models\Extensions;
            use yii\bootstrap\ActiveForm;
            $form = ActiveForm::begin([
                'id' => 'save-ext-button',
                'layout' => 'horizontal',
                'action' => 'index.php?r=ext%2Findex'                
                ]); ?>
            <div class="row">
                <div class="col-sm-3">
                    <?php foreach ($extension[0] as $key => $value) { ?>
                    
                    <span class="labelo"><?=$key?></span>:<br/>
                    
                <?php } ?>
                </div>
                <div class="col-sm-9">
                    <?php foreach ($extension[0] as $key => $value) { ?>
    
                 <?=$value?> <br/>
                 <?php } ?>
                 </div>
             </div>
        </ul>
        <div class="form-group">
            <?= Html::submitButton('Сохранить', [
                'class' => 'btn btn-primary', 
                'name' => 'save-ext-button'
                ])?>
        </div>

    </div>
</div>
<?php ActiveForm::end(); ?>

