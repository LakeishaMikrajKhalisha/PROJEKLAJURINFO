<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class profilUtama extends Controller
{
    public function index() {
        return view('profilUtama');
    }
    public function index2() {
        return view('user_login.profilUtamaLogin');
    }
}
