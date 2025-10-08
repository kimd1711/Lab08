<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Sinh viên và số lượng môn học</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        table { border-collapse: collapse; width: 70%; margin: auto; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: center; }
        th { background: #f2f2f2; }
        h2 { text-align: center; margin-bottom: 20px; }
    </style>
</head>
<body>
    <h2>Danh sách sinh viên và số lượng môn học đã đăng ký</h2>
    <table>
        <tr>
            <th>Tên sinh viên</th>
            <th>Số lượng môn học</th>
        </tr>
        @foreach ($students as $s)
            <tr>
                <td>{{ $s->name }}</td>
                <td>{{ $s->courses_count }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
