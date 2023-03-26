<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsDashboard;
use App\Http\Controllers\WebsitController;
use App\Models\Projects;
use App\Models\ProjectsBiddig;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

// Website Pages
Route::get('/', function () {
    $user = User::where('role', '2')->get();
    $userproject = Projects::paginate(6);
    return view('users.home', compact('user', 'userproject'));
});
Route::get('/about', function () {
    $title = "About us";
    return view('users.about', compact('title'));
});
Route::get('/single/{id}', function ($id) {
    $title = "Project Detail";
    $project = Projects::where('id', $id)->first();
    return view('users.single', compact('title', 'project'));
});
Route::get('/bid/{id}', function ($id) {
    $title = "Project Bid Detail";
    $project = Projects::where('id', $id)->first();
    return view('users.bid', compact('title', 'project', 'id'));
});
Route::get('/contracts', function () {

    $title = "Contract Catalog";
    $userproject = Projects::paginate(6);
    return view('users.contract', compact('title','userproject'));
});
Route::get('/contractors', function () {

    $title = "Register Contractors";
    $user = User::where('role', '2')->get();

    return view('users.contractors', compact('title','user'));
});
Route::get('/contact', function () {

    $title = "Contac Us";
    return view('users.contact', compact('title'));
});


// Admin Panel Pages
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::Post('/addBidding', [WebsitController::class, 'addBid'])->name('addBid');
Route::Post('/addcontact', [WebsitController::class, 'addcontact'])->name('addcontact');


Route::get('/commerical', [ProjectsDashboard::class, 'projectCom'])->name('projectCom');
Route::get('/commerical-create', [ProjectsDashboard::class, 'projectComCreate'])->name('projectComCreate');
Route::post('/commerical-add', [ProjectsDashboard::class, 'projectComAdd'])->name('projectComAdd');

// Delete and Edit Globally
Route::get('/deleteprojects/{id}', [ProjectsDashboard::class, 'deleteProject'])->name('deleteProject');
Route::get('/projectedit/{id}/{is_commerical}/{is_residential}/{is_maintaning}/{is_retrofitting}', [ProjectsDashboard::class, 'projectedit'])->name('projectedit');

Route::get('/residential', [ProjectsDashboard::class, 'residential'])->name('residential');
Route::get('/residential-create', [ProjectsDashboard::class, 'residentialCreate'])->name('residentialCreate');
Route::get('/residential-add', [ProjectsDashboard::class, 'residentialAdd'])->name('residentialAdd');



Route::get('/maintaning', [ProjectsDashboard::class, 'projectmaintaning']);
Route::get('/maintaning-create', [ProjectsDashboard::class, 'projectmaintaningCreate']);



Route::get('/plumbing', [ProjectsDashboard::class, 'projectplumbing']);
Route::get('/plumbing-create', [ProjectsDashboard::class, 'projectplumbingCreate']);

Route::get('/Retrofitting', [ProjectsDashboard::class, 'projectRetrofitting']);
Route::get('/Retrofitting-create', [ProjectsDashboard::class, 'projectRetrofittingcreate']);

Route::get('/my-project-bidding', [ProjectsDashboard::class, 'myprojectbidding']);
Route::get('/project-bidding', [ProjectsDashboard::class, 'projectbidding']);
Route::get('/profile', [ProjectsDashboard::class, 'profile']);
Route::post('/profileadd', [ProjectsDashboard::class, 'profileadd']);
