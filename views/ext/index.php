<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;
use app\models\Extensions;
use app\models\Extension;

?>
<h1>Ext {$id}</h1>
<ul>
<?php 

    foreach ($extensions as $ext): ?>
    <?php if($ext->type == 'sip') { ?>
    <li>        
        <?= Html::a($ext->number, ['ext/ext', 'id' => $ext->id], ['href' => 'profile-link']) ?>:
        <?= Html::encode("({$ext->name})") ?> :
        
        <?= $ext->type ?>
    </li>
    <?php }?>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>