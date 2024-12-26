<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <div class="relative">
            <h1 class="text-2xl md:text-2xl text-slate-800 dark:text-slate-100 font-bold mb-12">Create Schedule</h1>
        </div>

        <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
            <form action="{{ route('schedule.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="grid grid-cols-3 gap-12">
                        <div class="...">
                            <div class="mb-8">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                    <div class="lg:col-span-2">
                                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-1">

                                            <div class="md:col-span-1">
                                                <label for="employee_name">Employee Name</label>
                                                <select name="employee_name" id="employee_name"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5">
                                                    <option value="">Select New Hired</option>
                                                    @foreach ($employees as $employee)
                                                        <option value="{{ $employee->id }}">{{ $employee->f_name }} {{ $employee->l_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="...">
                            <div class="mb-8">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                    <div class="lg:col-span-2">
                                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-1">
                                            <div class="md:col-span-1">
                                                <label for="shift">Shift</label>
                                                <select name="shift" id="shift"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5">
                                                    <option value="">Select Shift</option>
                                                    <option value="Morning">Morning</option>
                                                    <option value="Afternoon">Afternoon</option>
                                                    <option value="Night">Night</option>
                                                </select>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="...">
                            <div class="mb-8">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                    <div class="lg:col-span-2">
                                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-1">

                                            <div class="md:col-span-1">
                                                <label for="day_of_week">Work Schedule</label>
                                                <select name="day_of_week[]" id="day_of_week" multiple
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5">
                                                    <option value="">Select Days in Week</option>
                                                    <option value="Monday">Monday</option>
                                                    <option value="Tuesday">Tuesday</option>
                                                    <option value="Wednesday">Wednesday</option>
                                                    <option value="Thursday">Thursday</option>
                                                    <option value="Friday">Friday</option>
                                                    <option value="Saturday">Saturday</option>
                                                    <option value="Sunday">Sunday</option>
                                                </select>
                                            </div>

                                            <div class="md:col-span-1"> 
                                                <label for="day_off">Day Off</label> 
                                                <select name="day_off[]" id="day_off" multiple 
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5"> 
                                                    <option value="">Select Days Off</option> 
                                                    <option value="Monday">Monday</option> 
                                                    <option value="Tuesday">Tuesday</option> 
                                                    <option value="Wednesday">Wednesday</option> 
                                                    <option value="Thursday">Thursday</option> 
                                                    <option value="Friday">Friday</option> 
                                                    <option value="Saturday">Saturday</option> 
                                                    <option value="Sunday">Sunday</option> 
                                                </select> 
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>

                <div>
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-1">                    
                                <div class="md:col-span-1">
                                    <div class="inline-flex items-start" style="float: right;">
                                        <button type="submit" class="bg-blue-400 hover:bg-primary-500 text-white font-bold py-2 px-4 rounded">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>


        </div>

    </div>
</x-app-layout>