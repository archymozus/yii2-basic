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
        <ul>
            <?php 
            use yii\helpers\Html;
            use yii\widgets\LinkPager;
            use app\models\Extensions;
            foreach ($extensions as $ext): ?>
                <?php if ($ext->type == 'sip') { ?>
                    <li>        
                        <?= Html::a($ext->number, ['ext/ext', 'id' => $ext->id], ['href' => 'profile-link']) ?>:
                        <?= Html::encode("({$ext->name})") ?> :

                        <?= $ext->type ?>
                    </li>
                <?php } ?>
            <?php endforeach; ?>
        </ul>

        <?= LinkPager::widget(['pagination' => $pagination]) ?>
    </div>
</div>