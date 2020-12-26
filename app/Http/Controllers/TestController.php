<?php

namespace App\Http\Controllers;

use App\Models\Auth\Authorization;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request) {
        if (!Authorization::is_authenticated($request)) return redirect('/login');

        return view('tests');
    }
}
