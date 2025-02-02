<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LeaveRequest;

class LeaveRequestController extends Controller
{
    public function index()
    {
        return view('pages.empdashboard.leave.index');
    }
    public function store(Request $request)
    {
        $request->validate([
            'employee_id' => 'string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'leave_type' => 'required|string',
            'days_with_pay' => 'required|integer',
            'days_without_pay' => 'required|integer',
            'duration' => 'required|string',
            'reason' => 'required|string',
        ]);

        LeaveRequest::create([
            'employee_id' => $request->employee_id??'',
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'leave_type' => $request->leave_type,
            'days_with_pay' => $request->days_with_pay,
            'days_without_pay' => $request->days_without_pay,
            'duration' => $request->duration,
            'reason' => $request->reason,
        ]);

        return redirect()->route('leaveEmployee.index')->with('success', 'Leave request submitted successfully.');
    }
}
