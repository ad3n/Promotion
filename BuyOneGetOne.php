<?php

namespace Ihsan\Promotion;

class BuyOneGetOne extends AbstractPromotion
{
    public function getPromotion(ProductInterface $product)
    {
        if (in_array($product->getName(), array_keys($this->products))) {
            return $product;
        }

        return;
    }
}
