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

// Route::get('/', function () {
//     return view('welcome');
// });

//***********************Admin********************//
//-------------Admin.index------------------//

//Admin Registration
Route::post('admin/login', 'AdminloginController@adminlogin');
Route::get('admin', 'AdminloginController@create');
Route::get('admin/register', 'AdminRegistrationController@create');
Route::post('admin/register/save', 'AdminRegistrationController@save');
Route::group(['middleware'=> ['admin']],function (){
Route::get('admin/logout', 'AdminloginController@logout');



//Admin Login

Route::get('admin/index', 'AdminloginController@dashboard');



// for Initiate the order
Route::post('/payment-initiate-request','DepositController@Initiate');

// for Payment complete
Route::post('/payment-complete','DepositController@Complete');
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
Route::get('admin/delete_subcategory/{id}','ManageProductController@delete_subcategory');


//for Add_Product
Route::get('admin/add_product','AddProductController@create');
Route::post('admin/add_product/save', 'AddProductController@save');
Route::get('admin/add_product/display', 'AddProductController@display');
Route::get('admin/delete_product/{id}', 'AddProductController@delete');
Route::get('admin/edit_product/{id}','AddProductController@edit');
Route::get('admin/featured_product/{id}','AddProductController@featured_product');
Route::get('admin/best_seller/{id}','AddProductController@best_seller');
Route::post('admin/update_product','AddProductController@update');


//-------------------Variation--------------------//
Route::get('admin/add_variation', 'AddVariationController@create');
Route::post('admin/variation/save', 'AddVariationController@save');
Route::get('admin/variation/display', 'AddVariationController@display');
Route::get('admin/delete_variation/{id}', 'AddVariationController@delete');
Route::get('admin/edit_variation/{id}', 'AddVariationController@edit');
Route::post('admin/variation_update', 'AddVariationController@variation_update');

//Blog
Route::get('admin/blog','IndexController@blog');
Route::post('admin/blog/save','IndexController@insert_blog');
Route::get('admin/edit_blog/{id}','IndexController@edit_blog');
Route::get('admin/delete_blog/{id}','IndexController@delete_blog');
Route::post('admin/update_blog','IndexController@update_blog');

//--------------------Search------------------//
Route::get('admin/search_product', 'SearchProductController@create');
Route::get('admin/search', 'SearchProductController@search');


//---------------------Order----------------//
Route::get('admin/pending_order', 'OrderController@pending_order');
Route::get('admin/delivered_order', 'OrderController@delivered_order');
Route::get('admin/completed_order', 'OrderController@completed_order');
Route::get('admin/all_order', 'OrderController@all_order');
Route::get('admin/pending_order/delete/{id}', 'OrderController@delete_pending_order');
Route::get('admin/delivered_order/delete/{id}', 'OrderController@delete_delivered_order');
Route::get('admin/completed_order/delete/{id}', 'OrderController@delete_completed_order');
Route::get('admin/all_order/delete/{id}', 'OrderController@delete_all_order');




//*************************Manage Member***********************//
//-----------------Manage Member----------------------//
Route::get('admin/list_member', 'ManageMemberController@list_member');
Route::get('admin/search_member', 'ManageMemberController@search_member');
Route::get('admin/blocked_member', 'ManageMemberController@blocked_member');
Route::get('admin/latest_member', 'ManageMemberController@latest_member');
Route::get('admin/display_blocked_member/{user_id}', 'ManageMemberController@display_blocked_member');
Route::get('admin/display_activate_member/{user_id}', 'ManageMemberController@display_activate_member');
Route::get('admin/view_member/{id}','ManageMemberController@view_member');
Route::get('admin/login_mail/{id}','ManageMemberController@login_mail');
Route::get('admin/edit_member/{id}','ManageMemberController@edit_member');
Route::post('member/update/save','ManageMemberController@update_member');

//---------------------Epin------------------------//
Route::get('admin/generate_epin', 'EpinController@create');
Route::post('admin/generate_epin_by_plan/save', 'EpinController@ByPlan');
Route::post('admin/generate_epin_by_amount/save', 'EpinController@ByAmount');
Route::get('admin/request_epin', 'EpinController@request');
Route::get('admin/request_epin/{epin_id}','EpinController@accept_epin');
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


//----------------MY PROFILE & SETTINGS-------------------//
Route::get('admin/reset_password_login','AdminProfileController@reset_password_login');
Route::post('admin/check','AdminProfileController@check');
Route::get('admin/reset_password','AdminProfileController@reset_password');
Route::post('admin/new_password','AdminProfileController@new_password');

//--------------Advance Setting-------------------//
Route::get('admin/advance_setting','AdvanceSettingController@advancesetting');

//-------------------------Bussiness Settings-----------------------//
Route::get('admin/welcome_letter','BussinessController@welcome_letter');

Route::post('admin/insert','BussinessController@insert');
Route::get('admin/payout_setting','BussinessController@payout_setting');

//--------------------Invoice------------------------//
Route::get('admin/invoice','InvoiceController@invoice');
Route::post('admin/save_invoice','InvoiceController@invoice_insert');
Route::get('admin/delete_invoice/{id}','InvoiceController@delete');
Route::get('admin/print_invoice/{id}','InvoiceController@print');
Route::get('admin/complete_status/{id}','InvoiceController@complete_status');
Route::get('admin/processing_status/{id}','InvoiceController@processing_status');
});

