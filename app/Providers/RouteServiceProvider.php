<?php

namespace SundaySim\Providers;

use SundaySim\Page;
use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'SundaySim\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        //

        parent::boot($router);
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function ($router) {
            require app_path('Http/routes.php');
        });

        if (! app()->runningInConsole()) {
            foreach (Page::all() as $page) {
                $router->get($page->uri, ['as' => $page->name, function () use ($page, $router) {
                    return $this->app->call('SundaySim\Http\Controllers\PageController@show', [
                        'page' => $page,
                        'parameters' => $router->current()->parameters()
                    ]);
                }]);
            }
        }
    }
}
