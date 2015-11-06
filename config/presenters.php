<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Presenters
    |--------------------------------------------------------------------------
    |
    | Define your objects and their corrosponding presenters here to have them
    | automatically decorated when resolved in a view. The array key should
    | be your object and the value will be the presenter. Remember to use
    | the class names and not actual instances.
    |
    */

    SundaySim\Page::class => SundaySim\Presenters\PagePresenter::class,
    SundaySim\Post::class => SundaySim\Presenters\PostPresenter::class,
    SundaySim\User::class => SundaySim\Presenters\UserPresenter::class,

];
