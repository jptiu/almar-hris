<?php

namespace App\Http\Controllers;

use App\Models\Chart;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lists = Chart::paginate(10);
        return view('pages.chart.index', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.chart.create.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $chart = new Chart();
        $chart->acc_no = $request->no;
        $chart->acc_class = $request->class;
        $chart->acc_type = $request->type;
        $chart->acc_title = $request->title;
        $chart->acc_description = $request->description;
        $chart->save();

        return redirect(route("pages.chart.index"))->with('success', 'Created Successfully');
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
        $chart = Chart::find($id);
        
        return view('pages.chart.edit.index', compact('chart'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $chart = Chart::find($id);
        $chart->acc_no = $request->no;
        $chart->acc_class = $request->class;
        $chart->acc_type = $request->type;
        $chart->acc_title = $request->title;
        $chart->acc_description = $request->description;
        $chart->update();

        return redirect(route("pages.chart.index"))->with('success', 'Created Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
