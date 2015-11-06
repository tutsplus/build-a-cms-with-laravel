<?php

namespace SundaySim\Templates;

use Illuminate\View\View;

abstract class AbstractTemplate
{
    protected $view;

    abstract public function prepare(View $view, array $parameters);

    public function getView()
    {
        return $this->view;
    }
}
