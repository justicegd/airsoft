<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
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
                "title"       => '基礎戰術射擊-裝備檢整',
                "category_id" => 4,
                "discription" => '裝備檢整為基礎戰術射擊的基礎,確保在場上不會噴裝與卡手卡腳',
                "content"     => "<p><strong>【基礎戰術射擊-裝備檢整</strong><strong>】</strong></p>

<p>在做訓練前， 需要將身上的裝備需調整至定位，</p>

<p>定位的意思是：</p>

<p>1.安全裝備(小帽，護目鏡‧‧‧等),視個人習慣調整。</p>

<p>2.電池(店槍)電量足夠與瓦斯裝填好</p>

<p>3.戰術背心、腰封調至固定</p>

<p>4.彈夾調至順手取得位置且固定， 以方便拿取、不會掉、不影響行動為主</p>

<p>準備好上述步驟， 可做開合跳或Tabata確認不會噴裝， 即算完成</p>

<p>補充說明： 第4項會於訓練中不斷調整至最佳位置。</p>
",
                "created_at"  => $date,
                "updated_at"  => $date,
            ],

        ];

        DB::table('article')->insert($data);
    }
}