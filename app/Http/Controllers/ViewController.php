<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function dashboardEcommerce() {
        return view('backend.dashboard.ecommerce');
    }

    public function dashboardIndex() {
        return view('backend.dashboard.index');
    }
}
