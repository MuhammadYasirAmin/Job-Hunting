<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Backend\Auth\Admin\LoginController;
use App\Http\Livewire\Backend\Auth\Admin\SignupController;
use App\Http\Livewire\Frontend\Jobs\AppliedJobs;
use App\Http\Livewire\Frontend\Jobs\JobListing;
use App\Http\Livewire\Frontend\Jobs\JobListingDetail;
use App\Http\Livewire\Frontend\HomePage;
use App\Http\Livewire\Backend\Views\Admin\AdminDashboard;
use App\Http\Livewire\Backend\Views\Company\CompanyDashboard;
use App\Http\Livewire\Backend\Views\JobSeeker\JobSeekerDashboard;
use App\Http\Livewire\Backend\Views\Employer\EmployerDashboard;
use App\Http\Livewire\Backend\Views\Employer\JobsPost;
use App\Http\Livewire\Backend\Views\Employer\ManageJobs;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:cache');
    Artisan::call('route:clear');
    return "Cache Clear";
});

// Admin Routes

Route::prefix('admin')->group(function () {
    Route::get('/Login-Form', LoginController::class, )->name('Admin.Login');
    Route::post('/Login-Form/Submit', [LoginController::class, 'AdminLogin'])->name('Admin.Login.Submit');
    Route::get('/SignUp-Form', SignupController::class, )->name('Admin.SignUp');
    Route::post('/SignUp-Form/Submit', [SignupController::class, 'AdminSignup'])->name('Admin.SignUp.Submit');
    Route::get('/Admin-Dashboard', AdminDashboard::class, )->name('Admin.Dashboard')->middleware('admin');
    Route::get('/Admin-LogOut', [LoginController::class, 'AdminLogout'])->name('Admin.Logout')->middleware('admin');
});

Route::prefix('Company')->group(function () {
    Route::get('/Login-Form', LoginController::class, )->name('Company.Login');
    Route::post('/Login-Form/Submit', [LoginController::class, 'CompanyLogin'])->name('Company.Login.Submit');
    Route::get('/SignUp-Form', SignupController::class, )->name('Company.SignUp');
    Route::post('/SignUp-Form/Submit', [SignupController::class, 'CompanySignup'])->name('Company.SignUp.Submit');
    Route::get('/Company-Dashboard', CompanyDashboard::class, )->name('Company.Dashboard')->middleware('Company');
    Route::get('/Company-LogOut', [LoginController::class, 'CompanyLogout'])->name('Company.Logout')->middleware('Company');
});


Route::prefix('JobSeeker')->group(function () {
    Route::get('/Login-Form', LoginController::class, )->name('JobSeeker.Login');
    Route::post('/Login-Form/Submit', [LoginController::class, 'JobSeekerLogin'])->name('JobSeeker.Login.Submit');
    Route::get('/SignUp-Form', SignupController::class, )->name('JobSeeker.SignUp');
    Route::post('/SignUp-Form/Submit', [SignupController::class, 'JobSeekerSignup'])->name('JobSeeker.SignUp.Submit');
    Route::get('/JobSeeker-Dashboard', JobSeekerDashboard::class, )->name('JobSeeker.Dashboard')->middleware('JobSeeker');
    Route::get('/JobSeeker-LogOut', [LoginController::class, 'JobSeekerLogout'])->name('JobSeeker.Logout')->middleware('JobSeeker');
});

Route::prefix('Employer')->group(function () {
    Route::get('/Login-Form', LoginController::class, )->name('Employer.Login');
    Route::post('/Login-Form/Submit', [LoginController::class, 'EmployerLogin'])->name('login.submit');
    Route::get('/SignUp-Form', SignupController::class, )->name('Employer.SignUp');
    Route::post('/SignUp-Form/Submit', [SignupController::class, 'EmployerSignup'])->name('Employer.SignUp.Submit');
    Route::get('/Employer-Dashboard', EmployerDashboard::class, )->name('Employer.Dashboard')->middleware('Employer');
    Route::post('/Employer-Company-Post', [EmployerDashboard::class, 'postCompany'])->name('Employer.CompanyPost')->middleware('Employer');
    Route::get('/Employer-Job-Post', JobsPost::class, )->name('Employer.JobPost')->middleware('Employer');
    Route::post('/Employer-Post-Job', [JobsPost::class, 'JobPost'])->name('Employer.PostJob')->middleware('Employer');
    Route::get('/Employer-Manage-Jobs', ManageJobs::class, )->name('Employer.ManageJobs')->middleware('Employer');
    Route::get('/Employer-Delete-Job/{id}', [ManageJobs::class, 'DeleteJob'])->name('Employer.DeleteJob')->middleware('Employer');
    Route::get('/Employer-LogOut', [LoginController::class, 'EmployerLogout'])->name('Employer.Logout')->middleware('Employer');
});

Route::get('/', HomePage::class, )->name('Frontend.index');
Route::get('/Jobs/Applied-Jobs', AppliedJobs::class, )->name('Frontend.appliedJobs');
Route::get('/Jobs/Jobs-List', JobListing::class, )->name('Frontend.JobListing');
Route::get('/Jobs/Jobs-List-Detail/{id}', JobListingDetail::class, )->name('Frontend.JobListingDetail');
