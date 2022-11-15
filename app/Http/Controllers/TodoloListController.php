<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todoList;

class TodoloListController extends Controller
{
    function index(){
        return view('welcome', ['list' => todoList::all()]);
    }

    function saveTodo(Request $req){
        
        $todoObj = new todoList();
        $todoObj->title = $req->todo;
        $todoObj->save();
        return redirect('/');

    }
    
    function edit($id){
        $data = todoList::find($id);
        return view('editTodo',['eutadata' => $data]);
    }

    function updateTodo(Request $req){
        
        $todoObj = todoList::find($req->id);
        $todoObj->title = $req->todo;
        $todoObj->save();
        return redirect('/');

    }

    function delete($id){
        $data = todoList::find($id);
        $data->delete();
        return redirect('/');
    }

    
}
