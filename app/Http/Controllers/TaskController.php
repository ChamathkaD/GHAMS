<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index')->with(compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('pdf')){
            if ($request->file('pdf')->isValid()
            ){
                $pdf = $request->file('pdf');
                $extention = $pdf->getClientOriginalExtension();
                $filename = date('y_m_d_h_i_s') . "." . $extention;
                Storage::disk('public')->put('pdf/'.$filename,file_get_contents($pdf));
            }
            if (Storage::disk('public')->exists('pdf/')){
                try {
                    (Storage::disk('public')->delete('pdf/'));
                } catch (\Exception $exception){
                    return null;
                }
            }
        }

        $task = new Task();
        $task->type_code = $request->input('type_code');
        $task->description = $request->input('description');
        $task->service_life = $request->input('service_life');
        $task->pdf = $filename;
        $task->save();
        return back()->with('success','Task Create Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        return view('tasks.show')->with(compact('task'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        return view('tasks.edit')->with(compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        if ($request->hasFile('pdf')){
            if ($request->file('pdf')->isValid()
            ){
                $pdf = $request->file('pdf');
                $extention = $pdf->getClientOriginalExtension();
                $filename = date('y_m_d_h_i_s') . "." . $extention;
                Storage::disk('public')->put('pdf/'.$filename,file_get_contents($pdf));
            }
            if (Storage::disk('public')->exists('pdf/'.$task->pdf)){
                try {
                    (Storage::disk('public')->delete('pdf/'.$task->pdf));
                } catch (\Exception $exception){
                    return null;
                }
            }
        }

        $task->type_code = $request->input('type_code');
        $task->description = $request->input('description');
        $task->service_life = $request->input('service_life');
        $task->pdf = $filename;
        $task->save();
        return back()->with('success','Task Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
}
