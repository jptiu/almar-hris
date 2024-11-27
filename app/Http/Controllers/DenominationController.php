<?php

namespace App\Http\Controllers;

use App\Models\Denomination;
use Illuminate\Http\Request;

class DenominationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $branch = auth()->user()->branch_id;
        $lists = Denomination::paginate(10);
        return view('pages.denomination.index', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.denomination.create.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $denom = new Denomination();
        $denom->denom_amt = $request->denom_amt;
        $denom->denom_typ = $request->denom_typ;
        $denom->save();

        return redirect(route("pages.denomination.index"))->with('success', 'Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $denom = Denomination::where('id', $id)->first();

        return view('pages.denomination.show.index', compact('denom'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $denom = Denomination::find($id);
        
        return view('pages.denomination.edit.index', compact('denom'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $denom = Denomination::find($id);
        $denom->denom_amt = $request->denom_amt;
        $denom->denom_typ = $request->denom_typ;
        $denom->update();

        return redirect(route("pages.denomination.index"))->with('success', 'Created Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $denom = Denomination::find($id);
        $denom->delete();

        return redirect()->back()->with('success', 'Denomination deleted.');
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
            Denomination::create([
                'denom_amt' => $row[0],
                'denom_typ' => $row[1],
            ]);
        }

        return redirect(route("denomination.index"))->with('success', 'CSV Data Imported Successfully');
    }
}
