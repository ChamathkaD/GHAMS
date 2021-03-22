<?php

namespace App\Http\Controllers;

use App\Contractor;
use Illuminate\Http\Request;

class ContractorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        if (request()->contractors == 'deleted'){
            $contractors = Contractor::onlyTrashed()->get();
        } else{
            $contractors = Contractor::all();
        }

        return  view('contractor.index')->with(compact('contractors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
       return view('contractor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $contractor = new Contractor();
        $contractor->reference_code = $request->input('reference_code');
        $contractor->start_date = $request->input('start_date');
        $contractor->contractor_no = $request->input('contractor_no');
        $contractor->end_date = $request->input('end_date');
        $contractor->contractor_name = $request->input('contractor_name');
        $contractor->type = $request->input('type');
        $contractor->contractor_value = $request->input('contractor_value');
        $contractor->save();
        return back()->with('success', 'Contract Create Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contractor  $contractor
     * @return \Illuminate\Http\Response
     */
    public function show(Contractor $contractor)
    {
       return view('contractor.show')->with(compact('contractor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit(Contractor $contractor)
    {
        return view('contractor.edit')->with(compact('contractor'));
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, Contractor $contractor)
    {
        Contractor::where('id', $contractor->id)->Update([
            'reference_code' => $request->input('reference_code'),
            'start_date' => $request->input('start_date'),
            'contractor_no' => $request->input('contractor_no'),
            'end_date' => $request->input('end_date'),
            'contractor_name' => $request->input('contractor_name'),
            'type' => $request->input('type'),

        ]);

        return redirect()->route('contractor.index')->with('success','contractor Updated');
    }



    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(Contractor $contractor)
    {
        $contractor->delete();
        return redirect()->route('contractor.index')->with('success','contractor Deleted');
    }

    public function restore($id){
        Contractor::onlyTrashed()->where('id', $id)->restore();
        return redirect()->route('contractor.index')->with('success','contractor Restored');

    }

    public function forceDelete($id){
        Contractor::onlyTrashed()->where('id', $id)->forceDelete();
        return redirect()->back()->with('success','contractor Deleted');
    }
}
