<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Student;

class QueryController extends Controller
{
    // 1️⃣ Tìm tất cả sản phẩm có giá > 100000
    public function expensiveProducts()
    {
        $products = Product::where('price', '>', 100000)->get();
        return view('queries.expensive_products', compact('products'));
    }

    // 2️⃣ Đếm số sản phẩm mỗi danh mục (withCount)
    public function categoryCount()
    {
        $categories = Category::withCount('products')->get();
        return view('queries.category_count', compact('categories'));
    }

    // 3️⃣ Lấy danh sách sinh viên kèm số lượng môn học đã đăng ký
    public function studentCourses()
    {
        $students = Student::withCount('courses')->get();
        return view('queries.student_courses', compact('students'));
    }
}
