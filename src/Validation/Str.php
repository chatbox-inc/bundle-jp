<?php
namespace Chatbox\Bundle\Validation;
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 2016/07/11
 * Time: 18:30
 */
class Str{

    public function isHiragana($str){
        return (bool)preg_match("/^[ぁ-ゞ]+$/u",$str);
    }

    public function isKatakana($str){
        return (bool)preg_match("/^[ァ-ヾ]+$/u", $str);
    }

}