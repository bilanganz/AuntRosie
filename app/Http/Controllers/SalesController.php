<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sales;
use App\Models\Inventory;
use App\Models\Customers;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Sales $sales)
    {
        $sales = $sales::with('inventory.recipes')->get();
        return view('sales.index',compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inventories = Inventory::where('quantity', '>', 0)->get();
        $customers = Customers::all();
        return view('sales.create', compact('inventories','customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'customers_id' => 'required|numeric|min:0|not_in:0',
            'sales_date' => 'required|date',
            'inventories' => 'required',
            'quantity' => 'required'
        ]);

        $sale = new Sales(request(['customers_id','sales_date']));
        $sale->save();

        $inventories = $request->inventories;
        $quantity = $request->quantity;
        $size = count(collect($request)->get('inventories'));

        for ($i = 0; $i < $size; $i++)
        {
            $sale->inventory()->attach($inventories[$i], ['quantity' => $quantity[$i]]);
            Inventory::where('id', $inventories[$i])->decrement('quantity', $quantity[$i]);
        }

        return redirect()->action([SalesController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sale = Sales::find($id);
        // dd($sale);
        
        return view('sales.show', compact(['sale']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
