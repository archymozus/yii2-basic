<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Extensions;

class ExtController extends Controller
{
    public function actionIndex()
    {
        $extensions = Extensions::find()->where(['type' => 'sip'])->orderBy('name')->all();
        $query = Extensions::find()->where(['type' => 'sip']);
        
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $extensions = $query->orderBy('number')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'extensions' => $extensions,
            'pagination' => $pagination,
        ]);
    }
    
    public function actionExt($id)
    {
        $extension = Extensions::find()->where(['id' => $id])->all();
        $query = Extensions::find()->where(['id' => $id]);
        
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $extension = $query
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('ext', [
            'extension' => $extension,
            'pagination' => $pagination,
        ]);
    }
}
