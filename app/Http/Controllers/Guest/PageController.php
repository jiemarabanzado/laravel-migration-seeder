<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PageController extends Controller
{
    public function index(){ 
        $trains = Train::where("trip_day", ">=", "2023-01-17")
                        ->get();

        return view("homepage", compact("trains"));
    }
}
