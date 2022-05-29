<?php

namespace App\Http\Controllers;

use App\Models\SalesRepresentative;
use Illuminate\Http\Request;

class SalesRepresentativeController extends  ParentController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['salesReps'] = SalesRepresentative::all();
        return view('pages.SalesRepresentatives.index')->with($response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.SalesRepresentatives.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        SalesRepresentative::create($request->all());
        return redirect()->route('sales_reps.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['rep'] = SalesRepresentative::find($id);
        return view('pages.SalesRepresentatives.view')->with($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['rep'] = SalesRepresentative::find($id);
        return view('pages.SalesRepresentatives.edit')->with($response);
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
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);
        $rep = SalesRepresentative::find($id);
        if ($rep) {
            $rep->update($request->all());
            return redirect()->route('sales_reps.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $rep = SalesRepresentative::find($id);
        $rep->delete();
        return redirect()->route('sales_reps.index');
    }
}
