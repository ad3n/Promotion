<?php

$loader = require __DIR__.'/vendor/autoload.php';

use Ihsan\Promotion\Product;
use Ihsan\Promotion\PromotionFactory;
use Ihsan\Promotion\BuyOneGetOne;
use Ihsan\Promotion\BuyAGetB;
use Ihsan\Promotion\Discount25;

$prod1 = new Product();
$prod1->setName('PRODUCT1');
$prod1->setPrice(10000);

$prod2 = new Product();
$prod2->setName('PRODUCT2');
$prod2->setPrice(10000);

$prod3 = new Product();
$prod3->setName('PRODUCT3');
$prod3->setPrice(10000);

$prod4 = new Product();
$prod4->setName('PRODUCT4');
$prod4->setPrice(10000);

$prod5 = new Product();
$prod5->setName('PRODUCT5');
$prod5->setPrice(10000);

$prod6 = new Product();
$prod6->setName('PRODUCT6');
$prod6->setPrice(10000);

$buyOneGetOne = new BuyOneGetOne();
$buyOneGetOne->addProduct($prod1);//Yang boleh buy one get one cuma product 1

$buyAGetB = new BuyAGetB();
$buyAGetB->setBenefit($prod3);
//Beli product dibawah gratis product 3
$buyAGetB->addProduct($prod1);
$buyAGetB->addProduct($prod2);
$buyAGetB->addProduct($prod4);
$buyAGetB->addProduct($prod5);

$discount = new Discount25();
$discount->addProduct($prod6);//Beli product 6 dapat discount 25%

$factory = new PromotionFactory();
$factory->addPromotion($buyOneGetOne);
$factory->addPromotion($buyAGetB);
$factory->addPromotion($discount);

//Beli Product 1
var_dump($factory->getPromotion($prod1));
var_dump($factory->getPromotion($prod5));
var_dump($factory->getPromotion($prod6));
