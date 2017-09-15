<?php
/**
 * Breed Model
 * Created by PhpStorm.
 * User: jux
 * Date: 2017/9/12
 * Time: 20:53
 */
namespace Furbook;

use Illuminate\Database\Eloquent\Model;

class Breed extends Model {
    public $timestamps = false; //不需要默认的 created_at 和 updated_at
    public function cats() {
        return $this->hasMany('Furbook\Cat');
    }
    //P55, Breed和BreedProfile一对一关系
    public function breedProfile()
    {
        return $this->hasOne('Furbook\BreedProfile');
    }
}
