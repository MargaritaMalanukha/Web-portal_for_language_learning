<?php

namespace App\Http\Controllers;

use App\Models\Auth\Authorization;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        return view('testing_subsystem.test_Stage1');
    }
}
