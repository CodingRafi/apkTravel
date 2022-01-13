<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $berita = DB::table('beritas')
        ->orderBy('updated_at', 'desc')
        ->get();
        return view("home",['berita'=>$berita]);
    }
}
