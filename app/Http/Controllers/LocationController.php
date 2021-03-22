<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()

    {
        if (request()->locations == 'deleted'){
            $locations = Location::onlyTrashed()->get();
        } else{
            $locations = Location::all();
        }

        return view('locations.index')->with(compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('locations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $location = new Location();
        $location ->location_code = $request->input('location_code');
        $location ->description = $request->input('description');
        $location ->save();
        return back()->with('success','Location Create Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        return view('locations.show')->with(compact('location'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit(Location $location)
    {
       return view('locations.edit')->with(compact('location'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
       Location::where('id', $location->id)->Update([
            'location_code' => $request->input('location_code'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('location.index')->with('success','location Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(Location $location)
    {
        $location->delete();
        return redirect()->route('location.index')->with('success','Location Deleted');
    }

    public function restore($id){
        Location::onlyTrashed()->where('id', $id)->restore();
        return redirect()->route('location.index')->with('success','location Restored');

    }

    public function forceDelete($id){
        Location::onlyTrashed()->where('id', $id)->forceDelete();
        return redirect()->back()->with('success','location Deleted');
    }
}
