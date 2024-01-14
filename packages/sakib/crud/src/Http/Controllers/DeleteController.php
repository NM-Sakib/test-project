<?php

namespace Sakib\Crud\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Sakib\Crud\Models\FormData;

class DeleteController extends Controller
{
    public function delete($id){
        FormData::find($id)->delete();
        return redirect(route('homePage'));
    }
}
