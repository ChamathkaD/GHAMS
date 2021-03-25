<?php

namespace App\Http\Controllers;

use App\Manufacture;
use Illuminate\Http\Request;

class ManufactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        if (request()->manufactures == 'deleted'){
            $manufactures = Manufacture::onlyTrashed()->get();
        } else{
            $manufactures = Manufacture::all();
        }



        return view('manufactures.index')->with(compact('manufactures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('manufactures.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $manufacture = new Manufacture();
        $manufacture->manufacture_code = $request->input('manufacture_code');
        $manufacture->country = $request->input('country');
        $manufacture->manufacture_name = $request->input('manufacture_name');
        $manufacture->zip = $request->input('zip');
        $manufacture->contact_person = $request->input('contact_person');
        $manufacture->phone = $request->input('phone');
        $manufacture->address = $request->input('address');
        $manufacture->fax = $request->input('fax');
        $manufacture->city = $request->input('city');
        $manufacture->email = $request->input('email');
        $manufacture->state = $request->input('state');

        $manufacture->save();

        return back()->with('success','Manufactures Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     */
    public function show(Manufacture $manufacture)
    {
        return view('manufactures.show')->with(compact('manufacture'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit(Manufacture $manufacture)
    {
      return view('manufactures.edit')->with(compact('manufacture'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Manufacture  $manufacture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manufacture $manufacture)
    {
        $manufacture->manufacture_code = $request->input('manufacture_code');
        $manufacture->country = $request->input('country');
        $manufacture->manufacture_name = $request->input('manufacture_name');
        $manufacture->zip = $request->input('zip');
        $manufacture->contact_person = $request->input('contact_person');
        $manufacture->phone = $request->input('phone');
        $manufacture->address = $request->input('address');
        $manufacture->fax = $request->input('fax');
        $manufacture->city = $request->input('city');
        $manufacture->email = $request->input('email');
        $manufacture->state = $request->input('state');
        $manufacture->save();

        return redirect()->route('manufacture.index')->with('success','Manufacture Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Manufacture  $manufacture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manufacture $manufacture)
    {
        $manufacture->delete();
        return redirect()->route('manufacture.index')->with('success','Manufacture Restored');
    }

    public function restore($id){
        Manufacture::onlyTrashed()->where('id', $id)->restore();
        return redirect()->route('manufacture.index')->with('success','Manufacture Deleted');
    }

    public function forceDelete($id){
        Manufacture::onlyTrashed()->where('id', $id)->forceDelete();
        return redirect()->route('manufacture.index')->with('success','Manufacture Deleted');

    }

}
