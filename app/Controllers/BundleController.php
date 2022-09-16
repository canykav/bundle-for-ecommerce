<?php
namespace App\Controllers;

use App\Models\Bundle;
use App\Models\Option;
use App\Models\BundleProductOption;

class BundleController {
    public static function create() {
        $data = [
            'name' => 'Ürün Paketi 1',
            'price' => '200.00',
            'status' => '1'
        ];
        $bundle = Bundle::add($data);

        if($bundle) {
            echo 'Ürün paketi başarıyla eklendi.';
            return;
        }

        echo 'Ürün paketi eklenemedi.';
        return;
    }    

    public static function get_stock($id) {
        /**
         * Bundle'daki ürünleri getir.
         * Ürün seçeneğinin stoku / paketteki stok yap.
         * En az hangisi ise(min) o stoktur.
         */
        $products_in_bundle = BundleProductOption::get($id);

        $stock_array = [];
        
        foreach($products_in_bundle as $bundle_product) {
            $option = Option::get($bundle_product->option_id);
            $stock_array[]= floor($option->quantity/$bundle_product->in_bundle_quantity);
        }

        echo min($stock_array);
        return;
    }
}
?>