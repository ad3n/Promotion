<?php

namespace Ihsan\Promotion;

class BuyAGetB extends AbstractPromotion
{
    private $productBenefit;

    public function setBenefit(ProductInterface $product)
    {
        $this->productBenefit = $product;
    }

    public function getPromotion(ProductInterface $product)
    {
        if (in_array($product->getName(), array_keys($this->products))) {
            return $this->productBenefit;
        }

        return;
    }
}
