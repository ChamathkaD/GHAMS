<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveVendorRequest;
use App\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->vendors == 'deleted'){
            $vendors = Vendor::onlyTrashed()->get();
        } else{
            $vendors = Vendor::all();
        }

        return view('vendors.index')->with(compact('vendors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveVendorRequest $saveVendorRequest)
    {
        $vendor = new Vendor();
        $vendor->vendor_code = $saveVendorRequest->input('vendor_code');
        $vendor->zip = $saveVendorRequest->input('zip');
        $vendor->supplier_name = $saveVendorRequest->input('supplier_name');
        $vendor->country = $saveVendorRequest->input('country');
        $vendor->contact_person = $saveVendorRequest->input('contact_person');
        $vendor->phone = $saveVendorRequest->input('phone');
        $vendor->address = $saveVendorRequest->input('address');
        $vendor->fax = $saveVendorRequest->input('fax');
        $vendor->city = $saveVendorRequest->input('city');
        $vendor->email = $saveVendorRequest->input('email');
        $vendor->state = $saveVendorRequest->input('state');
        $vendor->save();
        return back()->with('success','Vendor Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function show(Vendor $vendor)
    {
        return view('vendors.show')->with(compact('vendor'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendor $vendor)
    {
        return view('vendors.edit')->with(compact('vendor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(SaveVendorRequest $saveVendorRequest, Vendor $vendor)
    {
        $vendor->vendor_code = $saveVendorRequest->input('vendor_code');
        $vendor->zip = $saveVendorRequest->input('zip');
        $vendor->supplier_name = $saveVendorRequest->input('supplier_name');
        $vendor->country = $saveVendorRequest->input('country');
        $vendor->contact_person = $saveVendorRequest->input('contact_person');
        $vendor->phone = $saveVendorRequest->input('phone');
        $vendor->address = $saveVendorRequest->input('address');
        $vendor->fax = $saveVendorRequest->input('fax');
        $vendor->city = $saveVendorRequest->input('city');
        $vendor->email = $saveVendorRequest->input('email');
        $vendor->state = $saveVendorRequest->input('state');
        $vendor->save();

        return redirect()->route('vendor.index')->with('success','vendor Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(Vendor $vendor)
    {
        $vendor->delete();
        return redirect()->route('vendor.index')->with('success','Vendor Deleted');
    }

    public function restore($id){
        Vendor::onlyTrashed()->where('id', $id)->restore();
        return redirect()->route('vendor.index')->with('success','Vendor Restored');
    }

    public function forceDelete($id){
        Vendor::onlyTrashed()->where('id', $id)->forceDelete();
        return redirect()->route('vendor.index')->with('success','Vendor Deleted');
    }
}
