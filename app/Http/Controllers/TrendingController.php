<?php

namespace App\Http\Controllers;

use App\Models\Amelia;
use Illuminate\Http\Request;

class TrendingController extends Controller
{
    public function trending(){
        $data = Amelia::all();
        // dd($data);
        return view('trending.index', compact('data'));
    }
}
