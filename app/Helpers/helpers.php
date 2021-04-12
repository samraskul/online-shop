<?php

use Illuminate\Support\Str;

/**
 * convert space in the product name to dash and
 * concat $productId, $productTitle
 * 
 * @var int
 * @var string
 * 
 * @return string
 */
function optimizeProductUrl($productId, $productName){
    // $productNameWithDash = preg_replace('/\s/', '-', $productName);
    // $productNameRemoveAmpersand = preg_replace('/&/', '-and-', $productNameWithDash);
    // $productNameRemoveAmpersand = preg_replace('/=/', '', $productNameWithDash);
    $productNameUrlFriendly = Str::slug($productName);

    return $productId . '-' . $productNameUrlFriendly;
}

/**
 * return the Id of dashed url
 * 
 * @var string
 * 
 * @return string
 */
function getProductId($productUrlWithDash){
    return substr($productUrlWithDash, 0, strpos($productUrlWithDash, '-'));
}