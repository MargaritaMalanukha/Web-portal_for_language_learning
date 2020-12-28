<?php

namespace App\Http\Controllers;

use App\Models\Language_level;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        return view('testing_subsystem.test_stage_1');
    }

    public function test_stage_1(Request $request){
        $user = User::findById($request->session()->get('id'));
        $userLevel = Language_level::all()->where('id', $user->level)->first();
        $availableLevels = Language_level::all()->where('numericValue', '>',  $userLevel->numericValue)->toArray();
        return view('testing_subsystem.test_stage_1')->with('userLevel', $userLevel)->with('availableLevels', $availableLevels);
    }

    public function test_stage_2(){
        return view('testing_subsystem.test_stage_2');
    }

    public function test_stage_3(){
        return view('testing_subsystem.test_stage_3');
    }
}
