<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RealisationsController extends Controller
{
    public function realisations(){
        return view('realisations/realisations');
    }
}
