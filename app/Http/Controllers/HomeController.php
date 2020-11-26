<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $monthlySale = DB::select('select year(sales_date),month(sales_date),count(id)
        from sales
        group by year(sales_date),month(sales_date)
        order by year(sales_date),month(sales_date);');
        return view('home', compact('monthlySale'));
    }
}