//---------------------Network----------------------//
Route::get('admin/user_tree','NetworkController@user_tree');
Route::get('admin/referred_member','NetworkController@referred_member');


//______________Report_____________________________//
Route::get('admin/payout_report','ReportController@payout_report');
Route::get('admin/tax_report','ReportController@tax_report');
Route::get('admin/product_sale_report','ReportController@product_sale_report');
Route::get('admin/vendor_sale_report','ReportController@vendor_sale_report');




//_________________________Settings Tickets_______________________//
Route::get('admin/unsolved_ticket','TicketController@unsolved_ticket');
Route::get('admin/resolved_ticket','TicketController@resolved_ticket');
Route::get('user/my_support','TicketController@my_support');
Route::post('user/my_support/save','TicketController@my_support_insert');
Route::get('user/delete_ticket_subject/{id}','TicketController@delete');
Route::get('admin/solv_status/{id}', 'TicketController@solve_status');
Route::get('admin/unsolv_status/{id}', 'TicketController@unsolve_status');





//----------------------Rewards------------------------//
Route::get('admin/pay_reward','RewardController@pay_reward');
Route::get('admin/search_reward','RewardController@search_reward');
Route::get('admin/reward_setting','RewardController@reward_setting');
Route::get('admin/rank_setting','RewardController@rank_setting');


//----------------------------Advt Income--------------------//
Route::get('admin/advt','AdvtController@create');
Route::post('admin/advt/save','AdvtController@save');
Route::get('admin/advt/edit/{id}','AdvtController@edit');
Route::get('admin/advt/delete/{id}','AdvtController@delete');
Route::post('admin/advt/update','AdvtController@update');



//------------------KYC--------------------------//
Route::get('admin/pending_kyc','KYCController@pending');
Route::get('admin/approve_kyc','KYCController@approve');
Route::get('admin/rejected_kyc','KYCController@rejected');
Route::get('admin/reject_status/{user_id}', 'KYCController@pending_status');
Route::get('admin/approv_status/{user_id}', 'KYCController@approve_status');


Route::get('admin/coupan','CoupanController@coupan');
Route::post('admin/coupan/save','CoupanController@insert_coupan');
Route::get('admin/edit_coupan/{id}','CoupanController@edit');
Route::get('admin/delete_coupan/{id}','CoupanController@delete');
Route::post('admin/update_coupan','CoupanController@update');
Route::get('admin/advance_coupan','CoupanController@advance_coupan');
Route::post('admin/advancecoupan/save','CoupanController@insert_advancecoupan');
Route::get('admin/delete_advancecoupan/{id}','CoupanController@advance_delete');


//_______________Deposit________________//
Route::get('admin/bank_money_request','DepositController@bank_money_request');

//_____________________Navbar_________________________//
Route::get('admin/navbar','NavbarController@create');
Route::post('admin/navbar/save','NavbarController@insert');
Route::get('admin/edit_navbar/{id}','NavbarController@edit');
Route::get('admin/delete_navbar/{id}','NavbarController@delete');
Route::post('admin/update_navbar','NavbarController@update');

