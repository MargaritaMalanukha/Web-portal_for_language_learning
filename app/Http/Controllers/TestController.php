<?php

namespace App\Http\Controllers;

use App\Models\Language_level;
use App\Models\TestGenerator;
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

    public function test_stage_2(Request $request){
        $user = User::findById($request->session()->get('id'));
        $userLevel = Language_level::all()->where('id', $user->level)->first();

        $startingLevel = Language_level::all()->where('numericValue', ($userLevel->numericValue)+1)->first();
        $choosedLevel = Language_level::all()->where('id', $request->post('choosedLevelID'))->first();

        $questionArray = TestGenerator::generateTest($startingLevel, $choosedLevel, 3);
        return view('testing_subsystem.test_stage_2')->with("questionArray", $questionArray);
    }

    public function test_stage_3(){
        return view('testing_subsystem.test_stage_3');
    }
}
