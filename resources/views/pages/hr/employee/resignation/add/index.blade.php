<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <div class="relative">
            <h1 class="text-2xl md:text-2xl text-slate-800 dark:text-slate-100 font-bold mb-12">Employee Resignation</h1>
        </div>

        <form action="{{ route('resignation.store') }}" method="POST">
            @csrf
            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                <div>
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3 mb-12">
                        <div>
                            <h1 class="text-xl md:text-xl text-slate-600 dark:text-slate-100 font-bold mb-2">Add Resignee</h1>
                            <span>Fill up the inputs to add Resignee.</span>
                        </div>

                        <div class="lg:col-span-2">
                        </div>
                    </div>
                </div>

                <x-section-border />

                <div>
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3 mb-6">
                        <div class="text-gray-600">
                            <p class="font-medium text-lg">Resignee Details</p>
                        </div>

                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2">
                                <div class="md:col-span-1">
                                    <label for="employee_name">Employee Name</label>
                                        <select name="employee_name" id="employee_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" />
                                        @foreach ( $employees as $employee )
                                            <option value="{{$employee->user_id}}">{{$employee->f_name.' '.$employee->m_name.' '.$employee->l_name}}</option>
                                        @endforeach
                                        </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3 mb-6">
                        <div class="text-gray-600">
                            <p class="font-medium text-lg"></p>
                        </div>

                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2">
                                <div class="md:col-span-1">
                                    <label for="denom_typ">Designation</label>
                                    <input type="text" name="denom_typ" id="denom_typ" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                </div>
                                <div class="md:col-span-1">
                                    <label for="denom_typ">Branch/Department</label>
                                    <input type="text" name="denom_typ" id="denom_typ" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3 mb-6 mt-12">
                        <div class="text-gray-600">
                            <p class="font-medium text-lg">Render Details</p>
                        </div>

                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-4">
                                <div class="md:col-span-2">
                                    <label for="date_of_resignation">Date of Resignation</label>
                                    <input type="date" name="date_of_resignation" id="date_of_resignation" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                </div>
                                <div class="md:col-span-1">
                                    <label for="render_start">Start of Rendering Period</label>
                                    <input type="date" name="render_start" id="render_start" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                </div>
                                <div class="md:col-span-1">
                                    <label for="render_end">End of Rendering Period</label>
                                    <input type="date" name="render_end" id="render_end" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3 mb-6 mt-12">
                        <div class="text-gray-600">
                            <p class="font-medium text-lg">Resignation Status</p>
                        </div>

                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-4">
                                <div class="md:col-span-2">
                                    <label for="status">Status</label>
                                        <select name="status" id="status" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" />
                                            <option value="TBD">TBD</option>
                                            <option value="Approved">Approved</option>
                                        </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div class="text-gray-600">
                            <p class="font-medium text-lg"></p>
                        </div>

                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">                    
                                <div class="md:col-span-5 text-right">
                                    <div class="inline-flex items-end">
                                    <a href="{{ route('denomination.index') }}" class="btn bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mr-4">Cancel</a>
                                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Confirm Submission</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</x-app-layout>
