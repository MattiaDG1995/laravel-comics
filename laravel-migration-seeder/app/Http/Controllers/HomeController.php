<?php

namespace App\Http\Controllers;
use App\models\Train;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $all_trains = Train::all();

        return view('welcome', compact('all_trains'));
    }
}
