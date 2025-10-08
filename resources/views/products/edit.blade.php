<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chỉnh sửa sản phẩm</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        form { width: 400px; margin: auto; }
        label { display: block; margin-top: 10px; }
        input, select, button { width: 100%; padding: 8px; margin-top: 5px; }
        button { background: #007bff; color: #fff; border: none; margin-top: 15px; cursor: pointer; }
        button:hover { background: #0056b3; }
    </style>
</head>
<body>
    <h2>Chỉnh sửa sản phẩm</h2>

    <form action="/products/{{ $product->id }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Tên sản phẩm:</label>
        <input type="text" name="name" value="{{ $product->name }}" required>

        <label for="price">Giá:</label>
        <input type="number" name="price" value="{{ $product->price }}" required>

        <label for="category_id">Danh mục:</label>
        <select name="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" 
                    {{ $category->id == $product->category_id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        <button type="submit">Cập nhật</button>
    </form>
</body>
</html>
