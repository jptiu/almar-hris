<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeCreateRequest;
use App\Http\Requests\EmployeeUpdateRequest;
use App\Http\Requests\HRCreateRequest;
use App\Models\Employee;
use App\Models\HR;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        abort_unless(Gate::allows('hr_access'), 404);
        $lists = Employee::get();

        return view('pages.hr.employee.index', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeeCreateRequest $request)
    {
        abort_unless(Gate::allows('hr_access'), 404);
        if ($request->validated()) {
            $hr = Employee::create($request->all());
            $hr->save();

            return redirect(route("employee.index"))->with('success', 'Created Successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        abort_unless(Gate::allows('hr_access'), 404);
        $hr = HR::where('id', $id)->get();

        return view('pages.hr.employee.show', compact('hr'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmployeeUpdateRequest $request, string $id, Employee $employee)
    {
        abort_unless(Gate::allows('hr_access'), 404);
        if($request->validated()){
            $employee->update($request->all());

            return redirect()->back()->with('success', 'Employee Updated.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $emp = Employee::find($id);
        $emp->delete();

        return redirect()->back()->with('success', 'Employee Deleted.');
    }
}
