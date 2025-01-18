<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            // DB::tableの中をデータベースのテーブル名と合わせる必要がある
            [
            'name' => 'カット',
            'memo' => 'カットの詳細',
            'price' => 6000,
            ],
            [
            'name' => 'カラー',
            'memo' => 'カットの詳細',
            'price' => 8000,
            ],
            [
            'name' => 'パーマ(カット込)',
            'memo' => 'カットの詳細',
            'price' => 13000,
            ],
        ]);
        // 毎回金額が変わるとわかりづらくなるので手動でダミーデータ作成
    }
}
