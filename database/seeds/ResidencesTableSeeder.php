<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ResidencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('residences')->insert([
            'name' => Str::random(10),
            'introduction' => 'JR総武線「大久保駅」徒歩2分、JR山手線「新大久保駅」徒歩3分。そしてターミナル駅「新宿駅」徒歩15分。 ARDEN新宿は、新宿の繁華街から少し離れた閑静な住宅街に位置します。駅周辺でおいしいものをテイクアウトしてきて、リビングでのびのび食事したり、シェアハウスの皆とお酒飲みながら語りあったり、都会ならでは生活が期待できそうです。
                                コンセプトは「Brooklyn Modern」。ニューヨークのブルックリンにあるカフェやライブラリーのようなイメージです。ARDEN新宿は、ミッドセンチュリー期のインダストリアルデザインを彷彿させるヴィンテージ感あふれる家具や、無垢材、エイジング材を取り入れています。
                                ARDEN新宿のダイニングは高さ4mと開放感あふれる空間です。新宿のビル群まで視線を遮る建物がなく、綺麗な夜景が広がります。またシェアハウスの前の桜の木も見えるので、季節感も感じられる。思わず「はぁー。。」と、ため息が出てしまう程の贅沢な眺めを手に入れる事ができます。
                                ARDEN新宿では、英会話アクティビティを月2回実施しています。こてこての英語学習講座というよりも、一緒にお酒を飲んだり、ゲームをしたり、ゆるーく楽しい雰囲気です。ホスティングをしてくれる外国人は基本的に他のシェアハウスの入居者の方なので、同じシェアハウスの外国人だけでなく、多くの人と国際交流できるのがお勧めポイントです。',
            'location' => '東京都新宿区大久保２丁目',
            'minimum_rent' => 50000,
            'maximum_rent' => 75000,
            'common_charge' => 10000,
            'term' => 6,
            'room_num' => 4,
        ]);
    }
}
