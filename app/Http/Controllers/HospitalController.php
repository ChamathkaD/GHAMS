<?php

namespace App\Http\Controllers;

use App\Hospital;
use App\Http\Requests\SaveHospitalRequest;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        if (request()->hospitals == 'deleted'){
            $hospitals = Hospital::onlyTrashed()->get();
        } else{
            $hospitals = Hospital::all();
        }


        return view('hospitals.index')->with(compact('hospitals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hospitals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveHospitalRequest $saveHospitalRequest)
    {
      $hospital = new Hospital();
      $hospital->hospital_code = $saveHospitalRequest->input('hospital_code');
      $hospital->hospital_name = $saveHospitalRequest->input('hospital_name');
      $hospital->region = $saveHospitalRequest->input('region');
      $hospital->address = $saveHospitalRequest->input('address');
      $hospital->telephone = $saveHospitalRequest->input('telephone');
      $hospital->fax = $saveHospitalRequest->input('fax');
      $hospital->email = $saveHospitalRequest->input('email');
      $hospital->wo_prefix = $saveHospitalRequest->input('wo_prefix');
      $hospital->wocm_sl_no = $saveHospitalRequest->input('wocm_sl_no');
      $hospital->wopm_sl_no = $saveHospitalRequest->input('wopm_sl_no');
      $hospital->hospital_code_prefix = $saveHospitalRequest->input('hospital_code_prefix');
     $hospital->save();
        return back()->with('success', 'Hospital Create Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function show(Hospital $hospital)
    {
      return view('hospitals.show')->with(compact('hospital'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function edit(Hospital $hospital)
    {
        return view('hospitals.edit')->with(compact('hospital'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hospital $hospital)
    {

        $hospital->hospital_code = $request->input('hospital_code');
        $hospital->hospital_name = $request->input('hospital_name');
        $hospital->region = $request->input('region');
        $hospital->address = $request->input('address');
        $hospital->telephone = $request->input('telephone');
        $hospital->fax = $request->input('fax');
        $hospital->email = $request->input('email');
        $hospital->wo_prefix = $request->input('wo_prefix');
        $hospital->wocm_sl_no = $request->input('wocm_sl_no');
        $hospital->wopm_sl_no = $request->input('wopm_sl_no');
        $hospital->hospital_code_prefix = $request->input('hospital_code_prefix');
        $hospital->save();
        return redirect()->route('hospital.index')->with('success','hospital Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(Hospital $hospital)
    {
        $hospital->delete();
        return redirect()->route('hospital.index')->with('success','Hospital Deleted');
    }

    public function restore($id){
        Hospital::onlyTrashed()->where('id', $id)->restore();
        return redirect()->route('hospital.index')->with('success','Hospital Restored');
    }

    public function forceDelete($id){
        Hospital::onlyTrashed()->where('id', $id)->forceDelete();
        return redirect()->route('hospital.index')->with('success','Hospital Deleted');
    }
}
