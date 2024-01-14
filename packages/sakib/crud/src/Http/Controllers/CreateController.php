<?php

namespace Sakib\Crud\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Sakib\Crud\Models\FormData;

class CreateController extends Controller
{
    public function create()
    {
        return view("sakib-crud::todos.createTask.index");
    }

    public function createNewTask(Request $request)
    {
        // dd($request->all());
        $request->validate(
            [
                'taskTitle' => 'required|max:20',
                'taskDescription' => 'required|max:300'
            ]
        );

        // $newFileName = time() . '-' . $request->taskFile->getClientOriginalName();

        // $request->taskFile->move(public_path('files'), $newFileName);


        $formData = new FormData;
        $formData->task_title = $request['taskTitle'];
        $formData->task_description = $request['taskDescription'];
        $formData->task_startDate = $request['taskStartDate'];
        $formData->task_deadline = $request['taskDeadline'];
        $formData->select_maping = $request['selectMaping'];
        $formData->select_priority = $request['selectPriority'];
        $formData->select_user = $request['selectUser'];
        $formData->task_remarks = $request['taskRemarks'];
        $formData->task_links = $request['taskLinks'];
        // $formData->task_file = $newFileName;
        $formData->save();
        return redirect(route('homePage'));
    }
}
