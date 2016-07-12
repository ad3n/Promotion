<?php

namespace Ihsan\Promotion;

abstract class AbstractPromotion implements PromotionInterface
{
    protected $products = array();

    public function addProduct(ProductInterface $product)
    {
        $this->products[$product->getName()] = $product;
    }
}
