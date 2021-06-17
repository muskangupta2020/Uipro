<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

//***********************Admin********************//
//-------------Admin.index------------------//

//Admin Registration
Route::get('admin/register', 'AdminRegistrationController@create');
Route::post('admin/register/save', 'AdminRegistrationController@save');

//Admin Login
Route::get('admin', 'AdminloginController@create');
Route::get('admin/index', 'AdminloginController@dashboard');
Route::post('admin/login', 'AdminloginController@adminlogin');

//*********************Manage Plan****************//
//----------------create_plan------------------//
Route::get('admin/create_plan', 'ManagePlanController@create');
Route::post('admin/create_plan/save', 'ManagePlanController@save');
Route::get('admin/display_plan', 'ManagePlanController@display');
Route::get('admin/edit_plan/{id}', 'ManagePlanController@edit');
Route::post('admin/update/plan/{id}', 'ManagePlanController@update');
Route::get('admin/delete_plan/{id}', 'ManagePlanController@delete');
Route::get('admin/view_plan/{id}', 'ManagePlanController@view');

//-----------------Level completion level-----------------//
Route::get('admin/level_completion_income', 'LevelCompletionIncomeController@create');
Route::post('admin/level_completion_income/save', 'LevelCompletionIncomeController@save');
Route::get('admin/edit_level_completion_income/{id}', 'LevelCompletionIncomeController@edit');
Route::post('admin/update_level_completion_income/{id}', 'LevelCompletionIncomeController@update');
Route::get('admin/delete_level_completion_income/{id}', 'LevelCompletionIncomeController@delete');
/***********************************************************************************************/


//***********************Manage Categories******************************//
//----------------------For Product & Services----------------------------//
Route::get('admin/manage_categories', 'ManageProductController@create');
Route::post('admin/save_parent_category', 'ManageProductController@save_parent_category');
Route::get('admin/categories', 'ManageProductController@create_category');
Route::post('admin/save_category', 'ManageProductController@save_category');
Route::get('admin/display_category', 'ManageProductController@display_category');
Route::get('admin/sub_categories', 'ManageProductController@create_sub_category');
Route::post('admin/save_sub_category', 'ManageProductController@save_sub_category');
Route::get('admin/display_manage_category', 'ManageProductController@display_manage_category');
Route::get('admin/display_manage_subcategory', 'ManageProductController@display_manage_subcategory');
Route::get('admin/delete_category/{id}', 'ManageProductController@delete_category');


//for Add_Product
Route::get('admin/add_product', 'AddProductController@create');
Route::post('admin/add_product/save', 'AddProductController@save');
Route::get('admin/add_product/display', 'AddProductController@display');
Route::get('admin/delete_product/{id}', 'AddProductController@delete');


//-------------------Variation--------------------//
Route::get('admin/add_variation', 'AddVariationController@create');
Route::post('admin/variation/save', 'AddVariationController@save');
Route::get('admin/variation/display', 'AddVariationController@display');
Route::get('admin/delete_variation/{id}', 'AddVariationController@delete');
Route::get('admin/edit_variation/{id}', 'AddVariationController@edit');
Route::post('admin/variation_update', 'AddVariationController@variation_update');


//--------------------Search------------------//
Route::get('admin/search_product', 'SearchProductController@create');
Route::get('admin/search', 'SearchProductController@search');


//---------------------Order----------------//
Route::get('admin/pending_order', 'OrderController@pending_order');
Route::get('admin/delivered_order', 'OrderController@delivered_order');
Route::get('admin/completed_order', 'OrderController@completed_order');
Route::get('admin/all_order', 'OrderController@all_order');



//*************************Manage Member***********************//
//-----------------Manage Member----------------------//
Route::get('admin/list_member', 'ManageMemberController@list_member');
Route::get('admin/search_member', 'ManageMemberController@search_member');
Route::get('admin/blocked_member', 'ManageMemberController@blocked_member');
Route::get('admin/latest_member', 'ManageMemberController@latest_member');
Route::get('admin/display_blocked_member/{user_id}', 'ManageMemberController@display_blocked_member');
Route::get('admin/display_activate_member/{user_id}', 'ManageMemberController@display_activate_member');

//---------------------Epin------------------------//
Route::get('admin/generate_epin', 'EpinController@create');
Route::post('admin/generate_epin_by_plan/save', 'EpinController@ByPlan');
Route::post('admin/generate_epin_by_amount/save', 'EpinController@ByAmount');
Route::get('admin/request_epin', 'EpinController@request');
Route::get('admin/unused_epin', 'EpinController@unused_epin');
Route::get('admin/used_epin', 'EpinController@used_epin');
Route::get('admin/transfer_epin', 'EpinController@transfer');
Route::post('admin/transfer/save', 'EpinController@transfer_save');

//---------------------Earrings & Payout--------------------//
Route::get('admin/view_earning','EarningsController@view_earning');
Route::get('admin/search_earning','EarningsController@search_earning');
Route::get('admin/fund_request','EarningsController@fund');
Route::get('admin/hold_payment','EarningsController@hold_payment');
Route::get('admin/generate_payout','EarningsController@generate_payout');

//---------------------Member E-wallet------------------//

Route::get('admin/view_wallet','WalletController@view_wallet');
Route::get('admin/topup_wallet','WalletController@topup_wallet');
Route::get('admin/transfer_fund','WalletController@transfer_fund');
Route::get('admin/withdraw_fund','WalletController@withdraw_fund');
Route::get('admin/wallet_transaction','WalletController@wallet_transaction');

















//**********************User***********************//
Route::get('user/index', 'UserController@index');
Route::get('user/login', 'LoginController@Tologin');
Route::post('login/save', 'LoginController@login');
Auth::routes();
Route::get('/logout', 'UserController@logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('user/registration', 'UserRegistrationController@register');
Route::get('user/display', 'UserRegistrationController@display');
Route::post('user/registration/save', 'UserRegistrationController@save');
Route::get('user/vendor', 'UserRegistrationController@vendor');
Route::post('member/registration/save', 'UserRegistrationController@membersave');

























Route::get('/clear', function() { 
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('config:cache');
        Artisan::call('view:clear');
        Artisan::call('route:clear'); 
        return "Cleared!"; 
    });












































Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "Cleared!";
});
