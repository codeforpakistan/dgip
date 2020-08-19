<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Officer;

class OfficerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Officer::select('*');
        return view('admin.index', [
            'items' => $items->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.officer_form');
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
            'name'  => 'required',
            'title' => 'required',
            'photo' => 'required|image'
        ]);

        $path = $request->file('photo')->store('public');

        $officer = new Officer;
        $officer->title = $valid['title'];
        $officer->name = $valid['name'];
        $officer->photo = $path;
        $officer->save();

        return redirect()->route('admin.officers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Officer  $officer
     * @return \Illuminate\Http\Response
     */
    public function show(Officer $officer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Officer  $officer
     * @return \Illuminate\Http\Response
     */
    public function edit(Officer $officer)
    {
        return view('admin.officer_form', [
            'item' => $officer
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Officer  $officer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Officer $officer)
    {
        $valid = $request->validate([
            'name'  => 'required',
            'title' => 'required',
            'photo' => 'required|image'
        ]);

        $path = $request->file('photo')->store('public');

        $officer->title = $valid['title'];
        $officer->name = $valid['name'];
        $officer->photo = $path;
        $officer->save();

        return redirect()->route('admin.officers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Officer  $officer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Officer $officer)
    {
        Officer::findOrFail($officer->id)->delete();

        return redirect()->route('admin.officers.index');
    }
}
