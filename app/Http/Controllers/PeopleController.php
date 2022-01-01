<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeopleController extends Controller
{
    //
    public function index()
    {
        $temperatures = DB::select('select * from abcde');
        $data = ['msg' => '本一覧', 'temperatures' => $temperatures];
        return view('people.index', $data);
    }
}
