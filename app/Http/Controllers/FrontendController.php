<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Location;
use App\Models\Menu;
use App\Models\Package;



class FrontendController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function menu() {
        return view('menu');
    }

    public function detail($id){
        $menu = Menu::where('id_category',$id)->get();
        return view('detail')->with(['menu' => $menu]);
    }
}
