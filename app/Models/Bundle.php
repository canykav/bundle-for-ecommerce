<?php
namespace App\Models;

use Illuminate\Database\Capsule\Manager as DB;

class Bundle {
    public static function add($data) {
        return DB::table('bundle')->insert($data);
    }
}