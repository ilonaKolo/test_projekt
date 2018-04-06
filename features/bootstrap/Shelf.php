<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 01/03/2018
 * Time: 09:42
 */

final class Shelf
{
    private $priceMap = array();

    public function setProductPrice($product, $price)
    {
        $this->priceMap[$product] = $price;
    }

    public function getProductPrice($product)
    {
        return $this->priceMap[$product];
    }
}