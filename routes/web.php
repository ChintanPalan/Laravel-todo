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

//Route::get('/', function () {
//    //Get data form database
//    $todoData = [
//        [
//            "id" => 1,
//            "title" => "Learn Laravel",
//            "completed" => 1,
//        ],
//        [
//            "id" => 2,
//            "title" => "Use it to make a project",
//            "completed" => 0,
//        ]
//    ];
//    $title_new_asjkdh = "New Title";
//    $title_new = "New Title same name";
//    return view('welcome', [
//        "title" => "Variable from Route",
//    ])
////        ->with("title_new", $title_new_asjkdh);
//        ->with(compact([
//            "title_new"
//        ]));
//});


Route::get("/about", function(){
    print_r([
        "Abc", "DEF"
    ]);
});

Route::get("/from-contoller", "ToDoController@firstFunction");
Route::get("/", "ToDoController@index");
Route::get("/todo/create", "ToDoController@create");
Route::get("/todo/{todo}/toggle", "ToDoController@toggle");
Route::get("/todo/{todo}/delete", "ToDoController@delete");

/*
 * Route::[method]("path of route", "Execution Logic")
 *
 * */
