<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\LoginSignupController;
use App\Http\Controllers\HomeMainController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\ContactController;
use App\http\Controllers\DisplayProductController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\AdminMainController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminCustomerController;
use App\Http\Controllers\AdminBranchController;
use App\Http\Controllers\AdminInvicechController;
use App\Http\Controllers\AdminProductShopController;
use App\Http\Controllers\AdminPromotionController;
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
    return view('Home.home');
});

//Route::get('/branch');

Route::get('/province', function(){
    $province = DB::select('Call CommunesView("GET_ALL", "", "", "", "", "")');
    dd($province);
});

Route::get('/branch', [BranchController::class, 'index'])->name('branch');
Route::get('/getbranch', [BranchController::class, 'getBranch'])->name('getbranch');
Route::get('/login', [LoginSignupController::class, 'index']);
Route::get('/getcountrysign', [LoginSignupController::class, 'getCountry'])->name('getcountrysign');
Route::post('/login', [LoginSignupController::class, 'login'])->name('login');
Route::post('/signup', [LoginSignupController::class, 'signup'])->name('signup');
Route::post('/getprovincesign', [LoginSignupController::class, 'getProvince'])->name('getprovincesign');
Route::post('/getdistrictsign', [LoginSignupController::class, 'getDistrict'])->name('getdistrictsign');
Route::post('/getcommunessign', [LoginSignupController::class, 'getCommnues'])->name('getcommunessign');
Route::post('/getvillagessign', [LoginSignupController::class, 'getVillages'])->name('getvillagessign');

Route::get('/home', [HomeMainController::class, 'index'])->name('home');
Route::get('/gotobrand', [HomeMainController::class, 'gotoBrand'])->name('gotobrand');
Route::get('/getcategoryhome', [HomeMainController::class, 'getCategory'])->name('getcategoryhome');
Route::post('/getitembcat', [HomeMainController::class, 'getItemBCat'])->name('getitembcat');
Route::post('/getfavorite', [HomeMainController::class, 'getFavorite'])->name('getfavorite');
Route::post('/addfavorite', [HomeMainController::class, 'addFavorite'])->name('addfavorite');
Route::post('/deletefavorite', [HomeMainController::class, 'deleteFavorite'])->name('deletefavorite');
Route::post('/insertinvoice', [HomeMainController::class, 'insertInvoice'])->name('insertinvoice');
Route::post('/getorderline', [HomeMainController::class, 'getOrderLine'])->name('getorderline');


Route::get('/category/{id}', [CategoryController::class, 'index']);
Route::get('/categoryid/{id}', [CategoryController::class, 'indexId']);
Route::post('/categoryall', [CategoryController::class, 'getAll'])->name('categoryall');
Route::post('/categoryBid', [CategoryController::class, 'getBID'])->name('categoryBid');
Route::post('/categoryper', [CategoryController::class, 'getPer'])->name('categoryper');


Route::get('/feature', [FeatureController::class, 'index'])->name('feature');



Route::get('/contact', [ContactController::class, 'index'])->name('contact');



// Route::get('/displayproduct', [DisplayProductController::class, 'index'])->name('displayproduct');
Route::get('/displayproductid/{id}', [DisplayProductController::class, 'index']);
Route::post('getdisplaypro', [DisplayProductController::class, 'getDsiplay'])->name('getdisplaypro');
Route::post('/getfeaturepros', [DisplayProductController::class, 'getFeature'])->name('getfeaturepros');




Route::get('/adminlogin', [LoginAdminController::class, 'index'])->name('adminlogin');
Route::post('/getlogin', [LoginAdminController::class, 'getLogin'])->name('getlogin');


Route::get('/admin', [AdminMainController::class, 'index'])->name('admin');



Route::get('/admindashboard', [AdminDashboardController::class, 'index'])->name('admindashboard');
Route::post('/getorder', [AdminDashboardController::class, 'getOrder'])->name('getorder');



