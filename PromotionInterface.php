<?php

namespace Ihsan\Promotion;

interface PromotionInterface
{
    public function addProduct(ProductInterface $product);

    public function getPromotion(ProductInterface $product);
}
