<?php

namespace Ihsan\Promotion;

class PromotionFactory
{
    private $promotions = array();

    public function addPromotion(PromotionInterface $promotion)
    {
        $this->promotions[get_class($promotion)] = $promotion;
    }

    public function getPromotion(ProductInterface $product)
    {
        $benefit = null;
        foreach ($this->promotions as $key => $promotion) {
            if ($benefit = $promotion->getPromotion($product)) {
                break;
            }
        }

        return $benefit;
    }
}
