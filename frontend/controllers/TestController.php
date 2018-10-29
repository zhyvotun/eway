<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Test;

class TestController extends Controller
{
    public function actionIndex()
    {
        $max = Yii::$app->params['maxNewsInList'];
        $list = Test::getNewsList($max);
        //print_r($list);die;
        return $this->render('index', [
            'list' => $list,
        ]);
    }
}
/**
 * Created by PhpStorm.
 * User: zhyvotun
 * Date: 25.10.18
 * Time: 16:49
 */