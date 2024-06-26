<?php

namespace App\Http\Controllers;

use App\Http\Requests\CityTownCreateRequest;
use App\Http\Requests\CityTownUpdateRequest;
use App\Models\CityTown;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CityTownController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        abort_unless(Gate::allows('loan_access'), 404);
        $lists = CityTown::get();

        return view('pages.city.index', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CityTownCreateRequest $request)
    {
        abort_unless(Gate::allows('loan_access'), 404);
        if ($request->validated()) {
            $city = new CityTown();
            $city->code = $request->code;
            $city->city_town = $request->city_town;
            $city->user_id = $request->user_id;
            $city->save();

            return redirect()->back()->with('success', 'City/Town created.');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort_unless(Gate::allows('loan_access'), 404);
        $city = CityTown::where('id', $id)->get();

        return view('city.show', compact('city'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CityTownUpdateRequest $request, $id)
    {
        abort_unless(Gate::allows('loan_access'), 404);
        if ($request->validated()) {
            $city = CityTown::find($id);
            $city->code = $request->code;
            $city->city_town = $request->city_town;
            $city->user_id = $request->user_id;
            $city->update();

            return redirect()->back()->with('success', 'City/Town updated.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        abort_unless(Gate::allows('loan_access'), 404);
        $city = CityTown::find($id);
        $city->delete();

        return redirect()->back()->with('success', 'City/Town deleted.');
    }
}
