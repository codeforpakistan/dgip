<?php

namespace App\Http\Controllers\Admin\Passport;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\RegionalOffice;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $items = RegionalOffice::select('*');

        if ($request->has('region')) $items->where('region', $request->query('region'));

        return view('admin.index', [
            'items' => $items->paginate(),
            'regions' => RegionalOffice::select('region')->distinct()->get()->pluck('region')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.regional_office_form');
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
            'city'      => 'required',
            'region'    => 'required',
            'address'   => 'required',
            'phone'     => 'required',
        ]);

        $visa = new RegionalOffice;
        $visa->city     = $valid['city'];
        $visa->region   = $valid['region'];
        $visa->address  = $valid['address'];
        $visa->phone    = $valid['phone'];
        $visa->save();

        return redirect()->route('admin.index');
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
        return view('admin.regional_office_form', [
            'item' => RegionalOffice::findOrFail($id)
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
            'city'      => 'required',
            'region'    => 'required',
            'address'   => 'required',
            'phone'     => 'required',
        ]);

        $visa = RegionalOffice::findOrFail($id);
        $visa->city     = $valid['city'];
        $visa->region   = $valid['region'];
        $visa->address  = $valid['address'];
        $visa->phone    = $valid['phone'];
        $visa->save();

        return redirect()->route('admin.regional_offices.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        RegionalOffice::findOrFail($id)->delete();

        return redirect()->route('admin.regional_offices.index');
    }
}
