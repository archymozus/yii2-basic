<?php

namespace app\controllers;
?>
<div class="row">
    <div class="col-sm-2">
        <?php
        SidebarController::Viewsidebar();
        ?>
    </div>
    <div class="col-sm-10">
        <?php

        use yii\helpers\Html;

$this->title = 'About';
        ?>
        <div class="site-about">
            <h1><?= Html::encode($this->title) ?></h1>

            <p>
                This is the About page. You may modify the following file to customize its content:
            </p>

            <code><?= __FILE__ ?></code>
        </div>
    </div>
</div>