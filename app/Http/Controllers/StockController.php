<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stocks;
use App\Models\Ingredients;

class StockController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Stocks $stocks)
    {
        $stocksTotal = Stocks::selectRaw('SUM(quantity) as quantity, ingredients_id')
        ->groupBy('ingredients_id')->orderBy('ingredients_id', 'asc')->get();
        $stocks = $stocks::all();
        // dd($stocksTotal);
        return view('stocks.index',compact('stocks','stocksTotal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingredients = Ingredients::all();
        return view('stocks.create', compact('ingredients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ingredients_id'=>'required|numeric|min:0|not_in:0',
            'quantity'=>'required|numeric|min:0|not_in:0'
        ]);

        $stock =  new Stocks(request(['ingredients_id','quantity']));
        $stock->save();

        return redirect()->action([StockController::class, 'index']);
    }

    /**
     * Show the form for reducing a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reduce()
    {
        $ingredients = Ingredients::all();
        return view('stocks.reduction', compact('ingredients'));
    }
    
    /**
     * reduce a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function reduction(Request $request)
    {
        $validatedData = $request->validate([
            'ingredients_id'=>'required|numeric|min:0|not_in:0',
            'quantity'=>'required|numeric|max:0|not_in:0'
        ]);

        $stock =  new Stocks(request(['ingredients_id','quantity']));
        $stock->save();

        return redirect()->action([StockController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
