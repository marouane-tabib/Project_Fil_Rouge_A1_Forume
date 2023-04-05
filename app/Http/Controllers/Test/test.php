<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class test extends Controller
{
  public function index(){
    return view('content.pages.pages-test');
  }
}
