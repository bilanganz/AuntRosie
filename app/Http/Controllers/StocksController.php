<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stocks;

class StocksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Stocks $stocks)
    {
        $stocks = $stocks::all();
        return view('stocks.index',compact('stocks'));
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
            'ingredient_id'=>'required|numeric|min:0|not_in:0',
            'quantity'=>'required|numeric|min:0|not_in:0'
        ]);

        $stock =  new Stocks(request(['ingredient_id','quantity']));
        $stock->save();

        return redirect()->action([StocksController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stock = Stocks::find($id);

        return view('stocks.show', compact(['stock']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stock = Stocks::find($id);
        $ingredients = Ingredients::all();

        return view('stocks.show', compact(['stock','ingredients']));
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
        $stock = Stocks::find($id);

        $validatedData = $request->validate([
            'ingredient_id'=>'required|numeric|min:0|not_in:0',
            'quantity'=>'required|numeric|min:0|not_in:0'
        ]);

        $stock->ingredient_id = $request->input('ingredient_id');
        $stock->quantity = $request->input('quantity');

        $stock->save();

        return redirect()->action([StocksController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stock = Stocks::find($id);
        $stock->delete();

        return redirect()->action([StocksController::class, 'index']);
    }
}
