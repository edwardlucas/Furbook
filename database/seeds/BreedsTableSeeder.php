<?php
/**
 * Created by PhpStorm.
 * User: jux
 * Date: 2017/9/12
 * Time: 21:37
 */
use Illuminate\Database\Seeder;

class BreedsTableSeeder extends Seeder {
    public function run() {
        DB::table('breeds')->insert([
            ['id' => 1, 'name' => 'Domestic本地猫', 'breed_profile_id' => 1 ],
            ['id' => 2, 'name' => 'Persian波斯猫', 'breed_profile_id' => 2 ],
            ['id' => 3, 'name' => 'Siamese暹罗猫', 'breed_profile_id' => 3 ],
            ['id' => 4, 'name' => 'Abyssinian阿比西尼亚猫', 'breed_profile_id' => 4 ],
        ]);
    }
}