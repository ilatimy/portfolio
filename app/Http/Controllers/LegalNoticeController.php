<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegalNoticeController extends Controller
{
    public function mentions(){
        return view('legalnotice/legalnotice');
    }
}
