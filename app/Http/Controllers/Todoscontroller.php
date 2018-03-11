<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todolist;

class Todoscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = todolist::all();
        //$todos = Todo::orderBy('created_at', 'desc')->get();
        
      return view('dashboard')->with('todos', $todos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'text'=>'required'
        ]);
            
            //Create our todo
            
            $todo = new todolist;
        $todo->text = $request->input('text');
        $todo->body = $request->input('body');
        $todo->due = $request->input('due');
        $todo-> save();
        
        return redirect('/')->with('success','Todo Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todo = todolist::find($id);
        //$todos = Todo::orderBy('created_at', 'desc')->get();
        
      return view('show')->with('todo', $todo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $todo = todolist::find($id);
        
         return view('edit')->with('todo', $todo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $todo = todolist::find($id);
        $todo->text = $request->input('text');
        $todo->body = $request->input('body');
        $todo->due = $request->input('due');
        $todo-> save();
        
        return redirect('/')->with('success','Todo Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $todo = todolist::find($id);
        $todo->delete();
        
         return redirect('/')->with('success','Todo Deleted');
    }
}
