<?php

use Illuminate\Support\Collection;

/**
 * Calculates and returns the total sales amount including tax from the input array of products and tax rate.
 * 
 * @param array[] $products - The array of product objects.
 * @param string $products[].name - The name of the product.
 * @param int $products[].price - The price of the product.
 * @param int $products[].quantity - The quantity sold of the product.
 * @param int $taxRate - The tax rate as a percentage.
 * @return float The total sales amount including tax.
 */
function calculateTotalSalesWithTaxEloquent(array $products, int $taxRate): float
{
    $subtotal = collect($products)
        ->map(fn($product) => (object) $product)
        ->sum(fn(stdClass $product) => $product->price * $product->quantity);

    return $subtotal * (1 + $taxRate / 100);
}
