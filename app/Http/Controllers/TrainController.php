<?php

namespace App\Http\Controllers;
use App\Train;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        $trains = Train::where('departure_date', date('Y-m-d'))->get();

        return view('home', compact('trains'));
    }
}