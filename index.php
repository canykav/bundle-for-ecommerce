<?php
require __DIR__ . '/vendor/autoload.php';

use App\Controllers\ProductController;
use App\Controllers\OptionController;
use App\Controllers\BundleController;
use App\Controllers\BundleProductController;


/**
 * Fonksiyonların tarayıcıdan test edilebilmesi için create işlemlerini post değil get olarak bıraktım.
 * 
 */

if(!empty($_GET['route'])) {
    switch ($_GET['route']) {
        case 'product':
            return App\Controllers\ProductController::create();
            break;

        case 'option':
            return App\Controllers\OptionController::create();
            break;         
        case 'bundle':
            if(!empty($_GET['action']) && !empty($_GET['bundle_id']) && $_GET['action']=='stock') {
                return App\Controllers\BundleController::get_stock($_GET['bundle_id']);
            }
            return App\Controllers\BundleController::create();
            break;         
        case 'bundle_product':
            return App\Controllers\BundleProductController::create($_GET);
            break; 
    }
}
