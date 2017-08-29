<?php

namespace app\controllers;

use yii\web\Controller;
use yii\bootstrap\Nav;

class SidebarController extends Controller {

    public static function Viewsidebar() {

        echo Nav::widget(
                [
                    'items' => [
                        [
                            'label' => 'About',
                            'url' => ['about']
                        ],
                        [
                            'label' => 'Contact',
                            'url' => ['contact'],
                        ],
                        [
                            'label' => 'Выпадающий список',
                            'items' => [
                                [
                                    'label' => 'Ссылка 1',
                                    'url' => ['hello'],
                                ],
                                [
                                    'label' => 'Ссылка 2',
                                    'url' => ['hello'],
                                ],
                            ]
                        ],
                        [
                            'label' => 'Ссылка 3',
                            'url' => ['hello']
                        ],
                        [
                            'label' => 'Ссылка 4',
                            'url' => ['hello'],
                        ],
                        [
                            'label' => 'Ссылка 5',
                            'items' => [
                                [
                                    'label' => 'Ссылка 1',
                                    'url' => ['hello'],
                                ],
                                [
                                    'label' => 'Ссылка 2',
                                    'url' => ['hello'],
                                ],
                            ]
                        ],
                        [
                            'label' => 'Ссылка 6',
                            'url' => ['hello'],
                        ],
                        [
                            'label' => 'Ссылка 7',
                            'url' => ['hello']
                        ],
                        [
                            'label' => 'Ссылка 8',
                            'url' => ['hello'],
                        ],
                    ]
                ]
        );
        //$this->title = 'My Yii Application';
    }

}
