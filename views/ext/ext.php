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
            foreach ($extension[0] as $key => $value) {

                print_r($key . " : " . $value . "\r\n");
                ?>
                <br>


            <?php } ?>
        </ul>
    </div>
</div>

