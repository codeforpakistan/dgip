<?php

namespace App\Http\Controllers\Admin\Visa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\VisaCategory;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index', [
            'items' => VisaCategory::paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.visa_category_form');
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
            'slug'  => 'required',
            'summary'   => 'required',
            'body'      => 'required'
        ]);

        $visa = new VisaCategory;
        $visa->name = $valid['name'];
        $visa->slug = $valid['slug'];
        $visa->summary = $valid['summary'];
        $visa->body = $valid['body'];
        $visa->save();

        return redirect()->route('admin.visa_categories.index');
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
        return view('admin.visa_category_form', [
            'item' => VisaCategory::findOrFail($id)
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
            'name'  => 'required',
            'slug'  => 'required',
            'summary'   => 'required',
            'body'      => 'required'
        ]);

        $visa = VisaCategory::findOrFail($id);
        $visa->name = $valid['name'];
        $visa->slug = $valid['slug'];
        $visa->summary = $valid['summary'];
        $visa->body = $valid['body'];
        $visa->save();

        return redirect()->route('admin.visa_categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        VisaCategory::findOrFail($id)->delete();

        return redirect()->route('admin.visa_categories.index');
    }
}
