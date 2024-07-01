<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerTypeCreateRequest;
use App\Http\Requests\CustomerTypeUpdateRequest;
use App\Models\CustomerType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CustomerTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        abort_unless(Gate::allows('loan_access'), 404);
        $lists = CustomerType::with('user')
        ->where('code', 'LIKE', '%', $request->search, '%')->orderBy("created_at", "desc")
        ->get();

        return view('pages.customer.type.index', compact('lists'));
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
    public function store(CustomerTypeCreateRequest $request)
    {
        abort_unless(Gate::allows('loan_access'), 404);
        if($request->validated()){
            $customer = new CustomerType();
            $customer->code = $request->code;
            $customer->description = $request->description;
            $customer->user_id = $request->user_id;
            $customer->save();

            return redirect()->back()->with('success', 'Customer Type Created.');
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
        $customer = CustomerType::where('id', $id)->get();

        return view('customer.type.show', compact('customer'));
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
    public function update(CustomerTypeUpdateRequest $request, $id)
    {
        abort_unless(Gate::allows('loan_access'), 404);
        if($request->validated()){
            $customer = CustomerType::find($id);
            $customer->code = $request->code;
            $customer->description = $request->description;
            $customer->user_id = $request->user_id;
            $customer->update();
    
            return redirect()->back()->with('success', 'Customer Type Updated.');
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
        $customer = CustomerType::find($id);
        $customer->delete();

        return redirect()->back()->with('success', 'Customer Type deleted.');
    }
}
