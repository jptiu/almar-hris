<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeCreateRequest;
use App\Http\Requests\EmployeeUpdateRequest;
use App\Http\Requests\HRCreateRequest;
use App\Models\Employee;
use App\Models\HR;
use App\Models\NewHire;
use App\Models\Schedule;
use App\Models\DayOff;
use App\Models\Probation;
use App\Models\Resignation;
use App\Models\Announcement;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        abort_unless(Gate::allows('hr_access'), 404);
        $lists = Employee::get();
        $announcements = Announcement::where('status', 1)->get(); // Fetch only active announcements
        $activeCount = $announcements->count(); // Count active announcements 
        $currentDate = Carbon::now()->format('F d, Y'); // Get the current date

        return view('pages.hr.employee.index', compact('lists','announcements', 'activeCount', 'currentDate'));
    }

    public function add()
    {
        abort_unless(Gate::allows('hr_access'), 404);
        $lists = Employee::get();

        return view('pages.hr.employee.add.index', compact('lists'));
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
        abort_unless(Gate::allows('hr_access'), 404);
        $acc = \App\Models\User::factory()->create([
            'name' => $request->f_name . ' ' . $request->m_name . ' ' . $request->l_name,
            'email' => $request->f_name . $request->l_name . '@almarfinance.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // var_dump($acc->id);

        $em = new Employee();
        $em->user_id = $acc->id;
        $em->f_name = $request->f_name;
        $em->m_name = $request->m_name;
        $em->l_name = $request->l_name;
        $em->position_desired = $request->position_desired;
        $em->present_address = $request->present_address;
        $em->provincial_address = $request->provincial_address;
        $em->phone_number = $request->phone_number;
        $em->birth_date = $request->birth_date;
        $em->birth_place = $request->birth_place;
        $em->civil_status = $request->civil_status;
        $em->religion = $request->religion;
        $em->age = $request->age;
        $em->height = $request->height;
        $em->weight = $request->weight;
        $em->f_spouse = $request->f_spouse;
        $em->m_spouse = $request->m_spouse;
        $em->l_spouse = $request->l_spouse;
        $em->child_1_name = $request->child_1_name;
        $em->child_1_age = $request->child_1_age;
        $em->child_2_name = $request->child_2_name;
        $em->child_2_age = $request->child_2_age;
        $em->child_3_name = $request->child_3_name;
        $em->child_3_age = $request->child_3_age;
        $em->m_maiden_f_name = $request->m_maiden_f_name;
        $em->m_maiden_m_name = $request->m_maiden_m_name;
        $em->m_maiden_l_name = $request->m_maiden_l_name;
        $em->m_occupation = $request->m_occupation;
        $em->m_phone = $request->m_phone;
        $em->father_f_name = $request->father_f_name;
        $em->father_m_name = $request->father_m_name;
        $em->father_l_name = $request->father_l_name;
        $em->f_occupation = $request->f_occupation;
        $em->f_phone = $request->f_phone;
        $em->emergency_name = $request->emergency_name;
        $em->emergency_address = $request->emergency_address;
        $em->emergency_phone = $request->emergency_phone;
        $em->relationship = $request->relationship;
        $em->elementary = $request->elementary;
        $em->secondary = $request->secondary;
        $em->college = $request->college;
        $em->course = $request->course;
        $em->vocational = $request->vocational;
        $em->n_company_1 = $request->n_company_1;
        $em->a_company_1 = $request->a_company_1;
        $em->p_company_1 = $request->p_company_1;
        $em->f_company_1 = $request->f_company_1;
        $em->t_company_1 = $request->t_company_1;
        $em->cf_name_1 = $request->cf_name_1;
        $em->cf_occ_1 = $request->cf_occ_1;
        $em->cf_add_1 = $request->cf_add_1;
        $em->cf_phone_1 = $request->cf_phone_1;
        $em->sss = $request->sss;
        $em->pagibig = $request->pagibig;
        $em->philhealth = $request->philhealth;
        $em->tin = $request->tin;
        $em->file = $request->file;
        $em->save();

        $new = new NewHire();
        $new->user_id = $acc->id;
        $new->date_hired = now()->toDateString();
        $new->status = 'Probation';
        $new->position = $em->position_desired;
        $new->save();

        if ($new->status == 'Probation') {
            $prob = new Probation();
            $prob->user_id = $new->user_id;
            $prob->status = 'Probation';
            $prob->save();
        }

        return redirect(route("employee.index"))->with('success', 'Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        abort_unless(Gate::allows('hr_access'), 404);
        $hr = HR::where('id', $id)->first();

        return view('pages.hr.employee.show', compact('hr'));
    }

    public function employeeprofile(string $id)
    {
        abort_unless(Gate::allows('hr_access'), 404);
        $lists = Probation::with('employee')->get();
        $employee = Employee::where('id', $id)->first();

        return view('pages.hr.employee.profile.index', compact('lists', 'employee'));
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
        if ($request->validated()) {
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

    /**
     * BM Probation Display
     */
    public function bmprobation()
    {
        abort_unless(Gate::allows('hr_access'), 404);
        $lists = Probation::with('employee')->get();

        return view('pages.hr.employee.bmprobation.index', compact('lists'));
    }

    public function bmp_show($id)
    {
        abort_unless(Gate::allows('hr_access'), 404);
        // $lists = Probation::with('employee')->get();
        // $employee = Employee::where('id', $id)->first();
        $prob = Probation::with('employee')->find($id);

        return view('pages.hr.employee.bmprobation.edit.index', compact('prob'));
    }

    public function employeeshow($id)
    {
        abort_unless(Gate::allows('hr_access'), 404);
        $lists = Probation::with('employee')->get();
        $employee = Employee::where('id', $id)->first();

        return view('pages.hr.employee.show.index', compact('lists', 'employee'));
    }

    public function bmp_update(Request $request, string $id)
    {
        $prob = Probation::find($id);
        $prob->date_of_probation = $request->date_start . ' - ' . $request->date_end;
        $prob->quota = $request->quota;
        $prob->branch = $request->branch;
        $prob->type = $request->type;
        $prob->status = $request->status;
        $prob->update();

        return redirect(route("bmprobation.index"))->with('success', 'Updated Successfully');
    }

    public function employeeupdate(EmployeeUpdateRequest $request, string $id)
    {
        if ($request->validated()) {
            $employee = Employee::find($id);
            $employee->update($request->all());

            return redirect(route("hr.index"))->with('success', 'Updated Successfully');
        }
    }

    public function newhire()
    {
        abort_unless(Gate::allows('hr_access'), 404);
        $lists = NewHire::with('employee', 'probation')->get();

        return view('pages.hr.employee.newhire.index', compact('lists'));
    }

    public function newhireadd()
    {
        abort_unless(Gate::allows('hr_access'), 404);
        $lists = Employee::get();

        return view('pages.hr.employee.newhire.add.index', compact('lists'));
    }

    public function resignation()
    {
        abort_unless(Gate::allows('hr_access'), 404);
        $lists = Employee::get();

        return view('pages.hr.employee.resignation.index', compact('lists'));
    }

    public function resigadd(Request $request)
    {
        abort_unless(Gate::allows('hr_access'), 404);
        $employees = Employee::get();


        return view('pages.hr.employee.resignation.add.index', compact('employees'));
    }

    public function resigstore(Request $request)
    {
        abort_unless(Gate::allows('hr_access'), 404);
        $lists = Employee::get();
        $resig = new Resignation();
        $resig->user_id = $request->user_id;
        $resig->date_of_resignation = $request->date_of_resignation;
        $resig->render_start = $request->render_start;
        $resig->render_end = $request->render_end;
        $resig->status = $request->status;
        $resig->save();

        return redirect(route("hr.index"))->with('success', 'Created Successfully');
    }

    public function schedule()
    {
        abort_unless(Gate::allows('hr_access'), 404);
        $schedules = Schedule::with('employee', 'dayOffs')->get();

        return view('pages.hr.employee.schedule.index', compact('schedules'));
    }

    public function scheduleadd(Request $request)
    {
        abort_unless(Gate::allows('hr_access'), 404);
        $employees = Employee::all();


        return view('pages.hr.employee.schedule.add.index', compact('employees'));
    }

    public function schedulestore(Request $request)
    {
        abort_unless(Gate::allows('hr_access'), 404);
        $request->validate([
            'employee_name' => 'required|exists:employees,id',
            'day_of_week' => 'required|array',
            // 'day_of_week.*' => 'in:Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday',
            'shift' => 'nullable|string',
            'day_off' => 'nullable|array',
            'day_off.*' => 'in:Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday',
        ]);
    
        DB::transaction(function () use ($request) {
            // Store schedule
            // foreach ($request->day_of_week as $day) {
                $sched = Schedule::create([
                    'employee_id' => $request->employee_name,
                    'day_of_week' => $request->day_of_week,
                    'shift' => $request->shift,
                ]);
            // }
    
            // Store day-offs
            if ($request->day_off) {
                foreach ($request->day_off as $day) {
                    DayOff::create([
                        'schedule_id' => $sched->id,
                        'day_of_week' => $day,
                    ]);
                }
            }
        });

        return redirect(route("schedule.index"))->with('success', 'Schedules and day-offs stored successfully');
    }

    public function scheduleshow(Schedule $schedule) 
    { 
        $employees = Employee::all(); 
        
        return view('pages.hr.employee.schedule.show.index', compact('schedule', 'employees')); 
    }

    public function employeeSchedules(){
        $scheds = Schedule::with('employee.schedule.dayOffs')->get();

        return response()->json($scheds, 200);
    }


    public function attendance()
    {
        abort_unless(Gate::allows('hr_access'), 404);

        return view('pages.hr.attendance.index');
    }

    public function emailrequest()
    {
        abort_unless(Gate::allows('hr_access'), 404);

        return view('pages.hr.emailrequest.index');
    }
    public function employeeDashboard()
    {
        abort_unless(Gate::allows('hr_access'), 404);
        $lists = Employee::all();
        
        return view('pages.empdashboard.dashboard', compact('lists'));
    }

    public function leaveEmployee()
    {
        return view('pages.empdashboard.leave.index');
    }

    public function undertimeEmployee()
    {
        return view('pages.empdashboard.undertime.index');
    }

    public function overtimeEmployee()
    {
        return view('pages.empdashboard.overtime.index');
    }


}
