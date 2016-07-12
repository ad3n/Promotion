<?php

namespace Ihsan\Promotion;

class Discount25 extends AbstractPromotion
{
    public function getPromotion(ProductInterface $product)
    {
        if (in_array($product->getName(), array_keys($this->products))) {
            $product->setPrice($product->getPrice() - ((25/100) * $product->getPrice()));

            return $product;
        }

        return;
    }
}
