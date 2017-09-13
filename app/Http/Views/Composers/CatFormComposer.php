<?php
/**
 * Created by PhpStorm.
 * User: jux
 * Date: 2017/9/13
 * Time: 17:38
 */

namespace Furbook\Http\Views\Composers;

use Furbook\Breed;
use Illuminate\Contracts\View\View;

class CatFormComposer
{
    protected $breeds;

    public function __construct(Breed $breeds)
    {
        $this->breeds = $breeds;
    }

    public function compose(View $view)
    {
        $view->with('breeds', $this->breeds->pluck('name', 'id')); //lists被重命名为pluck
    }
}