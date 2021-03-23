<?php

namespace App\Http\Controllers;

use App\Department;
use App\Http\Requests\DepartmentSaveRequest;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->departments == 'deleted'){
            $departments = Department::onlyTrashed()->get();
        } else{
            $departments = Department::all();
        }

       return view('departments.index')->with(compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(DepartmentSaveRequest $departmentSaveRequest)
    {
        $department = new Department();
        $department->department_code = $departmentSaveRequest->input('department_code');
        $department->description = $departmentSaveRequest->input('description');
        $department->save();

        return back()->with('success','Description Create Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        return view('departments.show')->with(compact('department'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        return view('departments.edit')->with(compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(DepartmentSaveRequest $departmentSaveRequest, Department $department)
    {
        $department->department_code = $departmentSaveRequest->input('department_code');
        $department->description = $departmentSaveRequest->input('description');
        $department->save();

        return back()->with('success','Department Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(Department $department)
    {
        $department->delete();
        return redirect()->route('department.index')->with('success','Department Deleted');
    }

    public function restore($id){

        Department::onlyTrashed()->where('id', $id)->restore();
        return redirect()->route('department.index')->with('success','Department restored');

    }

    public function forceDelete($id){
        Department::onlyTrashed()->where('id', $id)->delete();
        return redirect()->route('department.index')->with('success','Department Deleted');
    }
}
