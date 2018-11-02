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

    public function actionView($id){
        $item = Test::getItem($id);
        return $this->render('view', [
            'item' =>$item
        ]);
    }

    public function actionMail()
    {
        $result = Yii::$app->mailer->compose()
            ->setFrom('zhyvotun@gmail.com')
            ->setTo('zhyvotun@gmail.com')
            ->setSubject('Тема сообщения')
            ->setTextBody('Текс сообщения')
            ->setHtmlBody('<b>текст сообщения в формате HTML</b>')
            ->send();

        var_dump($result);
        die;
    }
}
/**
 * Created by PhpStorm.
 * User: zhyvotun
 * Date: 25.10.18
 * Time: 16:49
 */