<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function index() {
        return view('web/index', ['user' => Auth::user()]);
    }
}
