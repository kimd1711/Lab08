<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài 06 - Eloquent Relationships</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background: #fafafa; }
        h1 { text-align: center; color: #333; }
        h2 { margin-top: 40px; color: #007bff; }
        table { border-collapse: collapse; width: 100%; margin-top: 10px; background: white; }
        th, td { border: 1px solid #ccc; padding: 8px; }
        th { background: #f5f5f5; }
        .section { margin-bottom: 50px; padding: 20px; background: #fff; border-radius: 6px; box-shadow: 0 0 6px #ddd; }
    </style>
</head>
<body>

<h1>Bài 06: Eloquent Relationship nâng cao</h1>

<div class="section">
    <h2>1️⃣ Quan hệ One to One: User ↔ Profile</h2>
    <table>
        <tr>
            <th>#</th>
            <th>Tên user</th>
            <th>Email</th>
            <th>Địa chỉ</th>
            <th>Điện thoại</th>
        </tr>
        @foreach($users as $u)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $u->name }}</td>
            <td>{{ $u->email }}</td>
            <td>{{ $u->profile->address ?? 'Chưa có' }}</td>
            <td>{{ $u->profile->phone ?? 'Chưa có' }}</td>
        </tr>
        @endforeach
    </table>
</div>

<div class="section">
    <h2>2️⃣ Quan hệ One to Many: Category ↔ Products</h2>
    <table>
        <tr>
            <th>#</th>
            <th>Tên danh mục</th>
            <th>Sản phẩm</th>
        </tr>
        @foreach($categories as $c)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $c->name }}</td>
            <td>
                @foreach($c->products as $p)
                    • {{ $p->name }} ({{ number_format($p->price, 0, ',', '.') }} đ)<br>
                @endforeach
            </td>
        </tr>
        @endforeach
    </table>
</div>

<div class="section">
    <h2>3️⃣ Quan hệ Many to Many: Student ↔ Course</h2>
    <table>
        <tr>
            <th>#</th>
            <th>Tên sinh viên</th>
            <th>Các môn học đã đăng ký</th>
        </tr>
        @foreach($students as $s)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $s->name }}</td>
            <td>
                @foreach($s->courses as $course)
                    - {{ $course->title }} <br>
                @endforeach
            </td>
        </tr>
        @endforeach
    </table>
</div>

</body>
</html>
