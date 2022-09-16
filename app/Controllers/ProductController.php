<?php
namespace App\Controllers;

use App\Models\Product;

class ProductController {
    public static function create() {
        $data = [
            'name' => 'Kot Pantolon',
            'description' => 'Kot kumaştan pantolon.',
            'quantity' => '1',
            'price' => '100.00',
            'status' => '1'
        ];
        $product = Product::add($data);

        if($product) {
            echo 'Ürün başarıyla eklendi.'; 
            return;
        }

        echo 'Ürün eklenemedi.'; 
        return;
    }    
}
?>