<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // １，キウイ(秋・冬)
        $param = [
            'product_id' => '1',
            'season_id' => '3'
        ];
        DB::table('product_seasons')->insert($param);
        
        $param = [
            'product_id' => '1',
            'season_id' => '4'
        ];
        DB::table('product_seasons')->insert($param);

        // ２，ストロベリー(春)
        $param = [
            'product_id' => '2',
            'season_id' => '1'
        ];
        DB::table('product_seasons')->insert($param);

        // ３，オレンジ(冬)
        $param = [
            'product_id' => '3',
            'season_id' => '4'
        ];
        DB::table('product_seasons')->insert($param);

        // ４，スイカ(夏)
        $param = [
            'product_id' => '4',
            'season_id' => '2'
        ];
        DB::table('product_seasons')->insert($param);

        // ５，ピーチ(夏)
        $param = [
            'product_id' => '5',
            'season_id' => '2'
        ];
        DB::table('product_seasons')->insert($param);

        // ６，シャインマスカット(夏・秋)
        $param = [
            'product_id' => '6',
            'season_id' => '2'
        ];
        DB::table('product_seasons')->insert($param);

        $param = [
            'product_id' => '6',
            'season_id' => '3'
        ];
        DB::table('product_seasons')->insert($param);

        // ７，パイナップル(春・夏)
        $param = [
            'product_id' => '7',
            'season_id' => '1'
        ];
        DB::table('product_seasons')->insert($param);

        $param = [
            'product_id' => '7',
            'season_id' => '2'
        ];
        DB::table('product_seasons')->insert($param);

        // ８，ブドウ(夏・秋)
        $param = [
            'product_id' => '8',
            'season_id' => '2'
        ];
        DB::table('product_seasons')->insert($param);

        $param = [
            'product_id' => '8',
            'season_id' => '3'
        ];
        DB::table('product_seasons')->insert($param);

        // ９，バナナ(夏)
        $param = [
            'product_id' => '9',
            'season_id' => '2'
        ];
        DB::table('product_seasons')->insert($param);

        // １０，メロン(春・夏)
        $param = [
            'product_id' => '10',
            'season_id' => '1'
        ];
        DB::table('product_seasons')->insert($param);

        $param = [
            'product_id' => '10',
            'season_id' => '2'
        ];
        DB::table('product_seasons')->insert($param);
    }
}
