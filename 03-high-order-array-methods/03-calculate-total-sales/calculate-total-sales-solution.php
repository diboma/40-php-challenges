<?php

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
function calculateTotalSalesWithTax(array $products, int $taxRate): float
{
    $subtotal = array_reduce(
        $products,
        fn(float $total, array $product) => $total + $product['price'] * $product['quantity'],
        0.0
    );

    return $subtotal * (1 + $taxRate / 100);
}
