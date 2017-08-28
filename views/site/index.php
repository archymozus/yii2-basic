<div class="row">
    <div class="col-sm-2">
<?php

/* @var $this yii\web\View */

use yii\bootstrap\Nav;

echo Nav::widget(
        [
            'items' => [
                [
                    'label' => 'Ссылка 1',
                    'url' => ['#']
                ],
                [
                    'label' => 'Ссылка 2',
                    'url' => ['#'],
                ],
                [
                    'label' => 'Выпадающий список',
                    'item' => [
                        [
                            'label' => 'Ссылка 1',
                            'url' => ['#'],
                        ],
                        [
                            'label' => 'Ссылка 2',
                            'url' => ['#'],
                        ],
                        ]
                ],
            ]
        ]
    );

$this->title = 'My Yii Application';
?>
         </div>
         <div class="col-sm-10">
             ///////4<br>
                ///////5<br>
                ///////6<br>
          </div>
</div>

