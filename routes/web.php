<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/* 🧩 BÀI 04: One To Many (Category - Product)
   ------------------------------------------------------------
   Các route dưới đây dùng để quản lý sản phẩm và danh mục
*/
Route::get('/', function () {
    return redirect('/products');
});

Route::get('/products', [ProductController::class, 'index']);

// Hiển thị form thêm sản phẩm
Route::get('/products/create', [ProductController::class, 'create']);

// Xử lý lưu sản phẩm mới
Route::post('/products', [ProductController::class, 'store']);

// Hiển thị form chỉnh sửa
Route::get('/products/{id}/edit', [ProductController::class, 'edit']);

// Cập nhật sản phẩm
Route::put('/products/{id}', [ProductController::class, 'update']);

// Xóa sản phẩm
Route::delete('/products/{id}', [ProductController::class, 'destroy']);


/* 🧩 BÀI 05: One To One (User - Profile)
   ------------------------------------------------------------
   Các route liên quan đến hiển thị danh sách User và Profile
*/
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return redirect('/students');
});

Route::get('/students', [StudentController::class, 'index']);


/* 🧩 BÀI 05 TIẾP (UserController - Profile)
   ------------------------------------------------------------
   Route hiển thị thông tin user và profile kèm nhau
*/
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return redirect('/users');
});

Route::get('/users', [UserController::class, 'index']);


/* 🧩 BÀI 06: Quan hệ Eloquent nâng cao (OneToOne, OneToMany, ManyToMany)
   ------------------------------------------------------------
   Dùng để hiển thị toàn bộ quan hệ trong 1 trang tổng hợp
*/
use App\Http\Controllers\RelationshipController;

Route::get('/', function () {
    return redirect('/relationships');
});

Route::get('/relationships', [RelationshipController::class, 'index']);


// Bài 8: Query Builder nâng cao
use App\Http\Controllers\QueryController;

Route::get('/', function () {
    return redirect('/queries/products');
});

Route::get('/queries/products', [QueryController::class, 'expensiveProducts']);
Route::get('/queries/categories', [QueryController::class, 'categoryCount']);
Route::get('/queries/students', [QueryController::class, 'studentCourses']);

