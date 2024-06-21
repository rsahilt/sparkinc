<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(){
        $title = "Spark Inc";
        return view('frontend.index', compact('title'));
    }
}
