<?php

namespace App\Http\Controllers;

use App\Models\administration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        return view('Admin.indexA');
    }
}
