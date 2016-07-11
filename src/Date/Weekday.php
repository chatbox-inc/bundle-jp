<?php
namespace Chatbox\Bundle\Date;
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 2016/07/11
 * Time: 18:33
 */
class Weekday
{

    public function getList(){
        return [
            "日",
            "月",
            "火",
            "水",
            "木",
            "金",
            "土",
        ];
    }

    public function get($num){
        if(isset($this->getList()[$num])){
            return $this->getList()[$num];
        }else{
            throw new \OutOfRangeException();
        }
    }

}