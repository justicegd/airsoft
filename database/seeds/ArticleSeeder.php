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
                "title"       => '資料寫入與驗證-1',
                "category_id" => 5,
                "discription" => '資料寫入與驗證-1',
                "content"     => "
    <h2><strong>本次重點使用功能為</strong></h2>

    <p><strong>&nbsp; &nbsp;1.Request 參數取得</strong><br>
      &nbsp; &nbsp; &nbsp; https://docs.laravel-dojo.com/laravel/5.5/requests<br>
      <strong>&nbsp; &nbsp;2.Validation</strong><br>
      &nbsp; &nbsp; &nbsp; https://docs.laravel-dojo.com/laravel/5.5/validation<br>
      <strong>&nbsp; &nbsp;3.Insert into 資料</strong><br>
      &nbsp; &nbsp; &nbsp; https://docs.laravel-dojo.com/laravel/5.5/eloquent#inserting-and-updating-models<br>
      <strong>&nbsp; &nbsp;4.中介層使用說明</strong><br>
      &nbsp; &nbsp; &nbsp; https://docs.laravel-dojo.com/laravel/5.5/middleware<br>
      <strong>&nbsp; &nbsp;5.route name運用</strong><br>
      &nbsp; &nbsp; &nbsp; https://docs.laravel-dojo.com/laravel/5.5/routing</p>

    <h1>開始&nbsp;&nbsp; &nbsp;</h1>

    <p><strong>1.設計加購買的功能</strong><br>
      <strong>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;1.新增訂購頁面入口</strong><br>
      &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;.重新設定migrate,加入route name欄位<br>
      &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;.seeder加入route name 資料<br>
      &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;.route/web.php 設定購買頁的入口<br>
      &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;.新增購買頁<br>
      &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<strong>2.建立DB table 與相關Model</strong></p>

    <div style=\"background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; php artisan make:model Models/Order<br>
      &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;php artisan make:model Models/OrderDetail<br>
      &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;php artisan make:model Models/Product<br>
      &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;php artisan make:model Models/Freight<br>
      &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;php artisan make:model Models/FreightOffer<br>
      &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;php artisan make:migration create_order_table<br>
      &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;php artisan make:migration create_order_detail_table<br>
      &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;php artisan make:migration create_product_table<br>
      &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;php artisan make:migration create_freight_offer_table<br>
      &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;php artisan make:migration create_freight_table<br>
      &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;php artisan make:seeder ProduceSeeder<br>
      &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;php artisan make:seeder FreightSeeder<br>
      &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;php artisan make:seeder FreightOfferSeeder</div>

    <p><br>
      <strong>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;.增加model&nbsp;</strong><br>
      &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;.order<br>
      &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;.order_detail<br>
      <strong>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;.增加table</strong><br>
      &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;.order(訂單)<br>
      &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;.order_detail(訂單明細)<br>
      &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;.product(產品)<br>
      &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;.freight_offer(運費優惠)<br>
      &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;.freight(運費)</p>

    <p><br>
      &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<strong>3.資料寫入與相關計算邏輯</strong><br>
      &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;.使用request驗證帶入的參數(進階)<br>
      &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;.撰寫運費計算邏輯<br>
      &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;.寫入訂單資料<br>
      &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;.寫入訂單明細資料</p>",
                "created_at"  => $date,
                "updated_at"  => $date,
            ],
            [
                "title"       => '資料寫入與驗證-2',
                "category_id" => 5,
                "discription" => '資料寫入與驗證-2',
                "content"     => '    <p>銜接上次的內容,建立了資料輸入頁面</p>
<h3><strong>1.先確認表單發送的內容</strong></h3>
<p style="padding-left: 30px;">function add(Request $request){<br> $data = $request-&gt;all(); // 取所有傳送的資訊<br> dd($data);<br>}</p>
<h3><strong>2.注入相關model做資料的寫入的準備</strong></h3>
<p style="padding-left: 30px;">/** example */<br> function __construct(Product $product)<br> {<br> $this-&gt;product = $product;<br> }</p>
<h3><br><strong>3.寫入資料</strong></h3>
<p style="padding-left: 30px;"><br><a href="https://github.com/justicegd/laravel_teach/commit/b06f591906c1dcc5694f046c7a8b9a10dff8ca75" target="_blank" rel="noopener noreferrer">GitHub</a> <br> 根據我們所分析的估能,需要做三個步驟<br> 1.新增訂單<br> 2.新增訂單明細<br>&nbsp; &nbsp; 1.根據訂購數量,寫邏輯判斷是否需要運費<br> 3.更新運費<br> <br> <strong>新增訂單範例</strong><br> /*<br> $orderData = [<br>&nbsp; &nbsp; \'name\' =&gt; $name,<br> &nbsp; &nbsp;&nbsp;\'phone\' =&gt; $phone,<br> &nbsp; &nbsp;&nbsp;\'address\' =&gt; $address,<br> ];<br> */<br> <br> /** 新增訂單 */<br> private function addOrder($orderData)<br> {<br> &nbsp; &nbsp;&nbsp;$product = $this-&gt;order-&gt;newInstance(); //新實例<br> &nbsp; &nbsp;&nbsp;foreach ($orderData as $key =&gt; $value) {<br> &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;$product-&gt;$key = $value;<br> &nbsp; &nbsp;&nbsp;}<br> &nbsp; &nbsp;&nbsp;$product-&gt;save();</p>
<p style="padding-left: 30px;">&nbsp; &nbsp;&nbsp;return $product-&gt;id;<br> }</p>
<h3><br> <br><strong>4.建立訂單完成頁面</strong></h3>
<p style="padding-left: 30px;"><br><a href="https://github.com/justicegd/laravel_teach/commit/35c0833ebba39d8d8541626d2a2dc4ca42c9ef4f" target="_blank" rel="noopener noreferrer">GitHub</a><br> 1.根據剛剛建立的資料搜尋出並呈現,需要搜尋<br>&nbsp; &nbsp; 1.訂單資料<br> &nbsp; &nbsp;&nbsp;2.訂單明細資料<br> 補充:<br> &nbsp; &nbsp;&nbsp;1.狀態對應中文,可以在model設定對訂單狀態數字所代表的中文<br> &nbsp; &nbsp;&nbsp;可在model增加function getXxxxAttribute<br> &nbsp; &nbsp;&nbsp;Xxxx為欄位名稱</p>
<p style="padding-left: 60px;"><br> 範例:<br> 1.對應中文名稱設定<br> function getOrderStatusAttribute($value){<br> &nbsp; &nbsp;&nbsp;$statusName =\'\';<br> &nbsp; &nbsp;&nbsp;switch((int)$value){<br>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; case 0:<br> &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;$statusName =\'處理中\';<br> &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;break;<br> &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;case 1:<br> &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;$statusName =\'完成\';<br> &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;break;<br> &nbsp; &nbsp;&nbsp;}<br> &nbsp; &nbsp;&nbsp;return $statusName;<br> }<br> 後續取資料只需引用 $order-&gt;order_status 就會帶出中文名稱<br> <br> 2.也可另外設定欄位名稱<br> function getOrderStatusNnameAttribute(){<br> &nbsp; &nbsp;&nbsp;$value = $this-&gt;order_status<br> &nbsp; &nbsp;&nbsp;$statusName =\'\';<br> &nbsp; &nbsp;&nbsp;switch((int)$value){<br> &nbsp; &nbsp;&nbsp;case 0:<br> &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;$statusName =\'處理中\';<br> &nbsp; &nbsp;&nbsp;break;<br> &nbsp; &nbsp;&nbsp;case 1:<br> &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;$statusName =\'完成\';<br> &nbsp; &nbsp;&nbsp;break;<br> &nbsp; &nbsp;&nbsp;}<br> &nbsp; &nbsp;&nbsp;return $statusName;<br> }<br> <br> 後續取資料只需引用 $order-&gt;order_status_name 就會帶出中文名稱</p>
<p style="padding-left: 60px;"><br> 2.設定table對應,可以只搜尋product table 後面順便帶出 detail內容<br> 在model設定<br> public function product(){<br> &nbsp; &nbsp;&nbsp;return $this-&gt;belongsTo(\'App\Models\Product\', \'product_id\');<br> }<br> <br> 後續取資料只需引用 $order-&gt;product-&gt;name 就會帶出產品名稱</p>
<h3><br> <br><strong>5.表單驗證</strong></h3>
<p><br><a href="https://github.com/justicegd/laravel_teach/commit/2729e37a00f4c663efe51e3793a2accee0f88ca1" target="_blank" rel="noopener noreferrer">GitHub</a><br> 1.建立中介層</p>
<p style="padding-left: 30px;"><br> php artisan make:Middle CreateOrder</p>
<p style="padding-left: 30px;">use Illuminate\Support\Facades\Validator;<br> <br> public function handle($request, Closure $next)<br> {<br> &nbsp; &nbsp;&nbsp;/** 規則 */<br> &nbsp; &nbsp;&nbsp;$rules = [<br> &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;\'title\' =&gt; \'required\',<br> &nbsp; &nbsp;&nbsp;];<br> &nbsp; &nbsp;&nbsp;/** 錯誤對應回應訊息 */<br> &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;$messages = [<br> &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;\'title.required\' =&gt; \'錯誤\',<br> &nbsp; &nbsp;&nbsp;];</p>
<p style="padding-left: 30px;">&nbsp; &nbsp;&nbsp;$validator = Validator::make($request-&gt;all(), $rules, $messages);<br> &nbsp; &nbsp;&nbsp;dd($validator-&gt;getMessageBag()-&gt;messages());</p>
<p style="padding-left: 30px;">&nbsp; &nbsp; return $next($request);<br> }</p>
<p style="padding-left: 30px;"><br> <br> </p>
<h2 style="text-align: center;"><br><br></h2>',
                "created_at"  => $date,
                "updated_at"  => $date,
            ],
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
            ]


        ];

        DB::table('article')->insert($data);
    }
}
