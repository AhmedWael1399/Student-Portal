<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/loginPage', function () {
    if (session()->has('username')) {
        if (session('userType') == "teacher") {
            return redirect('showTeacherStudents');
        } else if (session('userType') == "admin") {
            return view('adminProfile');
        } else if (session('userType') == "student") {
            return redirect('viewRegisteredCourses');
        }
    }
    return view('loginPage');
});

Route::get('/logout', function () {
    if (session()->has('username')) {
        session()->pull('username');
        session()->pull('userType');
    }
    return redirect('loginPage');
});

Route::get('/registerChoice', function () {
    return view('registerChoice');
});

Route::get('/teacherRegisterAccount', function () {
    return view('teacherRegisterAccount');
});

Route::get('/registerAccount', function () {
    return view('registerAccount');
});

Route::get('/adminProfile', function () {
    return view('adminProfile');
});

Route::get('/addCourse', function () {
    return view('addCourse');
});

Route::get('/teacherRegister', function () {
    return view('teacherRegister');
});

Route::get('/editChoice', function () {
    return view('editChoice');
});

Route::get('/studentEditForm', function () {
    return view('studentEditForm');
});

Route::get('/teacherEditForm', function () {
    return view('teacherEditForm');
});

Route::get('/courseEditForm', function () {
    return view('courseEditForm');
});

Route::get('/DeleteForm', function () {
    return view('DeleteForm');
});

Route::get('/viewChoice', function () {
    return view('viewChoice');
});

Route::get('/advancedSearchForm', function () {
    return view('advancedSearchForm');
});

Route::get('/searchView', function () {
    return view('searchView');
});

Route::get('/studentProfile', function () {
    return view('studentProfile');
});

Route::get('/enrollForm', function () {
    return view('enrollForm');
});

Route::get('/videosPage', function () {
    return view('videosPage');
});

Route::get('/teacherProfile', function () {
    return view('teacherProfile');
});

Route::get('/editGrades', function () {
    return view('editGrades');
});


Route::get('/uploadVideoForm', function () {
    return view('uploadVideoForm');
});

Route::get('/studentsTable', function () {
    return view('studentsTable');
});

Route::get('/teachersTable', function () {
    return view('teachersTable');
});

Route::get('/coursesTable', function () {
    return view('coursesTable');
});

Route::post('getLoginInfo', [userController::class, 'getLoginInfo']);

Route::post('chooseAccountRegisterType', [userController::class, 'chooseAccountRegisterType']);

Route::post('getRegisterInfo', [userController::class, 'getRegisterInfo']);

Route::post('getTeacherAccountRegisterInfo', [userController::class, 'getTeacherAccountRegisterInfo']);

Route::post('getCourseRegisterInfo', [userController::class, 'getCourseRegisterInfo']);

Route::post('getTeacherRegisterInfo', [userController::class, 'getTeacherRegisterInfo']);

Route::post('edit', [userController::class, 'edit']);

Route::post('studentEdit', [userController::class, 'studentEdit']);

Route::post('teacherEdit', [userController::class, 'teacherEdit']);

Route::post('courseEdit', [userController::class, 'courseEdit']);

Route::post('delete', [userController::class, 'delete']);

Route::post('view', [userController::class, 'view']);

Route::post('advancedSearch', [userController::class, 'advancedSearch']);

Route::get('viewRegisteredCourses', [userController::class, 'viewRegisteredCourses']);

Route::post('enroll', [userController::class, 'enroll']);

Route::get('/showTeacherStudents', [userController::class, 'showTeacherStudents']);

Route::post('editedGrades', [userController::class, 'editedGrades']);

Route::post('getVideoRegisterInfo', [userController::class, 'getVideoRegisterInfo']);

Route::get('/viewCourseVideos/{cid}', [userController::class, 'viewCourseVideos']);
