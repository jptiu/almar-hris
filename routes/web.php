<?php

use App\Http\Controllers\AuditorController;
use App\Http\Controllers\BMController;
use App\Http\Controllers\BreakdownController;
use App\Http\Controllers\CityTownController;
use App\Http\Controllers\CLDController;
use App\Http\Controllers\CLMController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\CollectorController;
use App\Http\Controllers\ComputeCOHController;
use App\Http\Controllers\CustomerTypeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\HRController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\LOController;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\BarangayController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', 'login');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // Barangay
    // Route::resource('barangay', App\Http\Controllers\BarangayController::class);
    Route::get('barangay', [BarangayController::class, 'index'])->name('barangay.index');
    Route::get('barangay-add', [BarangayController::class, 'add'])->name('barangay.add');
    Route::post('barangay/store', [BarangayController::class, 'store'])->name('barangay.store');
    Route::post('barangay/update/{id}', [BarangayController::class, 'update'])->name('barangay.update');
    Route::get('barangay/show/{id}', [BarangayController::class, 'show'])->name('barangay.show');
    Route::delete('barangay/destroy/{id}', [BarangayController::class, 'destroy'])->name('barangay.destroy');
    Route::post('barangay/import', [BarangayController::class, 'importCSV'])->name('barangay.importcsv');
    
    // Customer
    // Route::resource('customer', App\Http\Controllers\CustomerController::class);
    Route::get('customer-add', [CustomerController::class, 'add'])->name('customer.add');
    Route::get('customer-daily', [CustomerController::class, 'daily'])->name('customer.daily');
    Route::get('customer-month', [CustomerController::class, 'month'])->name('customer.month');
    Route::get('customer', [CustomerController::class, 'index'])->name('customer.index');
    Route::post('customer/store', [CustomerController::class, 'store'])->name('customer.store');
    Route::post('customer/update/{id}', [CustomerController::class, 'update'])->name('customer.update');
    Route::get('customer/show/{id}', [CustomerController::class, 'show'])->name('customer.show');
    Route::delete('customer/destroy/{id}', [CustomerController::class, 'destroy'])->name('customer.destroy');
    Route::get('import', [CustomerController::class, 'importPage'])->name('customer.import');
    Route::post('importcsv', [CustomerController::class, 'importCSV'])->name('customer.importcsv');

    // Customer Type
    // Route::resource('customer-type', App\Http\Controllers\CustomerTypeController::class);
    Route::get('customer-type', [CustomerTypeController::class, 'index'])->name('customerType.index');
    Route::get('customer-type-add', [CustomerTypeController::class, 'add'])->name('customerType.add');
    Route::post('customer-type/store', [CustomerTypeController::class, 'store'])->name('customerType.store');
    Route::post('customer-type/update/{id}', [CustomerTypeController::class, 'update'])->name('customerType.update');
    Route::get('customer-type/show/{id}', [CustomerTypeController::class, 'show'])->name('customerType.show');
    Route::delete('customer-type/destroy/{id}', [CustomerTypeController::class, 'destroy'])->name('customerType.destroy');
    Route::post('customer-type/import', [CustomerTypeController::class, 'importCSV'])->name('customerType.importcsv');

    // City/ or Town
    // Route::resource('city', App\Http\Controllers\CityTownController::class);
    Route::get('city', [CityTownController::class, 'index'])->name('city.index');
    Route::get('city-add', [CityTownController::class, 'add'])->name('city.add');
    Route::post('city/store', [CityTownController::class, 'store'])->name('city.store');
    Route::post('city/update/{id}', [CityTownController::class, 'update'])->name('city.update');
    Route::get('city/show/{id}', [CityTownController::class, 'show'])->name('city.show');
    Route::delete('city/destroy/{id}', [CityTownController::class, 'destroy'])->name('city.destroy');
    Route::post('city/import', [CityTownController::class, 'importCSV'])->name('city.importcsv');

    // Loan
    Route::get('loan', [LoanController::class, 'index'])->name('loan.index');
    Route::post('loan/store', [LoanController::class, 'store'])->name('loan.store');
    Route::post('loan/update/{id}', [LoanController::class, 'update'])->name('loan.update');
    Route::delete('loan/destroy/{id}', [LoanController::class, 'destroy'])->name('loan.destroy');

    // Collection
    Route::get('collection', [CollectionController::class, 'index'])->name('collection.index');
    Route::post('collection/store', [CollectionController::class, 'store'])->name('collection.store');
    Route::post('collection/update/{id}', [CollectionController::class, 'update'])->name('collection.update');
    Route::delete('collection/destroy/{id}', [CollectionController::class, 'destroy'])->name('collection.destroy');

    // Breakdown
    Route::get('breakdown', [BreakdownController::class, 'index'])->name('breakdown.index');
    Route::post('breakdown/store', [BreakdownController::class, 'store'])->name('breakdown.store');
    Route::post('breakdown/update/{id}', [BreakdownController::class, 'update'])->name('breakdown.update');
    Route::delete('breakdown/destroy/{id}', [BreakdownController::class, 'destroy'])->name('breakdown.destroy');

    // Expenses
    Route::get('expenses', [ExpensesController::class, 'index'])->name('expenses.index');
    Route::post('expenses/store', [ExpensesController::class, 'store'])->name('expenses.store');
    Route::post('expenses/update/{id}', [ExpensesController::class, 'update'])->name('expenses.update');
    Route::delete('expenses/destroy/{id}', [ExpensesController::class, 'destroy'])->name('expenses.destroy');

    // Compute Cash on Hand
    Route::get('compute', [ComputeCOHController::class, 'index'])->name('compute.index');

    // Daily
    Route::get('daily', [CLDController::class, 'index'])->name('daily.index');
    Route::get('daily/store', [CLDController::class, 'store'])->name('daily.store');
    Route::get('daily/update/{id}', [CLDController::class, 'update'])->name('daily.update');
    Route::get('daily/destroy/{id}', [CLDController::class, 'destroy'])->name('daily.destroy');

    // Monthly
    Route::get('monthly', [CLMController::class, 'index'])->name('monthly.index');
    Route::get('monthly/store', [CLMController::class, 'store'])->name('monthly.store');
    Route::get('monthly/update/{id}', [CLMController::class, 'update'])->name('monthly.update');
    Route::get('monthly/destroy/{id}', [CLMController::class, 'destroy'])->name('monthly.destroy');


    // Route for the getting the data feed
    Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/analytics', [DashboardController::class, 'analytics'])->name('analytics');
    Route::get('/dashboard/fintech', [DashboardController::class, 'fintech'])->name('fintech');
    Route::get('/ecommerce/customers', [CustomerController::class, 'index'])->name('customers');

    // HR
    Route::get('hr', [HRController::class, 'index'])->name('hr.index');
    Route::get('renewals', [HRController::class, 'loanRenewals'])->name('renewals.index');
    Route::get('audit', [HRController::class, 'auditScheduling'])->name('audit.index');
    Route::get('loan-approvals', [HRController::class, 'pendingLoanApprovals'])->name('loan-approvals.index');
    Route::get('evaluations', [HRController::class, 'employeeEvaluation'])->name('evaluations.index');

    // Employee
    Route::get('employee', [EmployeeController::class, 'index'])->name('employee.index');
    Route::get('employee-add', [EmployeeController::class, 'add'])->name('employee.add');
    
    // Auditor
    Route::get('auditor', [AuditorController::class, 'index'])->name('auditor.index');

    // Branch
    Route::get('branch', [BMController::class, 'index'])->name('branch.index');

    // Collector
    Route::get('collector', [CollectorController::class, 'index'])->name('collector.index');

    // Loan Officer
    Route::get('loanofficer', [LOController::class, 'index'])->name('loanofficer.index');

});
