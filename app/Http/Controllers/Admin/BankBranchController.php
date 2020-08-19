<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BankBranch;

class BankBranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $items = BankBranch::select('*');

        if ($request->has('region')) $items->where('region', $request->query('region'));
        
        return view('admin.index', [
            'items' => $items->paginate(),
            'regions' => BankBranch::select('region')->distinct()->get()->pluck('region')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bank_branch_form');
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
            'name' => 'required',
            'city' => 'required',
            'region' => 'required',
            'code' => 'required',
        ]);

        $branch = new BankBranch;
        $branch->name = $valid['name'];
        $branch->city = $valid['city'];
        $branch->region = $valid['region'];
        $branch->code = $valid['code'];
        $branch->save();

        return redirect()->route('admin.bank_branches.index');
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
        return view('admin.bank_branch_form', [
            'item' => BankBranch::findOrFail($id)
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
            'name' => 'required',
            'city' => 'required',
            'region' => 'required',
            'code' => 'required',
        ]);

        $branch = BankBranch::findOrFail($id);
        $branch->name = $valid['name'];
        $branch->city = $valid['city'];
        $branch->region = $valid['region'];
        $branch->code = $valid['code'];
        $branch->save();

        return redirect()->route('admin.bank_branches.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BankBranch::findOrFail($id)->delete();

        return redirect()->route('admin.bank_branches.index');
    }
}
