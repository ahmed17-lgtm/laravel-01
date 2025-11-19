<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/about',function(){
    return view('about');
});

route::get('/contact',function(){
    return view('contact');

});

route::get('/services',function(){
    return view('services');
});

route::get('/portfolio',function(){
    return view('portfolio');
});

route::get('/blog',function(){
    return view('blog');
});

route::get('/faq',function(){
    return view('faq');
});

route::get('/reports/annual',function(){
    return view('/reports/annual');
});

route::get('/reports/monthly',function(){
    return view('/reports/monthly');
});

