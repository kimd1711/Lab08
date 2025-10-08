<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Sản phẩm giá > 100.000 VNĐ</title>
    <style>
        body { font-family: Arial; margin: 30px; }
        table { border-collapse: collapse; width: 70%; margin: auto; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background: #eee; }
        h2 { text-align: center; }
    </style>
</head>
<body>
    <h2>Sản phẩm có giá > 100.000 VNĐ</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($p->id); ?></td>
                    <td><?php echo e($p->name); ?></td>
                    <td><?php echo e(number_format($p->price, 0, ',', '.')); ?> VNĐ</td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html>
<?php /**PATH D:\KimDoan\Lab08\resources\views/queries/expensive_products.blade.php ENDPATH**/ ?>