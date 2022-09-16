<?php
namespace App\Models;

use Illuminate\Database\Capsule\Manager as DB;

class Option {
    public static function get($id) {
        return DB::table('product_options')->where('option_id', $id)->first();
    }
    public static function add($data) {
        return DB::table('product_options')->insert($data);
    }

    public static function delete($id) {
        DB::table('options')->where('option_id', $id)->delete();
    }

    public static function update($id, $data) {
       return DB::table('options')
                ->where('option_id', $id)
                ->update($data);
    }
}