<?php 
namespace App\Models;
use Illuminate\Database\Capsule\Manager as DB;

class Product {
    public static function add($data) {
        return DB::table('products')->insert($data);
    }
}

?>