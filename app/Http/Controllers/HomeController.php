<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;
use App\role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = customer::find(1)->roles;
        $customer = role::find(1)->customers;
        
        // return $role;
        return view('home',compact('role'),compact('customer'));
    }
}
