//_____________________About_________________________//
Route::get('admin/about','AboutController@create');
Route::post('admin/about/save','AboutController@insert');
Route::get('admin/edit_about/{id}','AboutController@edit');
Route::get('admin/delete_about/{id}','AboutController@delete');
Route::post('admin/update_about','AboutController@update');
//_____________________About Us___________________________________//
Route::get('admin/about_us','AboutController@create_about_us');
Route::post('admin/about_us/save','AboutController@insert_about_us');
Route::get('admin/edit_about_us/{id}','AboutController@edit_about_us');
Route::get('admin/delete_about_us/{id}','AboutController@delete_about_us');
Route::post('admin/update_about_us','AboutController@update_about_us');
//_____________________Team_________________________//
Route::get('admin/team','AboutController@create_team');
Route::post('admin/team/save','AboutController@insert_team');
Route::get('admin/edit_team/{id}','AboutController@edit_team');
Route::get('admin/delete_team/{id}','AboutController@delete_team');
Route::post('admin/update_team','AboutController@update_team');

//____________________Carousel_______________________//
Route::get('admin/carousel','IndexController@create_carousel');
Route::post('admin/carousel/save','IndexController@insert_carousel');
Route::get('admin/edit_carousel/{id}','IndexController@edit_carousel');
Route::get('admin/delete_carousel/{id}','IndexController@delete_carousel');
Route::post('admin/update_carousel','IndexController@update_carousel');

//____________________shop category_______________________//
Route::get('admin/shop_cat','IndexController@create_category');
Route::post('admin/category/save','IndexController@insert_category');
Route::get('admin/edit_category/{id}','IndexController@edit_category');
Route::get('admin/delete_category/{id}','IndexController@delete_category');
Route::post('admin/update_category','IndexController@update_category');

//____________________Featured Products_______________________//
Route::get('admin/featured_product','IndexController@create_featured_product');
Route::get('admin/delete_featured_product/{id}','IndexController@delete_featured_product');
Route::get('admin/best_seller','IndexController@create_best_seller');
Route::get('admin/delete_best_seller/{id}','IndexController@delete_best_seller');

//__________________insta_product_________________________//
Route::get('admin/insta_product','IndexController@create_insta_product');
Route::post('admin/insta_product/save','IndexController@insert_insta_product');
Route::get('admin/edit_insta_product/{id}','IndexController@edit_insta_product');
Route::get('admin/delete_insta_product/{id}','IndexController@delete_insta_product');
Route::post('admin/update_insta_product','IndexController@update_insta_product');

//_____________________Footer___________________________________//
Route::get('admin/footer','FooterController@create');
Route::post('admin/footer/save','FooterController@insert');
Route::get('admin/edit_footer/{id}','FooterController@edit');
Route::get('admin/delete_footer/{id}','FooterController@delete');
Route::post('admin/update_footer','FooterController@update');
Route::get('admin/social_links','FooterController@link_create');
Route::post('admin/social/save','FooterController@save');
Route::get('social/edit/{id}', 'FooterController@Editsocial');
Route::get('social/delete/{id}', 'FooterController@Deletesocial');
Route::post('admin/social/update', 'FooterController@updatesocial');

//__________________Contact_Info_________________________//
Route::get('admin/contact_info','ContactController@create');
Route::post('admin/contact_info/save','ContactController@insert');
Route::get('admin/delete_contact_info/{id}','ContactController@delete');
Route::get('admin/contact_us','ContactController@contact_detail');
Route::post('admin/contact_us/save','ContactController@insert_contact_detail');
Route::get('admin/contact_us/display','ContactController@display');
Route::get('admin/delete_contact_us','ContactController@delete_contact_detail');

//deposit
Route::get('admin/rejected_status/{user_id}', 'DepositController@reject_status');
Route::get('admin/approve_status/{user_id}', 'DepositController@approve_status');

//withdrawpayout
Route::get('admin/withdraw_pay/{id}','WithdrawController@Initiate');
Route::post('/payment-complete','WithdrawController@Complete');

