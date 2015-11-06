<?php

return [

    'theme' => [

        'folder' => 'themes',
        'active' => 'default'

    ],

    'templates' => [

        'home' => SundaySim\Templates\HomeTemplate::class,
        'blog' => SundaySim\Templates\BlogTemplate::class,
        'blog.post' => SundaySim\Templates\BlogPostTemplate::class,

    ]

];
