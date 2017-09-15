<?php
/**
 * Cat model
 * Created by PhpStorm.
 * User: jux
 * Date: 2017/9/12
 * Time: 20:47
 */
namespace Furbook;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cat extends Model {
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['name','date_of_birth','breed_id'];
    public function breed() {
        return $this->belongsTo('Furbook\Breed');
    }
}