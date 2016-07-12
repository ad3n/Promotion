<?php

namespace Ihsan\Promotion;

interface ProductInterface
{
    public function getName();

    public function setPrice($price);

    public function getPrice();
}
