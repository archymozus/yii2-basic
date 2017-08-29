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
                                    'url' => ['#'],
                                ],
                                [
                                    'label' => 'Ссылка 2',
                                    'url' => ['#'],
                                ],
                            ]
                        ],
                        [
                            'label' => 'Ссылка 3',
                            'url' => ['#']
                        ],
                        [
                            'label' => 'Ссылка 4',
                            'url' => ['#'],
                        ],
                        [
                            'label' => 'Ссылка 5',
                            'items' => [
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
                        [
                            'label' => 'Ссылка 6',
                            'url' => ['#'],
                        ],
                        [
                            'label' => 'Ссылка 7',
                            'url' => ['#']
                        ],
                        [
                            'label' => 'Ссылка 8',
                            'url' => ['#'],
                        ],
                    ]
                ]
        );
        //$this->title = 'My Yii Application';
    }

}
