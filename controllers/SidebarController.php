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
                            'url' => ['site/about']
                        ],
                        [
                            'label' => 'Contact',
                            'url' => ['site/contact'],
                        ],
                        [
                            'label' => 'Выпадающий список',
                            'items' => [
                                [
                                    'label' => 'Ссылка 1',
                                    'url' => ['site/hello'],
                                ],
                                [
                                    'label' => 'Ссылка 2',
                                    'url' => ['site/hello'],
                                ],
                            ]
                        ],
                        [
                            'label' => 'Extensions',
                            'url' => ['ext/index']
                        ],
                        [
                            'label' => 'Ссылка 4',
                            'url' => ['site/hello'],
                        ],
                        [
                            'label' => 'Ссылка 5',
                            'items' => [
                                [
                                    'label' => 'Ссылка 1',
                                    'url' => ['site/hello'],
                                ],
                                [
                                    'label' => 'Ссылка 2',
                                    'url' => ['site/hello'],
                                ],
                            ]
                        ],
                        [
                            'label' => 'Ссылка 6',
                            'url' => ['site/hello'],
                        ],
                        [
                            'label' => 'Ссылка 7',
                            'url' => ['site/hello']
                        ],
                        [
                            'label' => 'Ссылка 8',
                            'url' => ['site/hello'],
                        ],
                    ]
                ]
        );
        //$this->title = 'My Yii Application';
    }

}
