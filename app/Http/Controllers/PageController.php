<?php

namespace SundaySim\Http\Controllers;

use SundaySim\Page;

class PageController extends Controller
{
    public function show(Page $page, array $parameters)
    {
        $this->prepareTemplate($page, $parameters);

        return view('page', compact('page'));
    }

    protected function prepareTemplate(Page $page, array $parameters)
    {
        $templates = config('cms.templates');

        if (! $page->template || ! isset($templates[$page->template])) {
            return;
        }

        $template = app($templates[$page->template]);

        $view = sprintf('templates.%s', $template->getView());

        if (! view()->exists($view)) {
            return;
        }

        $template->prepare($view = view($view), $parameters);

        $page->view = $view;
    }
}
