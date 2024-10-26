<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <div class="relative">
            <h1 class="text-2xl md:text-2xl text-slate-800 dark:text-slate-100 font-bold mb-12">New Hire</h1>
        </div>

        <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="grid grid-cols-3 gap-12">
                            <div class="...">
                                <div class="mb-8">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                        <div class="lg:col-span-2">
                                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-1">

                                                <div class="md:col-span-1">
                                                    <label for="room_floor">Employee Name</label>
                                                    <select name="room_floor" id="room_floor"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" />
                                                    <option value="1st">Select New Hired</option>
                                                    <option value="1st">James Simene</option>
                                                    <option value="2nd">Kent Madrid</option>
                                                    <option value="3rd">JP Tiu</option>
                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-8">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                        <div class="lg:col-span-2">
                                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-1">
                                                <div class="md:col-span-1">
                                                    <label for="payment_method">Date Hired</label>
                                                    <input type="date" name="payment_method" id="payment_method" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" value="" placeholder="" />
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
                                                    <label for="payment_method">Position</label>
                                                    <input type="text" name="payment_method" id="payment_method" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" value="Branch Manager" placeholder="" />
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
                                                    <label for="payment_method">Employment Status</label>
                                                    <input type="text" name="payment_method" id="payment_method" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" value="Probation" placeholder="" />
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>

                    <h3 class="text-red-300 italic">To JP: Naka hide ning naa sa ubos na mga inputs, ayha rani mugawas pag Branch Manager ang Position</h3>

                    <div class="grid grid-cols-3 gap-12 mt-8">
                            <div class="...">
                                <div class="mb-8">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                        <div class="lg:col-span-2">
                                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2">
                                                <div class="md:col-span-1">
                                                    <label for="payment_method">Start of Probation</label>
                                                    <input type="date" name="payment_method" id="payment_method" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" value="" placeholder="" />
                                                </div>
                                                <div class="md:col-span-1">
                                                    <label for="payment_method">End of Probation</label>
                                                    <input type="date" name="payment_method" id="payment_method" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" value="" placeholder="" />
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-8">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                        <div class="lg:col-span-2">
                                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-1">
                                                <div class="md:col-span-1">
                                                    <label for="room_floor">Monthly/Daily</label>
                                                    <select name="room_floor" id="room_floor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" />
                                                        <option value="1st">Monthly</option>
                                                        <option value="1st">Daily</option>
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
                                                    <label for="room_floor">Quota</label>
                                                    <select name="room_floor" id="room_floor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" />
                                                        <option value="1st">Inc. 100 customers, 500k release</option>
                                                        <option value="1st">Inc. Daily to 30k</option>
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
                                                    <label for="room_floor">Branch/Department</label>
                                                    <select name="room_floor" id="room_floor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" />
                                                        <option value="1st">Gingoog</option>
                                                        <option value="1st">Lapu-Lapu-1</option>
                                                        <option value="1st">Matina Davao</option>
                                                        <option value="1st">CDO</option>
                                                        <option value="1st">Oroquieta</option>
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