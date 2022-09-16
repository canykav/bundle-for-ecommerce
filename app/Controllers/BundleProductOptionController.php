<?php
namespace App\Controllers;

use App\Models\BundleProductOption;

class BundleProductOptionController {
    public static function create($data) {
        $data = [
            'product_id' => $data['product_id'],
            'bundle_id' => $data['bundle_id'],
            'in_bundle_quantity' => $data['quantity']
        ];

        foreach($data as $item) {
            if(empty($item)) {
                echo 'Eksik veri gönderildi.';
                return;
            }
        }
        $option = BundleProductOption::add($data);

        if($option) {
            echo 'Ürün pakete başarıyla eklendi.';
            return;
        }

        echo 'Ürün pakete eklenemedi.';
        return;
    }    

    public static function delete() {
        $product_id = (int)$_GET['product_id'];
        $bundle_id = (int)$_GET['bundle_id'];
        if($id) {
            echo BundleProductOption::delete($product_id, $bundle_id);
            return;
        }
        echo 'Ürün veya paket id\'si bulunamadı.';
        return;
    }
}
?>