<html lang="en">
<head>
    <title>Print Employee Profile</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="px-2 py-1 max-w-5xl mx-auto">
        <div class="flex justify-start items-start text-start">
            <div class="text-gray-600">
                <img class="h-auto mx-auto" src="/images/almarlogo.png" alt="almar suites">
            </div>
        </div>

        <div class="flex gap-6">
            <!-- Left Column: Profile Picture and Company Info -->
            <div class="w-1/4 pr-4">
                <div class="flex justify-center">
                    <img class="h-40 w-40 rounded-full" src="/images/user-36-01.jpg" alt="Profile Picture">
                </div>
                <div class="flex mt-2 space-y-2 text-center justify-center align-center items-center">
                    <div class="text-md font-semibold bg-green-500 w-1/2 text-white rounded-md">Active</div>
                </div>
                <div class="mt-4 space-y-2">
                    <div class="text-md"><strong>Position:</strong> Software Engineer</div>
                    <div class="text-md"><strong>Employed Date:</strong> January 1, 2020</div>
                    <div class="text-md"><strong>Current Branch:</strong> Cebu City</div>
                    <div class="text-md"><strong>Email:</strong> john.doe@example.com</div>
                    <div class="text-md"><strong>Phone Number:</strong> (123) 456-7890</div>
                </div>

                <!-- Employee Credits Section -->
                <div class="mt-8">
                    <div class="text-md font-bold py-2 border-b border-gray-300">Employee Credits</div>
                    <div class="mt-4 space-y-2">
                        <div class="text-md"><strong>Sick Leave:</strong> 10 days</div>
                        <div class="text-md"><strong>Holiday Leave:</strong> 5 days</div>
                        <div class="text-md"><strong>Paid Leave:</strong> 15 days</div>
                    </div>
                </div>

                <!-- Employee Violation Section -->
                <div class="mt-8">
                    <div class="text-md font-bold py-2 border-b border-gray-300">Employee Violation</div>
                    <div class="mt-4 space-y-2">
                        <ul class="list-disc pl-5">
                            <li><a href="#" class="text-blue-800">Tardiness</a></li>
                            <li><a href="#" class="text-blue-800">AWOL</a></li>
                        </ul>
                    </div>
                </div>

            </div>

            <!-- Right Column: All Sections -->
            <div class="w-3/4">
                <!-- Basic Information Section -->
                <div class="mt-2">
                    <div class="text-lg font-semibold py-2 border-b border-gray-300 bg-gray-100">Basic Information</div>
                    <div class="mt-4 flex space-x-4">
                        <!-- First Column: From First Name to Religion -->
                        <div class="w-1/2 space-y-2">
                            <div class="text-md"><strong>First Name:</strong> John</div>
                            <div class="text-md"><strong>Last Name:</strong> Doe</div>
                            <div class="text-md"><strong>Age:</strong> 30</div>
                            <div class="text-md"><strong>Birth Place:</strong> Cebu City</div>
                            <div class="text-md"><strong>Civil Status:</strong> Single</div>
                            <div class="text-md"><strong>Religion:</strong> Catholic</div>
                        </div>
                        <!-- Second Column: From Height to Provincial Address -->
                        <div class="w-1/2 space-y-2">
                            <div class="text-md"><strong>Height:</strong> 5'8"</div>
                            <div class="text-md"><strong>Weight:</strong> 160 lbs</div>
                            <div class="text-md"><strong>Present Address:</strong> 123 Main St, Cebu City</div>
                            <div class="text-md"><strong>Provincial Address:</strong> 456 Provincial Rd, Davao</div>
                        </div>
                    </div>

                    <!-- Family Info Section -->
                    <div class="mt-8">
                        <div class="text-md font-semibold border-b border-gray-300">Family Info</div>
                        <div class="mt-4 space-y-2">
                            <div class="text-md font-semibold">Mother</div>
                            <div class="text-md"><strong>Mother's Maiden Name:</strong> Maria Santos</div>
                            <div class="text-md"><strong>Mother's Occupation:</strong> Teacher</div>
                            <div class="text-md"><strong>Mother's Phone Number:</strong> (123) 555-6789</div>

                            <div class="text-md font-semibold mt-4">Father</div>
                            <div class="text-md"><strong>Father's Name:</strong> Juan Santos</div>
                            <div class="text-md"><strong>Father's Occupation:</strong> Engineer</div>
                            <div class="text-md"><strong>Father's Phone Number:</strong> (123) 555-9876</div>
                        </div>
                    </div>
                        <!-- Additional Information Section -->
                        <div class="mt-8">
                        <div class="text-md font-semibold border-b border-gray-300">Additional Information</div>
                        <div class="mt-4 space-y-2">
                            <div class="text-md"><strong>Spouse Full Name:</strong> Jane Doe</div>
                            <div class="text-md"><strong>Child 1 Name:</strong> Child One</div>
                            <div class="text-md"><strong>Child 1 Age:</strong> 10</div>
                            <div class="text-md"><strong>Child 2 Name:</strong> Child Two</div>
                            <div class="text-md"><strong>Child 2 Age:</strong> 7</div>
                            <div class="text-md"><strong>Child 3 Name:</strong> Child Three</div>
                            <div class="text-md"><strong>Child 3 Age:</strong> 4</div>
                        </div>
                    </div>
                </div>

                <!-- Educational Background Section -->
                <div class="mt-8">
                    <div class="text-lg font-semibold py-2 border-b border-gray-300 bg-gray-100">Educational Background</div>
                    <div class="mt-4 flex space-x-4">
                        <!-- First Column: Elementary and Secondary -->
                        <div class="w-1/2 space-y-2">
                            <div class="text-md font-semibold">Elementary</div>
                            <div class="text-md"><strong>Name of School:</strong> Elementary School Name</div>
                            <div class="text-md"><strong>Address:</strong> Elementary School Address</div>
                            <div class="text-md"><strong>Year Graduated:</strong> 1995</div>
                            
                            <div class="text-md font-semibold mt-4">Secondary</div>
                            <div class="text-md"><strong>Name of School:</strong> Secondary School Name</div>
                            <div class="text-md"><strong>Address:</strong> Secondary School Address</div>
                            <div class="text-md"><strong>Year Graduated:</strong> 1999</div>
                        </div>
                        <!-- Second Column: College and Vocational -->
                        <div class="w-1/2 space-y-2">
                            <div class="text-md font-semibold">College</div>
                            <div class="text-md"><strong>Name of School:</strong> College Name</div>
                            <div class="text-md"><strong>Address:</strong> College Address</div>
                            <div class="text-md"><strong>Year Graduated:</strong> 2003</div>

                            <div class="text-md font-semibold mt-4">Vocational</div>
                            <div class="text-md"><strong>Name of School:</strong> Vocational School Name</div>
                            <div class="text-md"><strong>Address:</strong> Vocational School Address</div>
                            <div class="text-md"><strong>Year Graduated:</strong> 2005</div>
                        </div>
                    </div>
                </div>

                <!-- Work Experience Section -->
                <div class="mt-8">
                    <div class="text-lg font-semibold py-2 border-b border-gray-300 bg-gray-100">Work Experience</div>
                    <div class="mt-4 space-y-2">
                        <div class="text-md"><strong>Name of Company:</strong> Tech Solutions Inc.</div>
                        <div class="text-md"><strong>Address:</strong> 123 Tech Street, Cebu City</div>
                        <div class="text-md"><strong>Position:</strong> Software Engineer</div>
                        <div class="text-md"><strong>Date Hired (From):</strong> January 1, 2003</div>
                        <div class="text-md"><strong>To:</strong> December 31, 2010</div>
                        <!-- Add more fields as necessary -->
                    </div>
                </div>

                <!-- Employee Benefits Section -->
                <div class="mt-8">
                    <div class="text-lg font-semibold py-2 border-b border-gray-300 bg-gray-100">Employee Benefits</div>
                    <div class="mt-4 space-y-2">
                        <div class="text-md"><strong>SSS No.:</strong> 12-3456789-0</div>
                        <div class="text-md"><strong>Pag-IBIG No.:</strong> 1234-5678-9101</div>
                        <div class="text-md"><strong>PHILHEALTH No.:</strong> 1234-5678-9101</div>
                        <div class="text-md"><strong>TIN No.:</strong> 123-456-789-000</div>
                    </div>
                </div>

                <!-- Contact Person (In Case of Emergency) Section -->
                <div class="mt-8">
                    <div class="text-lg font-semibold py-2 border-b border-gray-300 bg-gray-100">Contact Person (In Case of Emergency)</div>
                    <div class="mt-4 space-y-2">
                        <div class="text-md"><strong>Full Name:</strong> Jane Doe</div>
                        <div class="text-md"><strong>Address:</strong> 789 Emergency St, Cebu City</div>
                        <div class="text-md"><strong>Phone No.:</strong> (987) 654-3210</div>
                        <div class="text-md"><strong>Relationship:</strong> Spouse</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <br>
</body>
</html>
