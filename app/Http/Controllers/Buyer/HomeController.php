<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/buyer/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('buyer.auth:buyer');
    }

    /**
     * Show the Buyer dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('buyer.home');
    }

}