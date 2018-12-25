<?php
/**
 * Created by PhpStorm.
 * User: DmitryATES
 * Date: 25.12.2018
 * Time: 14:26
 */

namespace app\model;


use app\interfaces\IGood;

abstract class Good implements IGood
{
    protected $id;
    protected $name;
    protected $price;
    protected $image;
    protected $availability;

    public function __construct($id, $name, $price, $image, $availability)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->availability = $availability;
    }

    abstract public function render();

    abstract public function getFinalPrice($id, $count);



}