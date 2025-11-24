<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    Bookcontroller,
    Commentcontroller,
    Itemcontroller,
    Servicescontroller,
    Usercontroller,
};




Route::resources([
    'books' => Bookcontroller::class,
    'comments' => Commentcontroller::class,
    'items' => Itemcontroller::class,
    'services' => Servicescontroller::class,
    'users' => Usercontroller::class,

]

);

