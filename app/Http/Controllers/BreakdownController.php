<?php

namespace App\Http\Controllers;

use App\Models\Breakdown;
use App\Models\CashBill;
use App\Models\Denomination;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class BreakdownController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //abort_unless(Gate::allows('loan_access'), 404);
        $user = Auth::user();

        return view('pages.breakdown.index', compact('user'));
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

    public function importCSV(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,txt|max:2048', // Validate the uploaded file
        ]);

        $file = $request->file('file');

        // Read the CSV data
        $csvData = file_get_contents($file);
        // dd($csvData);

        // Split CSV data into rows
        $rows = array_map('str_getcsv', explode("\n", $csvData));

        // Remove the header row if it exists
        $header = array_shift($rows);
        // dd($header);

        foreach ($rows as $row) {
            // Create and save your model instance
            Breakdown::create([
                'ref_no' => $row[0],
                'date' => $row[1],
                'user_id' => $row[2],
                'total_amount' => $row[3],
            ]);
        }

        return redirect(route("breakdown.index"))->with('success', 'CSV Data Imported Successfully');
    }

    public function importCSVCashbills(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,txt|max:2048', // Validate the uploaded file
        ]);

        $file = $request->file('file');

        // Read the CSV data
        $csvData = file_get_contents($file);
        // dd($csvData);

        // Split CSV data into rows
        $rows = array_map('str_getcsv', explode("\n", $csvData));

        // Remove the header row if it exists
        $header = array_shift($rows);
        // dd($header);

        foreach ($rows as $row) {
            // Create and save your model instance
            CashBill::create([
                'breakdown_id' => $row[0],
                'denomination' => $row[2],
                'type' => $row[3],
                'qty' => $row[4],
                'amount' => $row[5],
            ]);
        }

        return redirect(route("breakdown.index"))->with('success', 'CSV Data Imported Successfully');
    }
}
