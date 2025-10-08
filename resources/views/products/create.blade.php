<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm sản phẩm mới</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        form { width: 400px; margin: auto; background: #f9f9f9; padding: 20px; border-radius: 8px; box-shadow: 0 0 8px rgba(0,0,0,0.1); }
        label { display: block; margin-top: 10px; font-weight: bold; }
        input, select, button { width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #ccc; border-radius: 4px; }
        button { background: #2b8a3e; color: #fff; border: none; margin-top: 15px; cursor: pointer; font-size: 16px; }
        button:hover { background: #256f34; }
        a { display: inline-block; margin-top: 15px; color: #007bff; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Thêm sản phẩm mới</h2>

    <form action="/products" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="name">Tên sản phẩm:</label>
        <input type="text" id="name" name="name" required>

        <label for="price">Giá (VNĐ):</label>
        <input type="number" id="price" name="price" required min="0">

        <label for="category_id">Danh mục:</label>
        <select name="category_id" id="category_id" required>
            <option value="">-- Chọn danh mục --</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        <label for="image">Hình ảnh sản phẩm:</label>
        <input type="file" name="image" id="image" accept="image/*">

        <button type="submit">💾 Lưu sản phẩm</button>

        <a href="/products">← Quay lại danh sách</a>
    </form>
</body>
</html>
