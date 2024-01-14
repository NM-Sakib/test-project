<?php

namespace Sakib\Crud\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Sakib\Crud\Models\FormData;

class DetailsController extends Controller
{
    public function details($id){
        $task = FormData::find($id);
        $data = compact('task');
        return view("sakib-crud::todos.detailsTask.index")->with($data);
    }
}
