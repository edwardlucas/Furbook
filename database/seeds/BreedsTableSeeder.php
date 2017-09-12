<?php
/**
 * Created by PhpStorm.
 * User: jux
 * Date: 2017/9/12
 * Time: 21:37
 */
class BreedsTableSeeder extends Seeder {
    public function run() {
        DB::table('breeds')->insert([
            ['id' => 1, 'name' => 'Domestic本地猫'],
            ['id' => 2, 'name' => 'Persian波斯猫'],
            ['id' => 3, 'name' => 'Siamese暹罗猫'],
            ['id' => 4, 'name' => 'Abyssinian阿比西尼亚猫'],
        ]);
    }
}