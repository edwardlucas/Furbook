<?php
/**
 * Created by PhpStorm.
 * User: jux
 * Date: 2017/9/15
 * Time: 16:56
 */

use Illuminate\Database\Seeder;
use Keboola\Csv\CsvFile;

class CatsTableSeeder extends Seeder
{
    public function run() {
        //echo getcwd();
        $csv = new CsvFile('database/seeds/csv/cats.csv');
        foreach($csv as $row){
            echo dump($row);
            DB::table('cats')->insert([
                'id' => $row[0],
                'name' => $row[1],
                'date_of_birth' => $row[2],
                'breed_id' => $row[3],
                'deleted_at' => $row[4]=='NULL'?null:$row[4],
                'created_at' => $row[5],
                'updated_at' => $row[6]
                ]);
        }
    }
}