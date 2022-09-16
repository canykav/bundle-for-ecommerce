<?php
namespace App\Models;

use Illuminate\Database\Capsule\Manager as DB;

class BundleProductOption {
    public static function add($data) {
        return DB::table('bundle_product_option')->insert($data);
    }

    public static function get($bundle_id = null, $option_id = null) {
        if(!empty($bundle_id)) {
            $products = DB::table('bundle_product_option')
                ->where('bundle_id', $bundle_id)
                ->get();
        } else if(!empty($option_id)) {
            $products = DB::table('bundle_product_option')
                ->where('option_id', $option_id)
                ->get();
        } else {
            DB::table('bundle_product_option')->get();
        }

        return $products;
    }

    public static function delete($product_id, $bundle_id) {
        return DB::table('bundle_product_option')
            ->where('product_id', $product_id)
            ->where('bundle_id', $bundle_id)
            ->delete($data);
    }
}