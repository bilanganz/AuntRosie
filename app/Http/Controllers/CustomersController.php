<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class CustomersController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Customers $customers)
    {
        $customers = $customers::all();
        return view('customers.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
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
            'firstName' => 'required|max:255',
            'lastName' => 'required|max:255',
            'DOB' => 'required|date',
            'email' => 'required|email|max:255',
            'phoneNumber' => 'required|regex:/(01)[0-9]{9}/'
        ]);

        $customer = new customers(request(['firstName','lastName','DOB','email','phoneNumber']));
        $customer->save();  

        return redirect()->action([CustomersController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customers::find($id);

        return view('customers.show', compact(['customer']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customers::find($id);

        return view('customers.edit', compact(['customer']));
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
        $customer = Customers::find($id);

        $validatedData = $request->validate([
            'firstName' => 'required|max:255',
            'lastName' => 'required|max:255',
            'DOB' => 'required|date',
            'email' => 'required|email|max:255',
            'phoneNumber' => 'required|regex:/(01)[0-9]{9}/'
        ]);

        $customer->firstName = $request->input('firstName');
        $customer->lastName = $request->input('lastName');
        $customer->DOB = $request->input('DOB');
        $customer->email = $request->input('email');
        $customer->phoneNumber = $request->input('phoneNumber');

        $customer->save();

        return redirect()->action([CustomersController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // DELETE MEDICAL CONDITIONS
        $customer = Customer::find($id);
        $customer->delete();

        return redirect()->action([CustomersController::class, 'index']);
    }
}
