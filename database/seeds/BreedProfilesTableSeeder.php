<?php
/**
 * Created by PhpStorm.
 * User: jux
 * Date: 2017/9/12
 * Time: 21:37
 */
use Illuminate\Database\Seeder;

class BreedProfilesTableSeeder extends Seeder {
    public function run() {
        DB::table('breedprofiles')->insert([
            ['id' => 1, 'Country' => '全世界', 'brief' => '可能是由原本分布在非洲與亞洲極西南部的F. silvestris libyca的後裔,全世界約有30種品系,體型、毛色各異；頭軀幹長平均46公分,尾長平均30公分,雌貓平均體重3.3公斤,雄貓平均4.5公斤。'],
            ['id' => 2, 'Country' => '英国', 'brief' => '是以阿富汗的土种长毛猫和土耳其的安哥拉长毛猫为基础，在英国经过100多年的选种繁殖，于1860年诞生的一个品种。'],
            ['id' => 3, 'Country' => '泰国', 'brief' => '暹（xiān）罗猫是世界著名的短毛猫，也是短毛猫的代表品种。种族原产于暹罗（今泰国），故名暹罗猫。在200多年前，这种珍贵的猫仅在泰国的皇宫和大寺院中饲养，是足不出户的贵族。'],
            ['id' => 4, 'Country' => '阿比西尼亚猫', 'brief' => '传说现代的阿比西尼亚猫是古埃及被崇拜为“神圣之物”的古埃及猫的后裔。在保存下来的古埃及神猫的木乃伊中，有一种血红色的猫与它十分相像，因此，许多人认为它是古埃及神猫的直系后代。'],
        ]);
    }
}