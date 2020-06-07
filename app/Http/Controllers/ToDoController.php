<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ToDo;

class ToDoController extends Controller
{
    public function firstFunction(){
        $todoData = [
            [
                "id" => 1,
                "title" => "Learn Laravel",
                "completed" => 1,
            ],
            [
                "id" => 2,
                "title" => "Use it to make a project",
                "completed" => 0,
            ]
        ];
        return $todoData;
    }

    public function index(){
        $todoData = [
            [
                "id" => 1,
                "title" => "Learn Laravel",
                "completed" => 1,
            ],
            [
                "id" => 2,
                "title" => "Use it to make a project",
                "completed" => 0,
            ]
        ];
        $todoData = ToDo::all();
        return view("toDo")
            ->with(compact("todoData"));
    }

    public function create(){
//        return ToDo::where("id", 2)->first();
//        return ToDo::find(2);
        $title = request()->get("title");

        //Method 1 to create
//        $todoItem = new ToDo();
//        $todoItem->title = $title;
//        $todoItem->save();

        //Method 2 to create
//        $todoItem = ToDo::create([
//           "title" => $title
//        ]);

        //Method 3 to create
        $todoData = ToDo::create(request()->all());

        return redirect("/");

//        return ToDo::all();
        //Create a new Todo Item with given title
    }

    public function toggle(ToDo $todo){
//        $todo = ToDo::find($id);
//        $todo->completed = !$todo->completed;
//        $todo->save();
        $todo->update([
            "completed" => !$todo->completed
        ]);
        return redirect("/");
        return $todo;
        return $id;
    }

    public function delete(Todo $todo){
        $todo->delete();
        return redirect("/");
    }
}
