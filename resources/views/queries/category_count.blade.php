<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh mục và số lượng sản phẩm</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        table { border-collapse: collapse; width: 60%; margin: auto; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: center; }
        th { background: #f2f2f2; }
        h2 { text-align: center; margin-bottom: 20px; }
    </style>
</head>
<body>
    <h2>Số lượng sản phẩm theo danh mục</h2>
    <table>
        <tr>
            <th>Tên danh mục</th>
            <th>Số sản phẩm</th>
        </tr>
        @foreach ($categories as $c)
            <tr>
                <td>{{ $c->name }}</td>
                <td>{{ $c->products_count }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
