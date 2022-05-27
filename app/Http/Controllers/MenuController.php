<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Category;


class MenuController extends Controller
{

  public function menu(){
    $menus = Category::with('subcategories')->get();
    
    return view('index',compact('menus'));
  }



}


