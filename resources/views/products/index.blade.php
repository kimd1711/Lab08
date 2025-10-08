<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; background: #f7f7f7; }
        h2 { text-align: center; margin-bottom: 20px; }
        .container { width: 85%; margin: auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 8px rgba(0,0,0,0.1); }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; vertical-align: middle; }
        th { background: #e9ecef; }
        img { width: 80px; height: 80px; object-fit: cover; border-radius: 6px; }
        .actions a, .actions button {
            margin-right: 8px;
            padding: 6px 12px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }
        .btn-add { background: #28a745; color: white; }
        .btn-edit { background: #007bff; color: white; }
        .btn-delete { background: #dc3545; color: white; }
        .alert { width: 100%; padding: 10px; background: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 4px; margin-bottom: 15px; }
        form { display: inline; }
        .topbar { text-align: center; margin-bottom: 20px; }
        .topbar a { background: #007bff; color: white; padding: 8px 16px; border-radius: 4px; text-decoration: none; }
        .topbar a:hover { background: #0056b3; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Danh sách sản phẩm</h2>

        <div class="topbar">
            <a href="/products">🏠 Trang sản phẩm</a>
        </div>

        @if(session('success'))
            <div class="alert">{{ session('success') }}</div>
        @endif

        <p>
            <a href="/products/create" class="btn-add">+ Thêm sản phẩm mới</a>
        </p>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Hình ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá (VNĐ)</th>
                    <th>Danh mục</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>
                            @if($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" alt="Ảnh sản phẩm">
                            @else
                                <span style="color:#888;">(Không có ảnh)</span>
                            @endif
                        </td>
                        <td>{{ $product->name }}</td>
                        <td>{{ number_format($product->price, 0, ',', '.') }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td class="actions">
                            <a href="/products/{{ $product->id }}/edit" class="btn-edit">Sửa</a>
                            <form action="/products/{{ $product->id }}" method="POST" onsubmit="return confirm('Bạn có chắc muốn xóa sản phẩm này không?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-delete">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
