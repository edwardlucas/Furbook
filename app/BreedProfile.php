<?php
/**
 * Created by PhpStorm.
 * User: jux
 * Date: 2017/9/15
 * Time: 14:39
 */

namespace Furbook;

use Illuminate\Database\Eloquent\Model;

class BreedProfile extends Model
{
    public $timestamps = false; //不需要默认的 created_at 和 updated_at
    public function breed()
    {
        return $this->belongsTo('Furbook\Breed');
    }
}