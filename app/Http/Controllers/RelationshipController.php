<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Student;

class RelationshipController extends Controller
{
    public function index()
    {
        // 1️⃣ One to One: User ↔ Profile
        $users = User::with('profile')->get();

        // 2️⃣ One to Many: Category ↔ Products
        $categories = Category::with('products')->get();

        // 3️⃣ Many to Many: Student ↔ Courses
        $students = Student::with('courses')->get();

        return view('relationships.index', compact('users', 'categories', 'students'));
    }
}
