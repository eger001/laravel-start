<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use \Illuminate\Http\Request;
use App\Models\Task;

Route::get('/', function () {
    return view('welcome');
});

#show all tasks
Route::get('/task', function () {
    $tasks = Task::all();
    return view('tasks.index', [
        'tasks'=>$tasks,
    ]);
})->name('task.index');

#create task form
Route::get('/task/create', function () {
    return view('tasks.create');
})->name('task.create');

#store new task
Route::post('/task', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name'=>'required|max:255',
    ]);
    #check fails during validation
    if ($validator->fails()) {
        return redirect()
            ->route('task.create')
            ->withInput()
            ->withErrors($validator);
    }

    #create new row in table tasks
    $task = new Task();
    $task->name =$request->name;
    $task->save();

    return redirect()->route('task.index');
})->name('task.store');
