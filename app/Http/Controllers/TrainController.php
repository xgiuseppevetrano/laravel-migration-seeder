<?php

namespace App\Http\Controllers;
use App\Train;

use Illuminate\Http\Request;

class TrainController extends Controller
{
   public function index() {
    $trains = Train::all();

    dd($trains);
   }
}
