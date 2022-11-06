<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        return view('backend.dashboard');
    }
    public function logout(){
        Auth::logout();
        Toastr::success('logout sucess');
        return redirect()->route('home');
    }
}
