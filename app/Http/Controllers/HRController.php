<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class HRController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        abort_unless(Gate::allows('hr_access'), 404);
        
        return view('pages.hr.index');
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

    /**
     * The function `loanRenewals` returns a view for the HR renewals index page in a PHP application.
     * 
     * @return A view named 'index' located in the 'renewals' folder within the 'hr' folder in the
     * 'pages' directory is being returned.
     */
    public function loanRenewals()
    {
        return view('pages.hr.renewals.index');
    }

    public function auditScheduling()
    {
        return view('pages.hr.audit.index');
    }

    public function pendingLoanApprovals()
    {
        return view('pages.hr.loanapprovals.index');
    }

    public function employeeEvaluation()
    {
        return view('pages.hr.evaluations.index');
    }

    public function monthlyReport()
    {
        return view('pages.hr.monthlyrep.index');
    }

    public function payRoll()
    {
        return view('pages.hr.payroll.index');
    }

    public function biometricsAttendance()
    {
        return view('pages.hr.attendance.index');
    }

    public function approvedLoans()
    {
        return view('pages.hr.loanapprovals.approved.index');
    }

    public function rejectedLoans()
    {
        return view('pages.hr.loanapprovals.rejected.index');
    }

    public function announcementHr()
    {
        $lists = Announcement::get();

        return view('pages.hr.announce.index', compact('lists'));
    }

    public function addAnnouncement()
    {
        abort_unless(Gate::allows('hr_access'), 404);
        $lists = Announcement::get();

        return view('pages.hr.announce.add.index', compact('lists'));
    }

    public function storeAnnouncement(Request $request) 
    { 
        abort_unless(Gate::allows('hr_access'), 404);
        $request->validate([ 
            'title' => 'required',
            'subject' => 'nullable|string',
            'content' => 'required',
            'status' => 'required|in:0,1', 
        ]); 
        
        Announcement::create($request->all()); 
        
        return redirect()->route('announce.index')->with('success', 'Announcement created successfully.'); 
    }

    public function showAnnouncement($id)
    {
        abort_unless(Gate::allows('hr_access'), 404);
        $announcement = Announcement::where('id', $id)->first();

        return view('pages.hr.announce.show.index', compact('announcement'));
    }

    public function updateAnnouncement(Request $request, $id)
    {
        abort_unless(Gate::allows('hr_access'), 404);
            $announcement = Announcement::find($id);
            $announcement->title = $request->title;
            $announcement->subject = $request->subject;
            $announcement->content = $request->content;
            $announcement->status = $request->status;
            $announcement->update();

            return redirect(route("announce.index"))->with('success', 'Announcement Updated Successfully');
    }

    public function destroyAnnouncement($id)
    {
        abort_unless(Gate::allows('hr_access'), 404);
        $announcement = Announcement::find($id);
        $announcement->delete();

        return redirect()->back()->with('success', 'Announcement deleted.');
    }

}
