<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class ApiTaskController extends Controller
{
    public function index()
    {
        $datas = Task::orderBy('created_at', 'ASC')->get();

       $datas = json_encode($datas,JSON_PRETTY_PRINT);
       echo $datas;
    }
}
