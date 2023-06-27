<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminAdd;
use App\Http\Controllers\AdminManage;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [BaseController::class, 'home']);
Route::get('/pcocars', [BaseController::class, 'pcocars']);
Route::get('/help', [BaseController::class, 'help']);
Route::get('/apply', [BaseController::class, 'apply']);
Route::post('/submitcontactform', [BaseController::class, 'submitContactForm']);
Route::get('/cardetails/{id}', [BaseController::class, 'cardetails']);


// for admin
Route::get('/admin', [AdminController::class, 'index'])->name('login');
Route::post('/admin', [AdminController::class, 'makeLogin']);
Route::post('/logout', [AdminController::class, 'destroy']);

Route::group(['middleware' => 'disable_back_btn'], function () {

Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard']);

// for admin home section
Route::get('/homefirstsection', [AdminAdd::class, 'addFirstSection']);
Route::post('/homefirstsection', [AdminAdd::class, 'submitFirstSection']);
Route::get('/mamagehomefirstsection', [AdminManage::class, 'manageFirstSection']);
Route::get('/homefirstsection/{id}/edit', [AdminManage::class, 'editFirstSection']);
Route::put('/homefirstsection/{id}/update', [AdminManage::class, 'updateFirstSection']);
Route::get('/homefirstsection/{id}/delete', [AdminManage::class, 'deleteHomeFirstSection']);

Route::get('/homesecondsection', [AdminAdd::class, 'addSecondSection']);
Route::post('/homesecondsection', [AdminAdd::class, 'submitSecondSection']);
Route::get('/managehomesecondsection', [AdminManage::class, 'mamageSecondSection']);
Route::get('/homesecondsection/{id}/edit', [AdminManage::class, 'editSecondSection']);
Route::put('/homesecondsection/{id}/update', [AdminManage::class, 'updateSecondSection']);
Route::get('/homesecondsection/{id}/delete', [AdminManage::class, 'deleteHomeSecondSection']);


Route::get('/homethirdsection', [AdminAdd::class, 'addThirdSection']);
Route::post('/homethirdsection', [AdminAdd::class, 'submitThirdSection']);
Route::get('/managehomethirdsection', [AdminManage::class, 'manageThirdSection']);
Route::get('/homethirdsection/{id}/edit', [AdminManage::class, 'editThirdSection']);
Route::put('/homethirdsection/{id}/update', [AdminManage::class, 'updateThirdSection']);
Route::get('/homethirdsection/{id}/delete', [AdminManage::class, 'deleteHomeThirdSection']);

Route::get('/homefourthsection', [AdminAdd::class, 'addFourthSection']);
Route::post('/homefourthsection', [AdminAdd::class, 'submitFourthSection']);
Route::get('/managehomefourthsection', [AdminManage::class, 'manageFourthSection']);
Route::get('/homefourthsection/{id}/edit', [AdminManage::class, 'editFourthSection']);
Route::put('/homefourthsection/{id}/update', [AdminManage::class, 'updateFourthSection']);
Route::get('/homefourthsection/{id}/delete', [AdminManage::class, 'deleteHomeFourthSection']);

Route::get('/homefifthsection', [AdminAdd::class, 'addFifthSection']);
Route::post('/homefifthsection', [AdminAdd::class, 'submitFifthSection']);
Route::get('/managehomefifthsection', [AdminManage::class, 'manageFifthSection']);
Route::get('/homefifthsection/{id}/edit', [AdminManage::class, 'editFifthSection']);
Route::put('/homefifthsection/{id}/update', [AdminManage::class, 'updateFifthSection']);
Route::get('/homefifthsection/{id}/delete', [AdminManage::class, 'deleteHomeFifthSection']);

Route::get('/homesixthsection', [AdminAdd::class, 'addSixthSection']);
Route::post('/homesixthsection', [AdminAdd::class, 'submitSixthSection']);
Route::get('/managehomesixthsection', [AdminManage::class, 'manageSixthSection']);
Route::get('/homesixthsection/{id}/edit', [AdminManage::class, 'editSixthSection']);
Route::put('/homesixthsection/{id}/update', [AdminManage::class, 'updateSixthSection']);
Route::get('/homesixthsection/{id}/delete', [AdminManage::class, 'deleteHomeSixthSection']);



// for admin pco cars section
Route::get('/pcocarsfirstsection', [AdminAdd::class, 'addpcocarsFirstSection']);
Route::post('/pcocarsfirstsection', [AdminAdd::class, 'submitpcocarsFirstSection']);
Route::get('/managepcocarsfirstsection', [AdminManage::class, 'managepcocarsFirstSection']);
Route::get('/pcofirstsection/{id}/edit', [AdminManage::class, 'editpcocarsFirstSection']);
Route::put('/pcofirstsection/{id}/update', [AdminManage::class, 'updatepcocarsFirstSection']);
Route::get('/pcofirstsection/{id}/delete', [AdminManage::class, 'deletepcocarsFirstSection']);

Route::get('/pcocarssecondsection', [AdminAdd::class, 'addpcocarsSecondsection']);
Route::post('/pcocarssecondsection', [AdminAdd::class, 'submitpcocarsSecondSection']);
Route::get('/managepcocarssecondsection', [AdminManage::class, 'managepcocarssecondsection']);
Route::get('/viewpcocarimages/{id}/view', [AdminManage::class, 'manageviewpcocarimages'])->name('viewpcocarimages');
Route::get('/pcocarssecondsection/{id}/edit', [AdminManage::class, 'editpcocarssecondsection']);
Route::get('pcocarsimages/{id}/edit/{pcocarsid}', [AdminManage::class, 'editpcocarsimages'])->name('pcocarsimages.edit');
Route::put('/pcocarssecondsection/{id}/update', [AdminManage::class, 'updatepcocarssecondsection']);
Route::put('/pcocarimage/{id}/update/{pcocarsid}', [AdminManage::class, 'updatepcocarimage']);
Route::get('/pcocarssecondsection/{id}/delete', [AdminManage::class, 'deletepcocarssecondsection']);
Route::get('/pcocarimage/{id}/delete/{pcocarsid}', [AdminManage::class, 'deletepcocarimage']);

Route::get('/pcocarsthirdsection', [AdminAdd::class, 'addpcocarsThirdsection']);
Route::post('/pcocarsthirdsectionhead', [AdminAdd::class, 'submitpcocarsThirdsectionHead']);
Route::post('/pcocarsthirdsection', [AdminAdd::class, 'submitpcocarsThirdsection']);
Route::get('/managepcocarsthirdsection', [AdminManage::class, 'managepcocarsThirdsection']);
Route::get('/pcocarsthirdsectionhead/{id}/edit', [AdminManage::class, 'editpcocarsThirdsectionhead']);
Route::get('/pcocarsthirdsection/{id}/edit', [AdminManage::class, 'editpcocarsThirdsection']);
Route::put('/pcocarsthirdsectionhead/{id}/update', [AdminManage::class, 'updatepcocarsthirdsectionhead']);
Route::put('/pcocarsthirdsection/{id}/update', [AdminManage::class, 'updatepcocarsthirdsection']);
Route::get('/pcocarsthirdsection/{id}/delete', [AdminManage::class, 'deletepcocarsthirdsection']);
Route::get('/pcocarsthirdsectionhead/{id}/delete', [AdminManage::class, 'deletepcocarsthirdsectionhead']);

Route::get('/pcocardetailsaboutsection', [AdminAdd::class, 'addpcocardetailsaboutsection']);
Route::post('/pcocardetailsaboutsection', [AdminAdd::class, 'submitpcocardetailsaboutsection']);
Route::get('/managepcocardetailsaboutsection', [AdminManage::class, 'managepcocardetailsaboutsection']);
Route::get('/pcocarsaboutsection/{id}/edit', [AdminManage::class, 'editpcocarsAboutsection']);
Route::put('/pcocarsaboutsection/{id}/update', [AdminManage::class, 'updatepcocarsAboutsection']);
Route::get('/pcocarsaboutsection/{id}/delete', [AdminManage::class, 'deletepcocarsAboutsection']);

Route::get('/pcocardetailsfeaturesection', [AdminAdd::class, 'addpcocardetailsfeaturesection']);
Route::post('/pcocarsfeaturesection', [AdminAdd::class, 'submitpcocarsfeaturesection']);
Route::get('/managepcocarsfeaturesection', [AdminManage::class, 'managepcocarsfeaturesection']);
Route::get('/viewfeatures/{id}/view', [AdminManage::class, 'managepcocarsfeatures'])->name('viewpcocarfeatures');
Route::get('/pcocarsfeature/{id}/edit/{pcocarsid}', [AdminManage::class, 'editpcocarsfeature'])->name('editpcocarfeatures');
Route::put('/pcocarsfeature/{id}/update/{pcocarid}', [AdminManage::class, 'updatepcocarsfeature']);
Route::get('/pcocarsfeature/{id}/delete/{pcocarsid}', [AdminManage::class, 'deletepcocarsfeature'])->name('deletepcocarfeatures');

Route::get('/pcocardetailscontactsection', [AdminAdd::class, 'addpcocardetailscontactsection']);
Route::post('/pcocardetailscontactsection', [AdminAdd::class, 'submitpcocardetailscontactsection']);
Route::get('/managepcocardetailscontactsection', [AdminManage::class, 'managepcocardetailscontactsection']);
Route::get('/pcocarscontactsection/{id}/edit', [AdminManage::class, 'editpcocardetailscontactsection']);
Route::put('/pcocarscontactsection/{id}/update', [AdminManage::class, 'updatepcocardetailscontactsection']);
Route::get('/pcocarscontactsection/{id}/delete', [AdminManage::class, 'deletepcocarscontactsection']);

// help section
Route::get('/helpsection', [AdminAdd::class, 'addhelpsection']);
Route::post('/helpsection1', [AdminAdd::class, 'submithelpsection1']);
Route::post('/helpsection2', [AdminAdd::class, 'submithelpsection2']);
Route::get('/managehelpfirstsection', [AdminManage::class, 'managehelpfirstsection']);
Route::get('/helpfirstsection/{id}/edit', [AdminManage::class, 'edithelpfirstsection']);
Route::put('/helpfirstsection/{id}/update', [AdminManage::class, 'updatehelpfirstsection']);
Route::get('/helpfirstsection/{id}/delete', [AdminManage::class, 'deletehelpfirstsection']);
Route::get('/helpsecondsection/{id}/edit', [AdminManage::class, 'edithelpsecondsection']);
Route::put('/helpsecondsection/{id}/update', [AdminManage::class, 'updatehelpsecondsection']);
Route::get('/helpsecondsection/{id}/delete', [AdminManage::class, 'deletehelpsecondsection']);

// apply page
// first section
Route::get('/applyfirstsection', [AdminAdd::class, 'addapplyfirstsection']);
Route::post('/applyfirstsection', [AdminAdd::class, 'submitapplyfirstsection']);
Route::get('/manageapplyfirstsection', [AdminManage::class, 'manageapplyfirstsection']);
Route::get('/applyfirstsection/{id}/edit', [AdminManage::class, 'editapplyfirstsection']);
Route::put('/applyfirstsection/{id}/update', [AdminManage::class, 'updateapplyfirstsection']);
Route::get('/applyfirstsection/{id}/delete', [AdminManage::class, 'deleteapplyfirstsection']);

// contact section
Route::get('/getcontactdetails', [AdminManage::class, 'getcontactformData']);
Route::get('/contact/{id}/delete', [AdminManage::class, 'deletecontact']);
Route::get('/allontactsdelete', [AdminManage::class, 'allontactsdelete']);

// footer section
Route::get('/footersection', [AdminAdd::class, 'addfootersection']);
Route::post('/submitabout', [AdminAdd::class, 'submitAbout']);
Route::post('/submitcontact', [AdminAdd::class, 'submitContact']);
Route::post('/submitnewsletter', [AdminAdd::class, 'submitNewsletter']);
Route::post('/submitfollowus', [AdminAdd::class, 'submitfollowus']);
Route::post('/submitcopyright', [AdminAdd::class, 'submitcopyright']);

Route::get('/managefootersection', [AdminManage::class, 'managefootersection']);
Route::get('/footerabout/{id}/edit', [AdminManage::class, 'editfooterabout']);
Route::put('/footerabout/{id}/update', [AdminManage::class, 'updatefooterabout']);
Route::get('/footerabout/{id}/delete', [AdminManage::class, 'deletefooterabout']);

Route::get('/footercontact/{id}/edit', [AdminManage::class, 'editfootercontact']);
Route::put('/footercontact/{id}/update', [AdminManage::class, 'updatefootercontact']);
Route::get('/footercontact/{id}/delete', [AdminManage::class, 'deletefootercontact']);

Route::get('/footernewsletter/{id}/edit', [AdminManage::class, 'editfooternewsletter']);
Route::put('/footernewsletter/{id}/update', [AdminManage::class, 'updatefooternewsletter']);
Route::get('/footernewsletter/{id}/delete', [AdminManage::class, 'deletefooternewsletter']);

Route::get('/footerfollowus/{id}/edit', [AdminManage::class, 'editfooterfollowus']);
Route::put('/footerfollowus/{id}/update', [AdminManage::class, 'updatefooterfollowus']);
Route::get('/footerfollowus/{id}/delete', [AdminManage::class, 'deletefooterfollowus']);

Route::get('/footercopyright/{id}/edit', [AdminManage::class, 'editfootercopyright']);
Route::put('/footercopyright/{id}/update', [AdminManage::class, 'updatefootercopyright']);
Route::get('/footercopyright/{id}/delete', [AdminManage::class, 'deletefootercopyright']);

// end admin

});

});

