<?php

namespace App\Twig\Extensions;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class PriceExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('price', [$this, 'formatPrice']),
            new TwigFilter('price_color', [$this, 'formatPriceColor']),
        ];
    }

    public function formatPrice($number, $decimals = 0, $decPoint = '.', $thousandsSep = ',')
    {
        $price = number_format($number, $decimals, $decPoint, $thousandsSep);
        $price = '$---'.$price;

        return $price;
    }

    public function formatPriceColor($number)
    {
        return 'blue: ' . $number;
    }
}