<?php

namespace Furbook\Providers;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(ViewFactory $view)
    {
        //view composers 允许绑定变量到指定的view上面，从而避免每次都向各个view传递同样的变量，这些view包含了某个
        //共同的view文件
        $view->composer('partials.forms.cat', 'Furbook\Http\Views\Composers\CatFormComposer');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