Route::get('/adminproduct', [AdminProductController::class, 'index'])->name('adminproduct');
Route::post('/getall', [AdminProductController::class, 'getAll'])->name('getall');
Route::post('/getbyid', [AdminProductController::class, 'getById'])->name('getbyid');
Route::post('/insertpro', [AdminProductController::class, 'insert'])->name('insertpro');
Route::post('/updatepro', [AdminProductController::class, 'update'])->name('updatepro');
Route::post('/deletepro', [AdminProductController::class, 'delete'])->name('deletepro');
Route::post('/getprocategory', [AdminProductController::class, 'getCategory'])->name('getprocategory');
Route::post('/getprocategoryid', [AdminProductController::class, 'getCategoryId'])->name('getprocategoryid');
Route::post('/insertcate', [AdminProductController::class, 'insertCate'])->name('insertcate');
Route::post('/updatecate', [AdminProductController::class, 'updateCate'])->name('updatecate');
Route::post('/deletecate', [AdminProductController::class, 'deleteCate'])->name('deletecate');
Route::post('/getsubcate', [AdminProductController::class, 'getSubCate'])->name('getsubcate');
Route::post('/getsubby', [AdminProductController::class, 'getSubBy'])->name('getsubby');
Route::post('/insertsub', [AdminProductController::class, 'insertSub'])->name('insertsub');
Route::post('/updatesub', [AdminProductController::class, 'updateSub'])->name('updatesub');
Route::post('/deletesub', [AdminProductController::class, 'deleteSub'])->name('deletesub');



Route::get('/admincustomer', [AdminCustomerController::class, 'index'])->name('admincustomer');
Route::post('/getcustomercus', [AdminCustomerController::class, 'getCustomer'])->name('getcustomercus');
Route::post('/getcustomeridcus', [AdminCustomerController::class, 'getCustomerId'])->name('getcustomeridcus');


Route::get('/adminbranch', [AdminBranchController::class, 'index'])->name('adminbranch');
Route::post('/getbranchad', [AdminBranchController::class, 'getBranch'])->name('getbranchad');
Route::post('/getbranchidad', [AdminBranchController::class, 'getBranchId'])->name('getbranchidad');
Route::post('/insertbranch', [AdminBranchController::class, 'insertBranch'])->name('insertbranch');
Route::post('/insertimagebad', [AdminBranchController::class, 'insertImage'])->name('insertimagebad');
Route::post('/updatebranchbad', [AdminBranchController::class, 'updateBranch'])->name('updatebranchbad');
Route::post('/deletebranchbad', [AdminBranchController::class, 'deleteBranch'])->name('deletebranchbad');


Route::get('/admininvoice', [AdminInvicechController::class, 'index'])->name('admininvoice');
Route::post('/getallinvoice', [AdminInvicechController::class, 'getAll'])->name('getallinvoice');
Route::post('/getbidinvoice', [AdminInvicechController::Class, 'getBID'])->name('getbidinvoice');
Route::post('/getitembyinvoice', [AdminInvicechController::class, 'getItemByInvoice'])->name('getitembyinvoice');



Route::get('/adminproductshop', [AdminProductShopController::class, 'index'])->name('adminproductshop');
Route::post('/getproductshop', [AdminProductShopController::class, 'getAll'])->name('getproductshop');
Route::post('/getproductshopid', [AdminProductShopController::class, 'getBID'])->name('getproductshopid');
Route::post('/insertproductshop', [AdminProductShopController::class, 'insert'])->name('insertproductshop');
Route::post('/updateproductshop', [AdminProductShopController::class, 'update'])->name('updateproductshop');
Route::post('/deleteproductshop', [AdminProductShopController::class, 'delete'])->name('deleteproductshop');
Route::post('/insertproductimage', [AdminProductShopController::class, 'inserti'])->name('insertproductimage');
Route::post('/prosea', [AdminProductShopController::class, 'prosea'])->name('prosea');
Route::post('/presea', [AdminProductShopController::class, 'presea'])->name('presea');
Route::post('/stasea', [AdminProductShopController::class, 'stasea'])->name('stasea');


Route::get('/adminpromotion', [AdminPromotionController::class, 'index']);
Route::post('/getpromotion', [AdminPromotionController::class, 'getPromo'])->name('getpromotion');
Route::post('/getpromotionidad', [AdminPromotionController::class, 'getPromoId'])->name('getpromotionidad');
Route::post('/insertpromotion', [AdminPromotionController::class, 'insertPromo'])->name('insertpromotion');
Route::post('/insertimagepromo', [AdminPromotionController::class, 'insertImage'])->name('insertimagepromo');
Route::post('/updatepromotion', [AdminPromotionController::class, 'updatePromo'])->name('updatepromotion');
Route::post('/deletepromotion', [AdminPromotionController::class, 'deletePromo'])->name('deletepromotion');