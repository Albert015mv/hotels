<?php

namespace App\Http\Controllers;

use App\Models\hotels;
use Illuminate\Http\Request;

class adminHotelsController extends Controller
{
    public function index(){
        return view('AdminHotels.index');
    }
}
