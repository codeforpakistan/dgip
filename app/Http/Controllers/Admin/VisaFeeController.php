<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\VisaFee;

class VisaFeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index', [
            'items' => VisaFee::paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.visa_fee_form', [
            'categories' => \App\VisaCategory::all(),
            'countries' => \App\Country::all(),
            'types' => ['Entry', 'Extension'],
            'entries' => ['Single', 'Multiple'],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'country'   => 'required',
            'category'  => 'required',
            'entry'     => 'required',
            'type'      => 'required',
            'fee'       => 'required',
        ]);

        $visa = new VisaFee;
        $visa->country  = $valid['country'];
        $visa->category = $valid['category'];
        $visa->entry    = $valid['entry'];
        $visa->type     = $valid['type'];
        $visa->fee      = $valid['fee'];
        $visa->save();

        return redirect()->route('admin.visa_fees.index');
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
        return view('admin.visa_fee_form', [
            'item' => VisaFee::findOrFail($id),
            'categories' => \App\VisaCategory::all(),
            'countries' => \App\Country::all(),
            'types' => ['Entry', 'Extension'],
            'entries' => ['Single', 'Multiple'],
        ]);
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
        $valid = $request->validate([
            'country'   => 'required',
            'category'  => 'required',
            'entry'     => 'required',
            'type'      => 'required',
            'fee'       => 'required',
        ]);

        $visa = VisaFee::findOrFail($id);
        $visa->country  = $valid['country'];
        $visa->category = $valid['category'];
        $visa->entry    = $valid['entry'];
        $visa->type     = $valid['type'];
        $visa->fee      = $valid['fee'];
        $visa->save();

        return redirect()->route('admin.visa_fees.index');
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
