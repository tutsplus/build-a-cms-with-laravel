# [Build a CMS With Laravel][published url]
## Instructor: [Jason Lewis][instructor url]


Laravel is a PHP framework for modern web apps. Recently upgraded to version 5, Laravel is a mature system that continues to win support due to its elegance and stability. Laravel ships with built-in support for database migrations, object-relational mapping, routing and authentication—making it easier for developers to start and maintain their work.

In this course, Envato Tuts+ instructor Jason Lewis will show you how to build a functioning content management system (CMS) with the Laravel PHP framework. We'll look at some of the tasks and problems that are common to so many web development projects and explore different possible solutions to them. We'll be starting our CMS from scratch—a great way to expand your knowledge of the Laravel framework. In our case, this course will teach you the fundamentals required to develop top-notch Laravel applications.


## Source Files Description

This repository contains the completed project for this course—a simple content management system.

The source for this application is mainly located within the `app` directory. Within here we have various directories each responsible for a particular piece of the application.

To get a local copy of the application working you can run the following commands from within the root directory of the source (assuming you're running on a *nix machine).

```
$ composer install
$ php artisan migrate
$ php artisan db:seed
$ npm install
$ gulp
$ php artisan serve
```

This will then serve the application to `localhost:8000`.

------

These are source files for the Tuts+ course: [Build a CMS With Laravel][published url]

Available on [Tuts+](https://tutsplus.com). Teaching skills to millions worldwide.

[published url]: https://code.tutsplus.com/courses/build-a-cms-with-laravel
[instructor url]: https://tutsplus.com/authors/jason-lewis
