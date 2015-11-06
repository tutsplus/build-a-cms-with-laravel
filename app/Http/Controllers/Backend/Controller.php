<?php

namespace SundaySim\Http\Controllers\Backend;

use Illuminate\Routing\Controller as BaseController;

abstract class Controller extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
