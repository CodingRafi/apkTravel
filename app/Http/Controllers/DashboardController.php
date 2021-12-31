<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index(){
        return view("dashboard.dashboard", [
            "categories" => Category::all(),
            "title" => "Dashboard"
        ]);
    }
}