//**********************User***********************//
Route::get('user/index', 'UserController@done');
Route::get('auth/register','UserController@user_register');
Route::get('user/login', 'LoginController@Tologin');
Route::post('login/save', 'LoginController@login');
Auth::routes();
Route::group(['middleware' => ['auth']], function () {
Route::get('/logout', 'UserController@logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('user/registration', 'UserRegistrationController@register');
Route::get('user/display', 'UserRegistrationController@display');
Route::post('user/registration/save', 'UserRegistrationController@save');
Route::get('user/vendor', 'UserRegistrationController@vendor');
Route::post('member/registration/save', 'UserRegistrationController@membersave');

//_______________________My E-pins__________________________________//
Route::get('user/user_unused_epin','EpinController@user_unused_epin');
Route::get('user/user_used_epin','EpinController@user_used_epin');
Route::get('user/user_transfer_epin','EpinController@user_transfer_epin');
Route::post('user/user_ByPlan','EpinController@user_ByPlan');

//welcome letter
Route::get('user/show_letter','BussinessController@show_letter');
Route::get('user/display_letter/{id}','BussinessController@display_letter');

//________________________KYC Documents___________________________//
Route::get('user/kyc_document','KYCController@kyc');
Route::post('user/save_kyc','KYCController@save_kyc');
Route::get('user/kyc/display','KYCController@display');
Route::get('user/kyc_delete/{id}','KYCController@kyc_delete');
Route::post('user/update_kyc','KYCController@update_kyc');
Route::get('user/kyc_edit/{id}','KYCController@kyc_edit');

//Ticket
Route::get('user/delete_ticket/{id}','TicketController@delete_ticket');

//Report
Route::get('user/wallet_transaction','ReportController@wallet_transaction');
Route::get('user/user_payout_report','ReportController@user_payout_report');


//network
Route::get('user/mydownline_tree','NetworkController@downline_tree');
Route::get('user/direct_referrer_list','NetworkController@direct_referrer_list');

//__________________________Deposit__________________________//
Route::get('user/epin_deposit','DepositController@epin_deposit');
Route::get('user/bank_deposit','DepositController@bank_deposit');
Route::get('user/deposit_history','DepositController@deposit_history');
Route::post('user/check_kyc_details','DepositController@check_kyc_details');



//_______________________________Withdraw Payouts________________________//
Route::get('user/withdraw_payouts','WithdrawController@withdraw_payouts');
Route::post('user/save_withdraw','WithdrawController@save_withdraw');
Route::get('user/withdraw_history','WithdrawController@withdraw_history');

Route::post('user/funwallet','DepositController@fund_wallet');



//____________________USER PROFILE____________________//
Route::get('user/reset_password','UserProfileController@reset_password');
Route::post('user/check','UserProfileController@check');
Route::get('user/old_password','UserProfileController@old_password');
Route::post('user/new_password','UserProfileController@new_password');


//_______________Earnings____________________//
Route::get('user/my_earning','EarningsController@my_earning');
Route::get('user/my_deduction','EarningsController@my_deduction');
Route::get('user/user_search_earning','EarningsController@user_search_earning');
Route::get('user/my_reward','EarningsController@my_reward');



//__________________Myinvoice____________________________-//
Route::get('user/my_invoice','InvoiceController@my_invoice');
});












//FRONT//
Route::get('/','FrontController@index');
Route::get('front/contact_us','FrontController@contact_us');
Route::get('front/about','FrontController@about');
Route::get('front/shop/{id}','FrontController@shop');
Route::get('front/shop_detail/{id}','FrontController@shop_detail');
Route::get('front/service','FrontController@service');

//login
Route::post('front/login/save','FrontController@front_login_save');
Route::get('front/login','FrontController@front_login');
Route::get('front/logout','FrontController@front_logout');

//____________Cart_______________//
Route::get('front/cart','CartController@show_cart');
Route::get('front/wishlist','WishlistController@create');


Route::group(['middleware'=> ['front']],function (){
Route::get('add/to/cart/{id}','CartController@addtocart');
Route::get('add/to/cart_show','CartController@show_cart');
Route::get('cart/quantity_update/{id}/{p_Quantity}','CartController@quantity_update');
Route::get('front/delete_cart/{id}','CartController@delete_cart');
Route::get('front/checkout','CheckoutController@checkout');
// for Initiate the order
Route::post('front/checkout/save','CheckoutController@Initiates');
Route::get('front/my_account','MyAccountController@create');
Route::get('front/my_order/{id}','MyAccountController@my_order');
Route::get('front/invoice/{id}','MyAccountController@invoice');

// for Payment complete
// Route::post('/payment-completes','CheckoutController@Completes');
Route::post('payment/checkout','CheckoutController@pay');
Route::post('payment/status', 'CheckoutController@paymentCallback')->name('paytm.callback');
Route::get('front/thanks','CheckoutController@payment_success');
Route::get('front/failed','CheckoutController@payment_failed');
});

//For wishlist
Route::get('add/to/wishlist/{id}','WishlistController@addtowishlist');
Route::get('add/to/wishlist_show','WishlistController@show_wishlist');
Route::get('front/delete_wishlist/{id}','WishlistController@delete_wishlist');
















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
