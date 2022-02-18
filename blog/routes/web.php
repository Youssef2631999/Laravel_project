<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/posts', function () {
    $posts=[
    [    "id"=> 1,
        "name"=> "Youssef",
        "body"=> "hi youssef",
        "title"=> "title youssef"
    ],
    [
        "id"=> 2,
        "name"=> "Lina",
        "body"=> "hi lina",
        "title"=> "title lina"
    ],
    [
        "id"=> 3,
        "name"=> "Ali",
        "body"=> "hi ali",
        "title"=> "title ali"
    ],
    [
        "id"=> 4,
        "name"=> "Mahmoud",
        "body"=> "hi mahmoud",
        "title"=> "title mahmoud"
    ],
    ];
    
    return view ('posts.index',['posts'=>$posts]);
});

Route::get('/show/{id}',function($id){
   $post = ["id"=> $id,
    "name"=> "Mahmoud",
    "body"=> "hi mahmoud",
    "title"=> "title mahmoud"
];
    return view('posts.show',$post);
})->where('id','[0-9]+');

Route::get('/edit/{id}',function($id){
    $post = ["id"=> $id,
    "name"=> "Mahmoud",
    "body"=> "hi mahmoud",
    "title"=> "title mahmoud"
];
return view('posts.edit',$post);
})->where('id','[0-9]+');

Route::post('update',function(){
    return "Update";
});

Route::get('/create',function(){
    return view('posts.create');
});

Route::post('/store',function(){
    return "Store";
});