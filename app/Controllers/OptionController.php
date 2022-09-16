<?php
namespace App\Controllers;

use App\Models\Option;

class OptionController {
    public static function create() {
        $data = [
            'product_id' => "1",
            'name' => '34 Beden',
            'quantity' => '3',
            'status' => '1'
        ];
        $option = Option::add($data);

        if($option) {
            echo 'Ürün seçeneği başarıyla eklendi.';
            return;
        }

        echo 'Ürün seçeneği eklenemedi.';
        return;
    }    

    public static function delete() {
        $id = (int)$_GET['id'];
        if($id) {
            echo Option::delete($id);
            return;
        }
        echo 'ID bulunamadı.';
        return;
    }

    /**
     * Seçeneğe stok ekle - çıkar için kullanılabilir.
     */
    public static function update($id,$data) {
        $id = (int)$_POST['id'];
        $data = (int)$_POST['data'];

        if($id) {
            $update = Option::update($id, $data);

            if($update) {
                echo 'Ürün seçeneği başarıyla güncellendi.';
                return;
            }
    
            echo 'Ürün seçeneği güncellenemedi.';
            return;
        }
    }
}
?>