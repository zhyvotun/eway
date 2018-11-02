<?php
/**
 * Created by PhpStorm.
 * User: zhyvotun
 * Date: 29.10.18
 * Time: 15:59
 */

namespace frontend\components;

use Yii;

class StringHelper
{

    private $limit;
    private $str2;

    public function __construct()
    {
        $this->limit = Yii::$app->params['shortTextLimit'];
    }

//Обрезаем строку по пробелу (1-й вариант)
//    public function getShort($string, $limit = null)
//    {
//
//        if ($limit === null) {
//            $limit = $this->limit;
//        }
//        $tmp = substr($string, $limit, strlen($string) - $limit); //обрезаю от $limit до конца строки
//        $limit = strpos($tmp, " ") + $this->limit; //устанавливаю новое значение для $limit (проверяю строку после $limit до пробела + добавляю текущий $limit)
//        return substr($string, 0, strcspn($string, ' '));
//    }

//Обрезаем строку по количеству символов и если попали в середину слова, найти конец и обрезать по пробелу (2-й вариант)
    public function getShort($string, $limit = null)
    {
        if ($limit === null) {
            $limit = $this->limit;
        }
        return substr($string, 0, strcspn(substr($string, $this->limit, strlen($string) - $limit), ' ') + $limit) . '...';
    }



////Обрезаем строку по совам
//    public function getShort($string, $limit = null)
//    {
//        if ($limit === null) {
//            $limit = $this->limit;
//        }
//
//        $text_explode = explode(" ", $string);
//        for($i=3; $i<=count($text_explode); $i++) {
//            unset($text_explode[$i]);
//        }
//        $text_implode = implode(" ", $text_explode);
//        //return $text_explode[4];
//        return $text_implode."...";
//            //strcspn($string, $text_explode[4]);
//
//    }

}