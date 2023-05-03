<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index() 
    {
        dd('test');
        // Eloquent
        $values = Test::all();
        // dd($values);

        $count = Test::count();

        $first = Test::findOrFail(1);

        $where = Test::where('test', '=', 'text')->get();

        // クエリビルダ
        $query = DB::table('tests')->where('test', '=', 'text')
        ->select('id', 'test')
        ->get();

        dd($values, $count, $first, $where, $query);

        return view('tests.test', compact('values'));
    }
}