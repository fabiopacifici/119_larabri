# Laravel Model/Controller

In this guide you can find all steps we covered live

## Laravel Installation

```bash

composer create-project laravel/laravel:^10.0 your_project_name_here
cd your_project_name_here
```

## Preset Installation

```bash
composer require pacificdev/laravel_9_preset
php artisan preset:ui bootstrap
npm install
```

Remember to rename the `vite.config.js` in `vite.config.cjs` then start the server

```bash
npm run dev
```

## Page Controller

Now create a page controller to handle the static pages

```bash
php artisan make:controller Guest/PageController
```

Now, after the controller is created we can add to its class a method to handle a HTTP request that comes from a route.

```php
// Guest/PageController.php

<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;


class PageController extends Controller
{
    /* Add a new method to the page controller 
    this method will hanle requests for the home page /
    */
    public function index()
    {
        return view('welcome');
    }
}

```

Now you can update the route as follows

```php
//web.php
Route::get('/', [PageController::class, 'index']);
```

In the code above we removed the closure and added an array where the first value is the name of out controller and the second value is the method's name that will handle the request.

> Remember to import your controller at the top of the file

```php
//web.php
use App\Http\Controllers\Guest\PageController;

```

## Add a layout file and extend it in your views

Now you can copy the content of the file `welcome.blade.php` inside `layouts/app.blade.php` and add the necessary yields and partials for the layout file.

```bash

cd your_project_name_here
cd resources/views
mkdir layouts
cp welcome.blade.php ./layouts/app.blade.php

```

Now update the layout file as follow

```php

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel @yield('page-title', 'Larabri')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    @include('partialts.header')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')



</body>

</html>
```

Make sure you create both partials for header and footer as follow

👉 Inside the views folder

```bash

mkdir partials
echo '<header>Header</header>'  > header.blade.php
echo '<footer>Footer</footer>'  > footer.blade.php
```

### Extend the layout

Now can extend our layout file inside multiple views as needed

```php
// welcome.blade.php
@extends('layouts.app')


@section('content')
<div class="container">
    <h1>Larabri Home Page</h1>
</div>
@endsection
```

Do the same for other views

## Create a model

Now let's create a new Book model and connect our application with the db

```php
php artisan make:model Book
```

next let's connect our application with our db

```php

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=5506
DB_DATABASE=119_larabri
DB_USERNAME=root
DB_PASSWORD=root
```

Update the above credentials using yours (check in MAMP for the `DB_PORT` number)
