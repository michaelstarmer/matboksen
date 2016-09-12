<?php
namespace Matboksen\Http\Controllers;

use Auth;
use Matboksen\Models\Recipe;
use Matboksen\Models\Task;
use Illuminate\Http\Request;
use Validator;

class TaskController extends Controller
{
    public function getTask() 
    {
        $tasks = Task::orderBy('created_at', 'asc')->get();

        return view('shoplist.index', [
            'tasks' => $tasks,
        ]);

    }

    public function postTask(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);
        
        if($validator->fails()) {
            return redirect('/handleliste')
                ->withInput()
                ->withErrors($validator);
        }
        $task = new Task;
        $task->name = $request->name;
        $task->save();

/*        Task::create([
            'name' => $request->name;
        ]);
*/
        
        return redirect('/handleliste');
    }
}