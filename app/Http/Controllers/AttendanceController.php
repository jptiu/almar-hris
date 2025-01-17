<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lists = Attendance::paginate(20);

        return view('pages.hr.attendance.index', compact('lists'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function timeIn(Request $request)
    {
        $attendance = new Attendance();
        $attendance->employee_id = $request->employee_id;
        $attendance->time_in = $request->time_in;
        $attendance->image_in = $request->image_in;
        $attendance->date = $request->date;
        $attendance->save();

        return response()->json([
            'data' => $attendance,
            'message' => 'Clocked In',
        ], 200);
    }

    public function timeOut(Request $request, $id)
    {
        if ($id) {
            $attendance = Attendance::findOrFail($id);
            $attendance->time_out = $request->time_out;
            $attendance->image_out = $request->image_out;
            $attendance->update();

            return response()->json([
                'data' => $attendance,
                'message' => 'Clocked Out',
            ], 200);
        }
    }
}
