<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HomeComponent;
use App\Livewire\ShopComponent;
use App\Livewire\CategoryFilterComponent;

use App\Livewire\Admin\AdminDashboardComponent;
use App\Livewire\Admin\AdminCategoryComponent;
use App\Livewire\Admin\AdminAddCategoryComponent;
use App\Livewire\Admin\AdminEditCategoryComponent;
use App\Livewire\Admin\AdminProductComponent;
use App\Livewire\Admin\AdminAddProductComponent;
use App\Livewire\Admin\AdminEditProductComponent;
use App\Livewire\super\SuperAdminUserComponent;
use App\Livewire\super\SuperAdminAddUserComponent;
use App\Livewire\super\SuperAdminEditUserComponent;


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

/*Route::get('/', function () {
    return view('layouts.home');
});*/



Route::get('/',HomeComponent::class)->name('home');
Route::get('/shop',ShopComponent::class)->name('shop');
Route::get('/category/{category_id}',CategoryFilterComponent::class)->name('category');

Route::middleware(['auth'])->group(function () {
   
    Route::get('/dash',AdminDashboardComponent::class)->name('adminDashboard');

    Route::get('/admin/category',AdminCategoryComponent::class )->name('adminCategory');

    Route::get('/admin/addCategory',AdminAddCategoryComponent::class)->name('adminAddCategory');

    Route::get('/admin/editCategory/{category_id}', AdminEditCategoryComponent::class)->name('adminEditCategory');

    Route::get('/admin/product',AdminProductComponent::class )->name('adminProduct');

    Route::get('/admin/addProduct',AdminAddProductComponent::class)->name('adminAddProduct');

    Route::get('/admin/editProduct/{product_id}', AdminEditProductComponent::class)->name('adminEditProduct');
   
});

Route::middleware(['auth','role:SuperAdmin'])->group(function () {
   
   

    Route::get('/superadmin/user',SuperAdminUserComponent::class)->name('superadminUser');
    Route::get('/superadmin/addUser',SuperAdminAddUserComponent::class)->name('superadminAddUser');
    Route::get('/superadmin/editUser/{user_id}', SuperAdminEditUserComponent::class)->name('superadminEditUser'); 
   
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
