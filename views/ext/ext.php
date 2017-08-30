<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;
use app\models\Extensions;
use app\models\Extension;

?>
<h1>Extensions</h1>
<ul>
<?php 

foreach ($extension[0] as $key => $value) {
    
       print_r($key ." : ". $value. "\r\n");?>
       <br>
        
    
<?php } ?>
</ul>

