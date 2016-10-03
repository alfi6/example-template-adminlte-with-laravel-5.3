<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Requests;

class DashboardController extends Controller
{
    public function index(){
    	return view('partials.index');
    }
    public function index2(){
    	return view('partials.index2');
    }
    
    public function widgets(){
    	return view('partials.widgets');
    }
    
    public function simple(){
    	return view('partials.table.simple');
    }
    public function data(){
    	return view('partials.table.data');
    }
    public function calender(){
    	return view('partials.calender');
    }
   
}
