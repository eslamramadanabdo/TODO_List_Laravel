<?php

namespace App\Http\Controllers;

use App\Model\TODO_List;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public  function addtask(){
        return view('todo.createNewTask');
    }




    public function savetask(Request $request){

        $validated = $request->validate([
            'task' => 'required|unique:todo_list|max:255|min:5',
        ]);

        $data = TODO_List::create([
            'task' => $request->task,
        ]);

        $data->save();
        return redirect()->back()->with('success' ,'Task Added successfly');
    }



    public function listdata(){
        $tasks = TODO_List::get();
        return view('todo.listTask' , ['tasks' => $tasks]);
    }

    public function deleteTask(Request $request , $taskID){

        $data = TODO_List::where('id' , $taskID);
        $data->delete();
        return redirect()->back()->with('success' ,'Task Deleted Successfly');

    }


    public function updateTask(Request $request , $taskID){

        $data = TODO_List::where('id' , $taskID);
        $task = $data-> get()->first();

        return view('todo.updateTask')->with(['task' => $task , 'id'=> $taskID ]);

    }

    public function saveupdateTask(Request $request , $taskID){

        $data = TODO_List::where('id' , $taskID);
        $task = $data-> get()->first();
        $task->update([
            'task' => $request->task,
        ]
        );
        return redirect()->back()->with('success' ,'Task updated Successfly');

    }
}


