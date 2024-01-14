<?php

namespace Sakib\Crud\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Sakib\Crud\Models\FormData;

class HomeController extends Controller
{
    public function home()
    {
        $tasks = FormData::all();
        $data = compact('tasks');

        // return $tasks;
        return view("sakib-crud::todos.home.index")->with($data);
    }
}
