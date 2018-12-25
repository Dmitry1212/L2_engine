<?php
/**
 * Created by PhpStorm.
 * User: DmitryATES
 * Date: 25.12.2018
 * Time: 15:46
 */

namespace app\model;


class DigitalGood extends Good
{
    public function getFinalPrice($id, $count=1)
    {
        // TODO: Implement getFinalPrice() method.
        // по id надо вытащить стоимость товара из БД
        $cost = $id;
        return $cost*$count;

    }
    public function render()
    {

        $str = '';
        $str .= "<h1> {$this->name}</h1>";
        $str .= "<h2> Цена: {$this->price}</h2>";
        $str .= "<img src='{$this->image}'>";
        return $str;
    }
}