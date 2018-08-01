<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        $users = User::all();
        return view('home',compact('tasks','users'));
    }

    public function addTask(Request $request) {

        $this->validate($request,[
            'name'=>'required|min:3|max:100',
            'description'=>'required',
            'assign'=>'required|integer'
        ]);

        $input = $request->all();

        //assign default status(assigned)
        $input['status'] = 0;
        $input['user_id'] = auth()->user()->id;
        Task::create($input);

        return redirect()->back();
    }


    //edit task
    public function editTask(Request $request,$id) {
        $task = Task::findOrFail($id);

        $this->validate($request,[
            'name'=>'required|min:3|max:100',
            'description'=>'required',
            'status'=>'required|integer',
            'assign'=>'required|integer'
        ]);

        $task->update($request->all());
        return redirect('/home');
    }


    //delete task
    public function deleteTask($id) {
       $task = Task::find($id);
       $task->delete();
       return redirect()->back();
    }

}
