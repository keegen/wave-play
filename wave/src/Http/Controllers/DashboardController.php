<?php

namespace Wave\Http\Controllers;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
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
        return view('theme::dashboard.index');
    }
    public function inventory()
    {
        return view('theme::dashboard.inventory');
    }
    public function siteinfo()
    {
        return view('theme::dashboard.siteinfo');
    }
    public function sitetheme()
    {
        return view('theme::dashboard.theme');
    }
}
