<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = date('YmdHis');
        $data = [
            [
                "id"         => 1,
                "parent_id"  => 0,
                "level"      => 1,
                "show_sort"  => 1,
                "name"       => "Home",
                "created_at" => $date,
                "updated_at" => $date,
            ],
            [
                "id"         => 2,
                "parent_id"  => 0,
                "level"      => 1,
                "show_sort"  => 2,
                "name"       => "程式語言",
                "created_at" => $date,
                "updated_at" => $date,
            ],
            [
                "id"         => 3,
                "parent_id"  => 0,
                "level"      => 1,
                "show_sort"  => 3,
                "name"       => "生存遊戲",
                "created_at" => $date,
                "updated_at" => $date,
            ],
            [
                "id"         => 4,
                "parent_id"  => 3,
                "level"      => 2,
                "show_sort"  => 1,
                "name"       => "基礎戰術射擊",
                "created_at" => $date,
                "updated_at" => $date,
            ],
            [
                "id"         => 5,
                "parent_id"  => 2,
                "level"      => 2,
                "show_sort"  => 1,
                "name"       => "Larave",
                "created_at" => $date,
                "updated_at" => $date,
            ],
            [
                "id"         => 6,
                "parent_id"  => 3,
                "level"      => 2,
                "show_sort"  => 2,
                "name"       => "場地相關",
                "created_at" => $date,
                "updated_at" => $date,
            ],
        ];

        DB::table('category')->insert($data);
    }
}
