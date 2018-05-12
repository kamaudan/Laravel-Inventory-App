<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wholesale;
use Session;

class WholeController extends Controller
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
    public function index()
    {
        $wholesales = Wholesale::all();
         return view('results.whole')->with('wholesales', $wholesales);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wholesale');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $wholesale = new Wholesale;
       $wholesale->Invoice=$request->input('invoice');
       $wholesale->Balances=$request->input('balances');
       $wholesale->size=$request->input('size');
       $wholesale->cash=$request->input('cash');
       $wholesale->serial= $request->input('serial');
       $wholesale->price= $request->input('price');
       $wholesale->branch =$request->input('branch');
       $wholesale->save();


       Session::flash('success', 'The details have been saved');


         return redirect('/card/create');


       }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
